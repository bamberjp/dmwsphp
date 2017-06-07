<?php

namespace DMWSPHP;

/**
  * Connection Class for accessing the DMWS REST API.
  *
  */
class DMWSConnection {
	/**
	  * Username for autenticating REST Call.
	  *
	  * @var string
	  */
	private $username;
	
	/**
	  * Password for autenticating REST Call.
	  *
	  * @var string
	  */
	private $password;
	
	/**
	  * Determines if Strict SSL is used for CURL Call.
	  *
	  * @var boolean
	  */
	private $strict;
	
	/**
	  * Sets if BETA or Production URL is used for REST Calls.
	  *
	  * @var boolean
	  */
	private $beta;
	
	/**
	  * Constructor
	  * 
	  * @param string $username Username for autenticating REST Call.
	  * @param string $password Password for autenticating REST Call.
	  * @param boolean $strict If true, CURL call will use Strict SSL, default true.
	  * @param boolean $beta If true, uses BETA Base URL, default false.
	  * @return void
	  */
	public function __construct($username, $password, $strict = true, $beta = false) {
		$this->username = $username;
		$this->password = $password;
		$this->strict = $strict;
		$this->beta = $beta;
	}

	/**
	  * Determine if Strict SSL will be used for REST Calls.
	  *
	  * @param boolean $strict If true, Strict SSL will be used. Default true.
	  * @return void. If wrong type, throws exception.
	  */
	public function useStrict($strict = true) {
		if (!is_bool($strict)) throw new Exception("Invalid type. Expected boolean as parameter.");
		
		$this->strict = $strict;
	}
	
	/**
	  * Returns the Base URL for REST Service.
	  *
	  * @return void. If wrong type, throws exception.
	  */
	private function getBaseURL() {
		if ($this->beta) {
			return "https://beta.digitalmeasures.com/login/service/v4";
		} else {
			return "https://www.digitalmeasures.com/login/service/v4/";
		}
	}
	
	/**
	  * Determine if BETA or Production Base URL will be used for REST Calls.
	  *
	  * @return boolean
	  */
	public function isBeta() {
		return $this->beta;
	}
	
	/**
	  * Sets if BETA or Production URL will be used for REST Calls.
	  
	  * @param boolean $beta If true, BETA URL is used. Default false.
	  * @return void. If wrong type, throws exception.
	  */
	public function useBeta($beta = false) {
		if (!is_bool($beta)) throw new Exception("Invalid type. Expected boolean as parameter.");
		
		$this->beta = $beta;
	}
	
	/**
	  * Utility function for parsing GunZip XML response.
	  * 
	  * @param mixed $data Data resulting from REST Call.
	  * @return SimpleXMLElement. If error, throws Exception.
	  */
	private function _parse_response($data) {
		$XMLHandler = new \Httpful\Handlers\XmlHandler();
		try {
			$data = $this->_gunzip_decode($data);
			return $XMLHandler->parse($data);
		} catch (Exception $e) {
			/* error message not gzip encoded */
			$data = $XMLHandler->parse($data);
			if (isset($data->Message)) {
				throw new Exception("API Error: " . $data->Message);
			}
			throw $e;
		}
	}
	
	/**
	  * Utility function for decoding GunZip.
	  * based on code by Maryam Jeddian, see http://stackoverflow.com/questions/310650/decode-gzipped-web-page-retrieved-via-curl-in-php/4841712#4841712
	  *
	  * @param mixed $data Data resulting from CURL Call.
	  * @return mixed. If error, throws Exception.
	  */
	private function _gunzip_decode($data) {
      $offset = 0;
      if (substr($data,0,2) == "\x1f\x8b")
         $offset = 2;
      if (substr($data, $offset,1) == "\x08")  {
         return gzinflate(substr($data, $offset + 8));
      }
      throw new Exception("Unsupported Encoding");
    }
	
	/**
	  * Utility function for making REST Call.
	  *
	  * @param string $uri REST Endpoint to call.
	  * @return SimpleXMLElement. If error, throws Exception.
	  */
	private function _call($uri) {
		try {
			$response = \Httpful\Request::get($uri)
				->authenticateWith($this->username, $this->password)
				->strictSSL($this->strict)
				->addHeader("Accept-Encoding", "gzip")
				->parseWith(function($body) { return $this->_parse_response($body); })
				->send();
		
			return $response->body;
		} catch (Exception $e) {
			throw $e;
		}
	}
	
	/**
	  * Retrieves available Schema Resources
	  *
	  * @return DMWSListResource of DMWSSchemaResource. If error, throws Exception.
	  */
	public function getSchema() {
		try {
			$data = $this->_call($this->getBaseURL() . "Schema");
			
			$ListResource = new DMWSListResource($this);
			foreach ($data->Schema as $SchemaResource) {
				$ListResource->addResource(new DMWSSchemaResource($this, (string)$SchemaResource["schemaKey"], (string)$SchemaResource["text"]));
			}
			
			return $ListResource;
		} catch (Exception $e) {
			throw $e;
		}
	}
	
	/**
	  * Retrieves first available Schema Resources
	  *
	  * @return DMWSSchemaResource. If error, throws Exception.
	  */
	public function getDefaultSchema() {
		try {
			$ListResource = $this->getSchema();
			
			if ($ListResource->valid()) {
				return $ListResource->current();
			} else {
				return false;
			}
		} catch (Exception $e) {
			throw $e;
		}
	}
	
	/**
	  * Retrieves first available Schema Resources
	  *
	  * @param DMWSSchemaResource $SchemaResource Reference to a DMWSSchemaResource.
	  * @return DMWSListResource of DMWSView. If error, throws Exception.
	  */
	public function getSchemaEntities(&$SchemaResource) {
		if (get_class($SchemaResource) != "DMWSSchemaResource") {
			throw new Exception("Invalid type. Expected DMWSSchemaResource as parameter.");
		}
		
		try {
			$data = $this->_call($this->getBaseURL() . "SchemaEntity/". $SchemaResource->getKey());
			
			$SchemaEntityListResource = new DMWSListResource();

			foreach ($data->View as $View) {
				$ViewResource = new DMWSView((string)$View["text"], new DMWSListResource());
				$SchemaEntityResources = $ViewResource->getSchemaEntityResources();

				foreach ($View->Entity as $SchemaEntity) {
					$SchemaEntityResources->addResource(new DMWSSchemaEntityResource($this, $SchemaResource, (string)$SchemaEntity["key"], (string)$SchemaEntity["text"], $ViewResource));
				}
				
				$SchemaEntityListResource->addResource($ViewResource);
			}
			
			return $SchemaEntityListResource;
		} catch (Exception $e) {
			throw $e;
		}
	}
	
	/* TODO: Variants of params */
	public function getUsers() {
		try {
			$data = $this->_call($this->getBaseURL() . "User");

			$ListResource = new DMWSListResource($this);
			
			foreach ($data->User as $user) {
				$ListResource->addResource(new DMWSUserResource((string)$user->attributes()->username, 
																(string)$user->FirstName,
																(isset($user->MiddleName))?$user->MiddleName:"",
																(string)$user->LastName,
																(string)$user->Email,
																(isset($user->attributes()->enabled)?false:true)));	/* attribute assumed for active accounts */
			}
			
			return $ListResource;
		} catch (Exception $e) {
			throw $e;
		}
	}
	
	/* TODO: Param for Retrieving particular SchemaIndexResource */
	
	/**
	  * Retrieves DMWS Schema Index Resources associated with a DMWS Schema Reosurce.
	  *
	  * @param DMWSSchemaResource $SchemaResource Reference to a DMWSSchemaResource.
	  * @return DMWSListResource of DMWSSchemaIndexResource. If error, throws Exception.
	  *
	  * IndexKeyEntryKeys (Default): college, department, username
	  */
	public function getSchemaIndices(&$SchemaResource) {
		if (get_class($SchemaResource) != "DMWSSchemaResource") {
			throw new Exception("Invalid type. Expected DMWSSchemaResource as parameter.");
		}
		
		try {
			$data = $this->_call($this->getBaseURL() . "SchemaIndex/" . $SchemaResource->getKey()); 
			
			$SchemaIndexResources = new DMWSListResource();
			
			foreach ($data->Index as $SchemaIndex) {
				$IndexEntries = new DMWSListResource();
				
				foreach ($SchemaIndex->IndexEntry as $IndexEntry) {
					$IndexEntries->addResource(new DMWSIndexEntry($this, (string)$IndexEntry->attributes()->entryKey, (string)$IndexEntry->attributes()->text, $SchemaIndexResource));
				}
				
				$SchemaIndexResources->addResource(new DMWSSchemaIndexResource($this, 
																			   $SchemaResource, 
																			   (string)$SchemaIndex->attributes()->indexKey,
																			   (string)$SchemaIndex->attributes()->text,
																			    $IndexEntries));
			}
			return $SchemaIndexResources;
		} catch (Exception $e) {
			throw $e;
		}
	}
	
	public function getPCI(&$SchemaResource) {
		if (get_class($SchemaResource) != "DMWSSchemaResource") {
			throw new Exception("Invalid type. Expected DMWSSchemaResource as parameter.");
		}
		
		try {
			$data = $this->_call($this->getBaseURL() . "SchemaData/" . $SchemaResource->getKey() . "/PCI"); 
			
			$ListResource = new DMWSListResource();
			
			foreach ($data->Record as $record) {
				$home_citystatezip = explode(",", (string)$record->PCI->HOME_CITYSTATEZIP);
				$home_city = (isset($home_citystatezip[0]))?trim($home_citystatezip[0]):"";
				$home_statezip = (isset($home_citystatezip[1]))?explode(" ", trim($home_citystatezip[1])):array();
				$home_state = (isset($home_statezip[0]))?$home_statezip[0]:"";
				$home_zip = (isset($home_statezip[1]))?$home_statezip[1]:"";
				
				$ListResource->addResource(new DMWSPCI(
						(string)$record->attributes()->userId,
						(string)$record->attributes()->username,
						(string)$record->attributes()->termId,
						(string)$record->PCI->attributes()->id,
						(string)$record->PCI->PREFIX,
						(string)$record->PCI->FNAME,
						(string)$record->PCI->PFNAME,
						(string)$record->PCI->MNAME,
						(string)$record->PCI->LNAME,
						(string)$record->PCI->SUFFIX,
						(string)$record->PCI->EMAIL,
						(string)$record->PCI->BUILDING,
						(string)$record->PCI->ROOMNUM,
						(string)$record->PCI->HOME_ADDRESS1,
						(string)$record->PCI->HOME_ADDRESS2,
						$home_city,
						$home_state,
						$home_zip,
						(string)$record->PCI->OPHONE1 . (string)$record->PCI->OPHONE2 . (string)$record->PCI->OPHONE3,
						(string)$record->PCI->DPHONE1 . (string)$record->PCI->DPHONE2 . (string)$record->PCI->DPHONE3,
						(string)$record->PCI->HPHONE1 . (string)$record->PCI->HPHONE2 . (string)$record->PCI->HPHONE3,
						(string)$record->PCI->FAX1 . (string)$record->PCI->FAX2 . (string)$record->PCI->FAX3,
						(string)$record->PCI->WEBSITE,
						(string)$record->PCI->GENDER,
						(string)$record->PCI->ETHNICITY,
						(string)$record->PCI->CITIZEN,
						(string)$record->PCI->SRANK,
						(string)$record->PCI->DTM_HIRE,
						(string)$record->PCI->DTD_HIRE,
						(string)$record->PCI->DTY_HIRE,
						(string)$record->PCI->HIRE_START,
						(string)$record->PCI->HIRE_END,
						(string)$record->PCI->BIO,
						(string)$record->PCI->EXPERTISE,
						(string)$record->PCI->DTM_EXAM,
						(string)$record->PCI->DTD_EXAM,
						(string)$record->PCI->DTY_EXAM,
						(string)$record->PCI->EXAM_START,
						(string)$record->PCI->EXAM_END
					));
			}
			return $ListResource;
		} catch (Exception $e) {
			throw $e;
		}
	}
	
	public function getINTELLCONT($SchemaResource) {
		if (get_class($SchemaResource) != "DMWSSchemaResource") {
			throw new Exception("Invalid type. Expected DMWSSchemaResource as parameter.");
		}
		
		try {
			$data = $this->_call($this->getBaseURL() . "SchemaData/" . $SchemaResource->getKey() . "/INTELLCONT"); 
			
			$ListResource = new DMWSListResource();

			foreach ($data->Record as $Record) {
				foreach ($Record->INTELLCONT as $Intellcont) {
					$Authors = new DMWSListResource();

					foreach ($Intellcont->INTELLCONT_AUTH as $Author) {
						$Authors->addResource(new DMWSIntellcontAuth(
								(string)$Author->attributes()->id,
								(string)$Author->FACULTY_NAME,
								(string)$Author->FNAME,
								(string)$Author->MNAME,
								(string)$Author->LNAME,
								(string)$Author->ROLE
							));
					}
					
					$ListResource->addResource(new DMWSIntellcont(
						(string)$Intellcont->attributes()->id,
						(string)(($Intellcont->CONTYPE == "Other")?$Intellcont->CONTYPEOTHER:$Intellcont->CONTYPE),
						(string)$Intellcont->CLASSIFICATION,
						$Authors,
						(string)$Intellcont->STATUS,
						(string)$Intellcont->TITLE,
						(string)$Intellcont->PUBLISHER,
						(string)$Intellcont->PUBCTYST,
						(string)$Intellcont->PUBCTYST,
						(string)$Intellcont->PUBCNTRY,
						(string)$Intellcont->VOLUME,
						(string)$Intellcont->ISSUE,
						(string)$Intellcont->PAGENUM,
						(string)$Intellcont->ISBNISSN,
						(string)$Intellcont->AUDIENCE,
						(string)$Intellcont->ACCEPTANCE_RATE_CABELL,
						(string)$Intellcont->REFEREED,
						(string)$Intellcont->PUBLICAVAIL,
						(string)$Intellcont->ABSTRACT,
						(string)$Intellcont->DTM_EXPSUB,
						(string)$Intellcont->DTD_EXPSUB,
						(string)$Intellcont->DTY_EXPSUB,
						(string)$Intellcont->EXPSUB_START,
						(string)$Intellcont->EXPSUB_END,
						(string)$Intellcont->DTM_SUB,
						(string)$Intellcont->DTD_SUB,
						(string)$Intellcont->DTY_SUB,
						(string)$Intellcont->SUB_START,
						(string)$Intellcont->SUB_END,
						(string)$Intellcont->DTM_ACC,
						(string)$Intellcont->DTY_ACC,
						(string)$Intellcont->ACC_START,
						(string)$Intellcont->ACC_END,
						(string)$Intellcont->DTM_PUB,
						(string)$Intellcont->DTD_PUB,
						(string)$Intellcont->DTY_PUB,
						(string)$Intellcont->PUB_START,
						(string)$Intellcont->PUB_END,
						(string)$Intellcont->USER_REFERENCE_CREATOR
					));
				}
			}
			
			return $ListResource;
		} catch (Exception $e) {
			throw $e;
		}
	}
}