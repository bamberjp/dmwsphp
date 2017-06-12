<?php

namespace DMWSPHP;

use DMWSPHP\DMWSResource;

class DMWSPCI implements DMWSResource {
	private $userId;
	private $username;
	private $termid;
	
	private $id;
	private $prefix;
	private $fname;
	private $pfname;
	private $mname;
	private $lname;
	private $suffix;
	private $email;
	private $building;
	private $roomnum;
	private $home_address1;
	private $home_address2;
	private $home_city;
	private $home_state;
	private $home_zip;
	private $ophone;
	private $dphone;
	private $hphone;
	private $fax;
	private $website;
	private $gender;
	private $ethnicity;
	private $citizen;
	private $srank;
	private $dtm_hire;
	private $dtd_hire;
	private $dty_hire;
	private $hire_start;
	private $hire_end;
	private $bio;
	private $expertise;
	private $dtm_exam;
	private $dtd_exam;
	private $dty_exam;
	private $exam_start;
	private $exam_end;
	
	public function __construct($userId = "",
								$username = "",
								$termid = "",
								$id = "",
								$prefix = "",
								$fname = "",
								$pfname = "",
								$mname = "",
								$lname = "",
								$suffix = "",
								$email = "",
								$building = "",
								$roomnum = "",
								$home_address1 = "",
								$home_address2 = "",
								$home_city = "",
								$home_state = "",
								$home_zip = "",
								$ophone = "",
								$dphone = "",
								$hphone = "",
								$fax = "",
								$website = "",
								$gender = "",
								$ethnicity = "",
								$citizen = "",
								$srank = "",
								$dtm_hire = "",
								$dtd_hire = "",
								$dty_hire = "",
								$hire_start = "",
								$hire_end = "",
								$bio = "",
								$expertise = "",
								$dtm_exam = "",
								$dtd_exam = "",
								$dty_exam = "",
								$exam_start = "",
								$exam_end = "") {
		$this->userId = $userId;
		$this->username = $username;
		$this->termid = $termid;
	
		$this->id = $id;
		$this->prefix = $prefix;
		$this->fname = $fname;
		$this->pfname = $pfname;
		$this->mname = $mname;
		$this->lname = $lname;
		$this->suffix = $suffix;
		$this->email = $email;
		$this->building = $building;
		$this->roomnum = $roomnum;
		$this->home_address1 = $home_address1;
		$this->home_address2 = $home_address2;
		$this->home_city = $home_city;
		$this->home_state = $home_state;
		$this->home_zip = $home_zip;
		$this->ophone = $ophone;
		$this->dphone = $dphone;
		$this->hphone = $hphone;
		$this->fax = $fax;
		$this->website = $website;
		$this->gender = $gender;
		$this->ethnicity = $ethnicity;
		$this->citizen = $citizen;
		$this->srank = $srank;
		$this->dtm_hire = $dtm_hire;
		$this->dtd_hire = $dtd_hire;
		$this->dty_hire = $dty_hire;
		$this->hire_start = $hire_start;
		$this->hire_end = $hire_end;
		$this->bio = $bio;
		$this->expertise = $expertise;
		$this->dtm_exam = $dtm_exam;
		$this->dtd_exam = $dtd_exam;
		$this->dty_exam = $dty_exam;
		$this->exam_start = $exam_start;
		$this->exam_end = $exam_end;
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
	public function getPrefix() { 
		return $this->prefix; 
	}
	public function setPrefix($prefix) { 
		$this->prefix = $prefix; 
	}
	public function getFirstName() { 
		return $this->fname;	
	}
	public function setFirstName($fname) { 
		$this->fname = $fname; 
	}
	public function getPreferredFirstName() { 
		return $this->pfname;
	}
	public function setPreferredFirstName($pfname) { 
		$this->pfname = $pfname; 
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
	public function getSuffix() { 
		return $this->suffix; 
	}
	public function setSuffix($suffix) { 
		$this->suffix = $suffix; 
	}
	public function getEmail() { 
		return $this->email; 
	}
	public function setEmail($email) { 
		$this->email = $email; 
	}
	public function getBuilding() { 
		return $this->building; 
	}
	public function setBuilding($building) { 
		$this->building = $building; 
	}
	public function getRoomNumber() {
		return $this->roomnum;
	}
	public function setRoomNumber($roomnum) {
		$this->roomnum = $roomnum;
	}
	public function getHomeAddress1() {
		return $this->home_address1;
	}
	public function setHomeAddress1($home_address1) {
		$this->home_address1 = $home_address1;
	}
	public function getHomeAddress2() {
		return $this->home_address2;
	}
	public function setHomeAddress2($home_address2) {
		$this->home_address2 = $home_address2;
	}
	public function getHomeCity() {
		return $this->home_city;
	}
	public function setHomeCity($home_city) {
		$this->home_city = $home_city;
	}
	public function getHomeState() {
		return $this->home_state;
	}
	public function setHomeState($home_state) {
		$this->home_state = $home_state;
	}
	public function getHomeZip() {
		return $this->home_zip;
	}
	public function setHomeZip($home_zip) {
		$this->home_zip = $home_zip;
	}
	public function getOPhone() {
		return $this->ophone;
	}
	public function setOPhone($ophone) {
		$this->ophone = $ophone;
	}
	public function getDPhone() {
		return $this->dphone;
	}
	public function setDPhone($dphone) {
		$this->dphone = $dphone;
	}
	public function getHPhone() {
		return $this->hphone;
	}
	public function setHPhone($hphone) {
		$this->hphone = $hphone;
	}
	public function getFax() {
		return $this->fax;
	}
	public function setFax($fax) {
		$this->fax = $fax;
	}
	public function getWebsite() {
		return $this->website;
	}
	public function setWebsite($website) {
		$this->website = $website;
	}
	public function getGender() {
		return $this->gender;
	}
	public function setGender($gender) {
		$this->gender = $gender;
	}
	public function getEthnicity() {
		return $this->ethnicity;
	}
	public function setEthnicity($ethnicity) {
		$this->ethnicity = $ethnicity;
	}
	public function getCitizenship() {
		return $this->citizen;
	}
	public function setCitizenship($citizen) {
		$this->citizen = $citizen;
	}
	public function getSRank() {
		return $this->srank;
	}
	public function setSRank($srank) {
		$this->srank = $srank;
	}
	public function getDTMHire() {
		return $this->dtm_hire;
	}
	public function setDTMHire($dtm_hire) {
		$this->dtm_hire = $dtm_hire;
	}
	public function getDTDHire() {
		return $this->dtd_hire;
	}
	public function setDTDHire($dtd_hire) {
		$this->dtd_hire = $dtd_hire;
	}
	public function getDTYHire() {
		return $this->dty_hire;
	}
	public function setDTYHire($dty_hire) {
		$this->dty_hire = $dty_hire;
	}
	public function getHireStart() {
		return $this->hire_start;
	}
	public function setHireStart($hire_start) {
		$this->hire_start = $hire_start;
	}
	public function getHireEnd() {
		return $this->hire_end;
	}
	public function setHireEnd($hire_end) {
		$this->hire_end = $hire_end;
	}
	public function getBio() {
		return $this->bio;
	}
	public function setBio($bio) {
		$this->bio = $bio;
	}
	public function getExpertise() {
		return $this->expertise;
	}
	public function setExpertise($expertise) {
		$this->expertise = $expertise;
	}
	public function getDTMExam() {
		return $this->dtm_exam;
	}
	public function setDTMExam($dtm_exam) {
		$this->dtm_exam = $dtm_exam;
	}
	public function getDTDExam() {
		return $this->dtd_exam;
	}
	public function setDTDExam($dtd_exam) {
		$this->dtd_exam = $dtd_exam;
	}
	public function getDTYExam() {
		return $this->dty_exam;
	}
	public function setDTYExam($dty_exam) {
		$this->dty_exam = $dty_exam;
	}
	public function getExamStart() {
		return $this->exam_start;
	}
	public function setExamStart($exam_start) {
		$this->exam_start = $exam_start;
	}
	public function getExamEnd() {
		return $this->exam_end;
	}
	public function setExamEnd($exam_end) {
		$this->exam_end = $exam_end;
	}
		
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS PCI RECORD [\n" . 
			   "\tuserID: \"" . $this->getUserId() . "\", \n" . 
			   "\tusername: \"" . $this->getUsername() . "\", \n" . 	
			   "\ttermid: \"" . $this->getTermId() . "\", \n" . 			   
			   "\tid: \"" . $this->getId() . "\", \n" . 
			   "\tprefix: \"" . $this->getPrefix() . "\", \n" . 	
			   "\tfname: \"" . $this->getFirstName() . "\", \n" 
			   . 
			   "\tuserID: \"" . $this->getUserId() . "\", \n" . 
			   "\tusername: \"" . $this->getUsername() . "\", \n" . 	
			   "\ttermid: \"" . $this->getTermId() . "\", \n" . 			   
			   "\tid: \"" . $this->getId() . "\", \n" . 
			   "\tprefix: \"" . $this->getPrefix() . "\", \n" . 	
			   "\tfname: \"" . $this->getFirstName() . "\", \n" . 
			   "\tpfname: \"" . $this->getPreferredFirstName() . "\", \n" . 
			   "\tmname: \"" . $this->getMiddleName() . "\", \n" . 
			   "\tlanme: \"" . $this->getLastName() . "\", \n" . 	
			   "\tsuffix: \"" . $this->getSuffix() . "\", \n" . 			   
			   "\temail: \"" . $this->getEmail() . "\", \n" . 
			   "\tbuilding: \"" . $this->getBuilding() . "\", \n" . 	
			   "\troomnum: \"" . $this->getRoomNumber() . "\", \n" . 
			   "\thome_address1: \"" . $this->getHomeAddress1() . "\", \n" . 		   
			   "\thome_address2: \"" . $this->getHomeAddress2() . "\", \n" . 
			   "\thome_city: \"" . $this->getHomeCity() . "\", \n" . 	
			   "\thome_state: \"" . $this->getHomeState() . "\", \n" . 			   
			   "\thome_zip: \"" . $this->getHomeZip() . "\", \n" . 
			   "\tophone: \"" . $this->getOPhone() . "\", \n" . 	
			   "\tdphone: \"" . $this->getDPhone() . "\", \n" . 
			   "\thphone: \"" . $this->getHPhone() . "\", \n" . 		
			   "\tfax: \"" . $this->getFax() . "\", \n" . 
			   "\twebsite: \"" . $this->getWebsite() . "\", \n" . 	
			   "\tgender: \"" . $this->getGender() . "\", \n" . 			   
			   "\tethnicity: \"" . $this->getEthnicity() . "\", \n" . 
			   "\tcitizen: \"" . $this->getCitizenship() . "\", \n" . 	
			   "\tsrank: \"" . $this->getSRank() . "\", \n" . 
			   "\tdtm_hire: \"" . $this->getDTMHire() . "\", \n" . 	   
			   "\tdtd_hire: \"" . $this->getDTDHire() . "\", \n" . 
			   "\tdty_hire: \"" . $this->getDTYHire() . "\", \n" . 	
			   "\thire_start: \"" . $this->getHireStart() . "\", \n" . 			   
			   "\thire_end: \"" . $this->getHireEnd() . "\", \n" . 
			   "\tbio: \"" . $this->getBio() . "\", \n" . 	
			   "\texpertise: \"" . $this->getExpertise() . "\", \n" . 
			   "\tdtm_exam: \"" . $this->getDTMExam() . "\", \n" . 	
			   
			   "\tdtd_exam: \"" . $this->getDTDExam() . "\", \n" . 
			   "\tdty_exam: \"" . $this->getDTYExam() . "\", \n" . 	
			   "\texam_start: \"" . $this->getExamStart() . "\", \n" . 			   
			   "\texam_end: \"" . $this->getExamEnd() . "\", \n" .
			   "]";
	}
}
