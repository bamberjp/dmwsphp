<?php

namespace DMWSPHP;

/**
  * Base resource class for data returned from DMWS API.
  *
  */
class DMWSResourceBase implements DMWSResource {
	/**
	  * Reference to DMWSConnection that created this resource.
	  *
	  * @var DMWSConnection
	  */
	private $connection;
	
	/**
	  * DM Key associate with this resource.
	  *
	  * @var string
	  */
	private $key;
	
	/**
	  * DM Text associated with this resource.
	  *
	  * @var string
	  */
	private $text;
	
	/**
	  * Constructor
	  *
	  * @param DMWSConnection $connection Reference to DMWSConnection that created this resource.
	  * @param string @key DM Key associate with this resource.
	  * @param string @text DM Text associated with this resource.
	  * @return void
	  */
	public function __construct(&$connection, $key, $text) {
		$this->key = $key;
		$this->text = $text;
		$this->connection = &$connection;
	}
	
	/**
	  * Returns DM Key for this resource.
	  *
	  * @return string 
	  */
	public function getKey() {
		return $this->key;
	}
	
	/**
	  * Returns DM Text for this resource.
	  *
	  * @return string
	  */
	public function getText() {
		return $this->text;
	}
	/**
	  * Returns DMWSConnection that created this resource.
	  *
	  * @return DMWSConnection
	  */
	public function getConnection() {
		return $this->connection;
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS Resouce [\n\tkey: \"" . $this->getKey() . "\",\n\t text: \"" . $this->getText() . "\"\n]";
	}
	
	/**
	  * Deconstructor
	  *
	  * @return void
	  */
	public function __destruct() {}
}