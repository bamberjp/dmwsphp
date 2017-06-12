<?php

namespace DMWSPHP;

use DMWSPHP\DMWSResourceBase;
use DMWSPHP\DMWSConnection;

/**
  * DMWS Schema Resource.
  *
  */
class DMWSSchemaResource extends DMWSResourceBase {	
	/**
	  * Constructor
	  *
	  * @param DMWSConnection $connection Reference to DMWSConnection that created this resource.
	  * @param string @key DM Key associate with this resource.
	  * @param string @text DM Text associated with this resource.
	  * @return void
	  */
	public function __construct(&$connection, $schemaKey, $text) {
		parent::__construct($connection, $schemaKey, $text);
	}
	
	/**
	  * Get Schema Entity Resources for this Schema Resource.
	  *
	  * @return DMWSListResource of DMWSView. If error, throws Exception.
	  */	
	public function getSchemaEntities() {
		return $this->getConnection()->getSchemaEntities($this);
	}
	
	/**
	  * Get Schema Index Resources for this Schema Resource.
	  *
	  * @return DMWSListResource of DMWSSchemaIndexResource. If error, throws Exception.
	  */	
	public function getSchemaIndices() {
		return $this->getConnection()->getSchemaIndices($this);
	}
	
	/**
	  * Get PCI Records Associated with this Schema Resource.
	  *
	  * @return DMWSListResource of DMWSPCI Resource
	  */
	public function getPCI() {
		return $this->getConnection()->getPCI($this);
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS Schema Resource [\n\tkey: \"" . $this->getKey() . "\", \n\ttext: \"" . $this->getText() . "\"\n]";
	}
}
