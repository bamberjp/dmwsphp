<?php

namespace DMWSPHP;

class DMWSIntellcontAuth implements DMWSResource {
	private $id;
	private $faculty_name;
	private $fname;
	private $mname;
	private $lname;
	private $role;

	public function __construct($id = "",
								$faculty_name = "",
								$fname = "",
								$mname = "",
								$lname = "",
								$role = "") {
		$this->id = $id;
		$this->faculty_name = $faculty_name;
		$this->fname = $fname;
		$this->mname = $mname;
		$this->lname = $lname;
		$this->role = $role;
	}
	
	public function getID() { 
		return $this->id; 
	}
	public function setID($id) { 
		$this->id = $id; 
	}
	public function getFacultyName() { 
		return $this->faculty_name; 
	}
	public function setFacultyName($faculty_name) { 
		$this->faculty_name = $faculty_name; 
	}
	public function getFirstName() { 
		return $this->fname; 
	}
	public function setFirstName($fname) { 
		$this->fname = $fname; 
	}
	public function getMiddleName() { 
		return $this->mname;
	}
	public function setMiddleName($mname) { 
		$this->mname = $mname; 
	}
	public function getLastName() { 
		return $this->lname;
	}
	public function setLastName($lname) { 
		$this->lname = $lname; 
	}
	public function getRole() { 
		return $this->role; 
	}
	public function setRole($role) { 
		$this->role = $role; 
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS INTELLCONT AUTH RECORD [\n" . 
			   "\tID: \"" . $this->getId() . "\", \n" . 
			   "\tfaculty_name: \"" . $this->getFacultyName() . "\", \n" . 	
			   "\tfname: \"" . $this->getFirstName() . "\", \n" . 			   
			   "\tmname: \"" . $this->getMiddleName() . "\", \n" . 
			   "\tlname: \"" . $this->getLastName() . "\", \n" . 	
			   "\trole: \"" . $this->getRole() . "\", \n" . 
			   "]";
	}
}