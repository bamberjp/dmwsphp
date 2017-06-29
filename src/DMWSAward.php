<?php

namespace DMWSPHP;

use DMWSPHP\DMWSResource;

class DMWSAward implements DMWSResource {
	private $userId;
	private $username;
	private $termId;
	private $id;
	private $name;
	private $org;
	private $scope;
	private $dtm_date;
	private $dtd_date;
	private $dty_date;
	private $date_start;
	private $date_end;
	private $desc;
	
	public function __construct($userId,
								$username,
								$termId,
								$id,
								$name,
								$org,
								$scope,
								$dtm_date,
								$dtd_date,
								$dty_date,
								$date_start,
								$date_end,
								$desc) {
		$this->userId = $userId;
		$this->username = $username;
		$this->termid = $termid;
		$this->id = $id;
		$this->name = $name;
		$this->org = $org;
		$this->scope = $scope;
		$this->dtm_date = $dtm_date;
		$this->dtd_date = $dtd_date;
		$this->dty_date = $dty_date;
		$this->date_start = $date_start;
		$this->date_end = $date_end;
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
	public function getName() { 
		return $this->name; 
	}
	public function setName($name) { 
		$this->name = $name; 
	}
	public function getOrg() { 
		return $this->org; 
	}
	public function setOrg($org) { 
		$this->org = $org; 
	}	
	public function getScope() { 
		return $this->scope; 
	}
	public function setScope($scope) { 
		$this->scope = $scope; 
	}	
	public function getDTMDate() { 
		return $this->dtm_date; 
	}
	public function setDTMDate($dtm_date) { 
		$this->dtm_date = $dtm_date; 
	}	
	public function getDTDDate() { 
		return $this->dtd_date; 
	}
	public function setDTDDate($dtd_date) { 
		$this->dtd_date = $dtd_date; 
	}
	public function getDTYDate() { 
		return $this->dty_date; 
	}
	public function setDTYDate($dty_date) { 
		$this->dty_date = $dty_date; 
	}
	public function getDateStart() { 
		return $this->date_start; 
	}
	public function setDateStart($date_start) { 
		$this->date_start = $date_start; 
	}
	public function getDateEnd() { 
		return $this->date_end; 
	}
	public function setDateEnd($date_end) { 
		$this->date_end = $date_end; 
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
		return "DMWS AWARD RECORD [\n" . 
			   "\tuserID: \"" . $this->getUserId() . "\", \n" . 
			   "\tusername: \"" . $this->getUsername() . "\", \n" . 	
			   "\ttermid: \"" . $this->getTermId() . "\", \n" . 			   
			   "\tid: \"" . $this->getId() . "\", \n" . 
			   "\tname: \"" . $this->getName() . "\", \n" . 	
			   "\tscope: \"" . $this->getScope() . "\", \n" . 
			   "\tdtm_date: \"" . $this->getDTMDate() . "\", \n" . 
			   "\tdtd_date: \"" . $this->getDTDDate() . "\", \n" . 
			   "\tdty_date: \"" . $this->getDTYDate() . "\", \n" . 
			   "\tdate_start: \"" . $this->getDateStart() . "\", \n" . 
			   "\tdate_end: \"" . $this->getDateEnd() . "\", \n" . 
			   "\tdesc: \"" . $this->getDesc() . "\", \n" . 
			   "]";	   
	}
}