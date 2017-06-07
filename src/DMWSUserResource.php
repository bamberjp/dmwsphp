<?php

namespace DMWSPHP;

/**
  * DMWS User Resource.
  *
  */
class DMWSUserResource implements DMWSResource {	
	/**
	  * User Resource Username attribute.
	  *
	  * @var string
	  */
	private $username;
	
	/**
	  * User Resource FirstName.
	  *
	  * @var string
	  */
	private $firstname;
	
	/**
	  * User Resource Middle Name.
	  *
	  * @var string
	  */
	private $middlename;
	
	/**
	  * User Resource LastName.
	  *
	  * @var string
	  */
	private $lastname;
	
	/**
	  * User Resource Email.
	  *
	  * @var string
	  */
	private $email;
	
	/**
	  * Indicates if the user account is currently enabled.
	  *
	  * @var boolean
	  */
	private $enabled;
	
	/**
	  * Constructor
	  *
	  * @param string $username User Resource Username attribute
	  * @param string $firstname User Resource FirstName
	  * @param string $middlename User Resource Middle Name
	  * @param string $lastname User Resource LastName
	  * @param string $email User Resource Email
	  * @param boolean $enabled Indicates if the user account is currently enabled
	  * @return void
	  */
	public function __construct($username = "", $firstname = "", $middlename = "", $lastname = "", $email = "", $enabled = true) {
		/* TODO: Connection &$connection*/
		$this->username = $username;
		$this->firstname = $firstname;
		$this->middlename = $middlename;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->enabled = $enabled;
	}
	
	/**
	  * Get the Username for this resource.
	  *
	  * @return string
	  */	
	public function getUsername() {
		return $this->username;
	}
	
	/**
	  * Set the Username for this resource.
	  *
	  * @param string $username Username to set for this resource.
	  * @return void
	  */		
	public function setUsername($username) {
		$this->username = $username;
	}
	
	/**
	  * Get the FirstName for this resource.
	  *
	  * @return string
	  */		
	public function getFirstname() {
		return $this->firstname;
	}
	
	/**
	  * Set the FirstName for this resource.
	  *
	  * @param string $firstname FirstName to set for this resource.
	  * @return void
	  */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}
	
	/**
	  * Get the Middle Name for this resource.
	  *
	  * @return string
	  */	
	public function getMiddlename() {
		return $this->middlename;
	}
	
	/**
	  * Set the Middle Name for this resource.
	  *
	  * @param string $middlename Middle Name to set for this resource.
	  * @return void
	  */	
	public function setMiddlename($middlename) {
		$this->middlename = $middlename;
	}
	
	/**
	  * Get the LastName for this resource.
	  *
	  * @return string
	  */	
	public function getLastname() {
		return $this->lastname;
	}
	
	/**
	  * Set the LastName for this resource.
	  *
	  * @param string $lastname LastName to set for this resource.
	  * @return void
	  */	
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	  * Get the Email for this resource.
	  *
	  * @return string
	  */		
	public function getEmail() {
		return $this->email;
	}
	
	/**
	  * Set the Email for this resource.
	  *
	  * @param string $email Email to set for this resource.
	  * @return void
	  */	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	/**
	  * Get if User account is enabled.
	  *
	  * @return boolean
	  */
	public function isEnabled() {
		return $this->enabled;
	}
	
	/**
	  * Set if User account is enabled.
	  *
	  * @param boolean $enabled If value is true, account is enabled.
	  * @return void
	  */	
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS User Resource [\n\tUsername: \"" . $this->getUsername() . "\",\n" . 
								     "\tFirstName: \"" . $this->getFirstname() . "\",\n" .
									 "\tMiddleName: \"" . $this->getMiddlename() . "\",\n" . 
									 "\tLastName: \"" . $this->getLastName() . "\",\n" . 
									 "\tEmail: \"" . $this->getEmail() . "\"\n" . 
									 "\tEnabled: \"" . $this->isEnabled() . "\"\n]";
	}
	
	/**
	  * Deconstructor
	  *
	  * @return void
	  */
	public function __destruct() {}
}