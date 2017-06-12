<?php

namespace DMWSPHP;

use DMWSPHP\DMWSResourceBase;
use DMWSPHP\DMWSConnection;

/**
  * DMWS Schema Index Resource.
  *
  */
class DMWSSchemaIndexResource extends DMWSResourceBase {
	/**
	  * Reference to DMWSSchemaResource this resource is associated with.
	  *
	  * @var DMWSSchemaResource
	  */
	private $SchemaResource;
	
	/**
	  * Reference to DMWSListResource containing the DMWSIndexEntries associated with this Resource.
	  *
	  * @var DMWSListResource
	  */
	private $IndexEntries;
	
	/**
	  * Constructor
	  *
	  * @param DMWSConnection $connection Reference to DMWSConnection
	  * @param DMWSSchemaResource $SchemaResource Reference to DMWSSchemaResource associated with the Schema Index Resource
	  * @param string $entityKey Entity Key attribute of Schema Index
	  * @param string $text	Text atrribute of Schema Index
	  * @param DMWSListResource Reference to DMWSListResource containing the DMWSIndexEntries associated with this Resource.
	  * @return void
	  */
	public function __construct(&$connection, &$SchemaResource, $entityKey, $text, $IndexEntryListResource) {
		parent::__construct($connection, $entityKey, $text);
		$this->SchemaResource = &$SchemaResource;
		$this->IndexEntries = &$IndexEntryListResource;
	}
	
	/**
	  * Get the Schema Resource associated with the Schema Index Resource.
	  *
	  * @return DMWSSchemaResource
	  */
	public function getSchema() {
		return $this->SchemaResource;
	}
	
	/**
	  * Get the Index Entries associated with the Schema Index Resource.
	  *
	  * @return DMWSListResource DMWSListResource containing the DMWSIndexEntries associated with this Resource.
	  */
	public function getIndexEntries() {
		return $this->IndexEntries;
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS Schema Index Resource [\n\tkey: \"" . $this->getKey() . "\", \n\ttext: \"" . $this->getText() . "\",\n]";
	}
}
