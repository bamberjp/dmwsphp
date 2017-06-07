<?php

namespace DMWSPHP;

/**
  * DMWS View.
  *
  */
class DMWSView implements DMWSResource {
	/**
	  * Resource Text.
	  *
	  * @var string
	  */
	private $text;
	
	/**
	  * DMWSListResource containing DMWSSchemaEntityResources associated with this DMWSView
	  *
	  * @var DMWSListResource
	  */
	private $ListResource;
	
	/**
	  * Constructor
	  *
	  * @param string $text Resource Text
	  * @param DMWSListResource $ListResource Reference to DMWSListResource containing DMWSSchemaEntityResources associated with this DMWSView
	  * @return void
	  */
	public function __construct($text, &$ListResource) {
		$this->text = $text;
		$this->ListResource = &$ListResource;
	}
	
	/**
	  * Get the Text for this resource.
	  *
	  * @return string
	  */
	public function getText() {
		return $this->text;
	}
	
	/**
	  * Set the Text for this resource.
	  *
	  * @return void
	  */
	public function setText($text) {
		$this->text = $text;
	}
	
	/**
	  * Get a DMWSListResource containing the DMWSSchemaEntityResources associated with this DMWSView.
	  *
	  * @return DMWSListResource
	  */
	public function getSchemaEntityResources() {
		return $this->ListResource;
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS View [\n\ttext: \"" . $this->getText() . "\",\n]";
	}
	
	/**
	  * Deconstructor
	  *
	  * @return void
	  */
	public function __destruct() {}
}