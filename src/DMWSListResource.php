<?php

namespace DMWSPHP;

use DMWSPHP\DMWSResource;

/**
  * DMWS List Resource.
  *
  */
class DMWSListResource implements \Iterator {
	/**
	  * Array for storing DMWS Resources.
	  *
	  * @var mixed DMWSResource
	  */
	private $resources;
	
	/**
	  * Iterator position.
	  *
	  * @var int
	  */
	private $position;
	
	/**
	  * Constructor
	  *
	  * @return void
	  */
	public function __construct() {
		$this->resources = array();
		$this->position = 0;
	}
	
	/**
	  * Adds a reference to a DMWS Resource to the the DMWS List Resource.
	  *
	  * @param DMWSResource $resource Reference to a DMWSResource. Throws Exception if invalid type.
	  * @return void
	  */
	public function addResource($resource) {
		if (!($resource instanceof DMWSResource)) throw new \Exception("Invalid type. Expected DMWSResource as parameter.");
		
		$this->resources[] = &$resource;
	}
	
	/**
	  * Removes reference to a DMWS Resource to the the DMWS List Resource.
	  *
	  * @param string $key DMWS Resource key.
	  * @return void
	  */
	public function removeResource($key) {
		if (isset($this->resources[$key]))
			unset($this->resources[$key]);
	}
	
	/**
	  * Iterator function for resetting position.
	  *
	  * @return void
	  */
	public function rewind() {
		$this->position = 0;
	}
	
	/**
	  * Iterator function retrieving current DMWS Resource.
	  *
	  * @return DMWSResource
	  */
	public function current() {
		return $this->resources[$this->position];
	}
	
	/**
	  * Iterator function retrieving current position.
	  *
	  * @return int
	  */
	public function key() {
		return $this->position;
	}
	
	/**
	  * Iterator function to increment position.
	  *
	  * @return void
	  */
	public function next() {
		++$this->position;
	}
	
	/**
	  * Iterator function to determine if position is valid.
	  *
	  * @return boolean
	  */
	public function valid() {
		return isset($this->resources[$this->position]);
	}
	
	/**
	  * toString function.
	  *
	  * @return string
	  */
	public function __toString() {
		$result = "DMWSListResource [\n";
		
		foreach($this->resources as $key => $value) {
			$result .= "\t" . $value . "\n";
		}
		
		$result .= "]";
		
		return $result;
	}
}
