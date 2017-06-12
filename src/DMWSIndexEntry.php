<?php

namespace DMWSPHP;

use DMWSPHP\DMWSResourceBase;
use DMWSPHP\DMWSSchemaResource;
use DMWSPHP\DMWSConnection;

/**
  * DMWS Index Entry.
  *
  */
class DMWSIndexEntry extends DMWSResourceBase {
	/**
	  * Reference to DMWSSchemaIndexResource this resource is associated with.
	  *
	  * @var DMWSSchemaIndexResource
	  */
	private $SchemaIndexResource;
	
	/**
	  * Constructor
	  *
	  * @return void
	  */
	public function __construct(&$connection, $entityKey, $text, &$SchemaIndexResource) {
		parent::__construct($connection, $entityKey, $text);
		$this->SchemaIndexResource = &$SchemaIndexResource;
	}

	/**
	  * Returns DMWS Schema Index Resource associated with this Index Entry.
	  *
	  * @return DMWSSchemaIndexResource
	  */
	public function getSchemaIndexResource() {
		return $this->SchemaIndexResource;
	}
	
	/**
	  * toString function.
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS Index Entry [\n\tkey: \"" . $this->getKey() . "\", \n\ttext: \"" . $this->getText() . "\",\n]";
	}
}
