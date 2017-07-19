<?php

namespace DMWSPHP;

use DMWSPHP\DMWSResource;

class DMWSResearch implements DMWSResource {
	private $userId;
	private $username;
	private $termId;
	private $id;
	private $desc;
	
	public function __construct($userId,
								$username,
								$termId,
								$id,
								$desc) {
		$this->userId = $userId;
		$this->username = $username;
		$this->termId = $termId;
		$this->id = $id;
		$this->desc = $desc;
	}
	
	public function getUserId() { 
		return $this->userId; 
	}
	public function setUserId($userId) { 
		$this->userId = $userId; 
	}
	public function getUsername() { 
		return $this->username; 
	}
	public function setUsername($username) { 
		$this->username = $username; 
	}
	public function getTermId() { 
		return $this->termid; 
	}
	public function setTermId($termid) { 
		$this->termid = $termid; 
	}
	public function getId() { 
		return $this->id; 
	}
	public function setId($id) { 
		$this->id = $id; 
	}
	public function getDesc() {
		return $this->desc;
	}
	public function setDesc($desc) {
		$this->desc = $desc;
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS RESEARCH RECORD [\n" . 
			   "\tuserID: \"" . $this->getUserId() . "\", \n" . 
			   "\tusername: \"" . $this->getUsername() . "\", \n" . 	
			   "\ttermid: \"" . $this->getTermId() . "\", \n" . 			   
			   "\tid: \"" . $this->getId() . "\", \n" . 
			   "\tprefix: \"" . $this->getDesc() . "\", \n" . 	
			   "]";	   
	}
}
