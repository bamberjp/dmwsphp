<?php

namespace DMWSPHP;

use DMWSPHP\DMWSResource;

class DMWSEducation implements DMWSResource {
	private $userId;
	private $username;
	private $termId;
	private $id;
	private $deg; /* $degother */
	private $school;
	private $school_loc;
	private $major;
	private $supparea;
	private $disstitle;
	private $highest;
	private $yr_comp;
	private $comp_start;
	private $comp_end;
	
	public function __construct($userId,
								$username,
								$termId,
								$id,
								$deg, /* $degother */
								$school,
								$school_loc,
								$major,
								$supparea,
								$disstitle,
								$highest,
								$yr_comp,
								$comp_start,
								$comp_end) {
		$this->userId = $userId;
		$this->username = $username;
		$this->termId = $termId;
		$this->id = $id;
		$this->deg = $deg;
		$this->school = $school;
		$this->school_loc = $school_loc;
		$this->major = $major;
		$this->supparea = $supparea;
		$this->disstitle = $disstitle;
		$this->highest = $highest;
		$this->yr_comp = $yr_comp;
		$this->comp_start = $comp_start;
		$this->comp_end = $comp_end;
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
		return $this->termId; 
	}
	public function setTermId($termId) { 
		$this->termId = $termId; 
	}
	public function getId() { 
		return $this->id; 
	}
	public function setId($id) { 
		$this->id = $id; 
	}
	public function getDeg() { 
		return $this->deg; 
	}
	public function setDeg($deg) { 
		$this->deg = $deg; 
	}
	public function getSchool() { 
		return $this->school; 
	}
	public function setSchool($school) { 
		$this->school = $school; 
	}
	public function getSchoolLocation() { 
		return $this->school_loc; 
	}
	public function setSchoolLocation($school_loc) { 
		$this->school_loc = $school_loc; 
	}	
	public function getMajor() { 
		return $this->major; 
	}
	public function setMajor($major) { 
		$this->major = $major; 
	}
	public function getSuppArea() { 
		return $this->supparea; 
	}
	public function setSuppArea($supparea) { 
		$this->supparea = $supparea; 
	}
	public function getDissTitle() { 
		return $this->disstitle; 
	}
	public function setDissTitle($disstitle) { 
		$this->disstitle = $disstitle; 
	}
	public function getHighest() { 
		return $this->highest; 
	}
	public function setHighest($highest) { 
		$this->highest = $highest; 
	}	
	public function getYrComp() { 
		return $this->yr_comp; 
	}
	public function setYrComp($yr_comp) { 
		$this->yr_comp = $yr_comp; 
	}
	public function getCompStart() { 
		return $this->comp_start; 
	}
	public function setCompStart($comp_start) { 
		$this->comp_start = $comp_start; 
	}
	public function getCompEnd() { 
		return $this->comp_end; 
	}
	public function setCompEnd($comp_end) { 
		$this->comp_end = $comp_end; 
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS EDUCATION RECORD [\n" . 
			   "\tuserID: \"" . $this->getUserId() . "\", \n" . 
			   "\tusername: \"" . $this->getUsername() . "\", \n" . 	
			   "\ttermid: \"" . $this->getTermId() . "\", \n" . 			   
			   "\tid: \"" . $this->getId() . "\", \n" . 
			   "\tdeg: \"" . $this->getDeg() . "\, \n" . 
			   "\tschool: \"" . $this->getSchool() . "\, \n" . 
			   "\tschool_loc: \"" . $this->getSchoolLocation() . "\, \n" . 
			   "\tmajor: \"" . $this->getMajor() . "\, \n" .
			   "\tsupparea: \"" . $this->getSuppArea() . "\, \n" . 
			   "\tDissTitle: \"" . $this->getDissTitle() . "\, \n" . 
			   "\thighest: \"" . $this->getHighest() . "\, \n" .
			   "\tyr_comp: \"" . $this->getYrComp() . "\, \n" . 
			   "\tcomp_start: \"" . $this->getCompStart() . "\, \n" . 
			   "\tcomp_end: \"" . $this->getCompEnd() . "\, \n" .
			   "]";
	}
}