<?php

namespace DMWSPHP;

/**
  * DMWS Schema Entity Resource.
  *
  */
class DMWSSchemaEntityResource extends DMWSResourceBase {
	/**
	  * Reference to DMWSView this resource is associated with.
	  *
	  * @var DMWSView
	  */
	private $view;
	
	/**
	  * Reference to DMWSSchemaResource this resource is associated with.
	  *
	  * @var DMWSSchemaResource
	  */
	private $schema;
	
	/**
	  * Constructor
	  *
	  * @param DMWSConnection $connection Reference to DMWSConnection
	  * @param DMWSSchemaResource $SchemaResource Reference to DMWSSchemaResource associated with the Schema Index Resource
	  * @param string $entityKey Entity Key attribute of Schema Index
	  * @param string $text	Text atrribute of Schema Index
	  * @param DMWSView Reference to DMWSView associated with this Resource.
	  * @return void
	  */
	public function __construct(&$connection, &$schema, $entityKey, $text, &$view) {
		parent::__construct($connection, $entityKey, $text);
		$this->view = &$view;
		$this->schema = &$schema;
	}
	
	/**
	  * Get the Schema Resource associated with the Schema Index Resource.
	  *
	  * @return DMWSSchemaResource
	  */
	public function getSchema() {
		return $this->schema;
	}
	
	/**
	  * Get the View Resource associated with the Schema Entity Resource.
	  *
	  * @return DMWSView
	  */
	public function getView() {
		return $this->view;
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS Schema Entity Resource [\n\tkey: \"" . $this->getKey() . "\", \n\ttext: \"" . $this->getText() . "\",\n]";
	}
}