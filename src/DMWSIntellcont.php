<?php

namespace DMWSPHP;

use DMWSPHP\DMWSSchemaResource;

class DMWSIntellcont implements DMWSResource {
	private $id;
	private $contype; /* CONTYPE & CONTYPEOTHER */
	private $classification;
	private $intellcont_auth;
	private $status;
	private $title;
	private $publisher;
	private $pubctyst;
	private $pubcntry;
	private $volume;
	private $issue;
	private $pagenum;
	private $isbnissn;
	private $audience;
	private $acceptance_rate_cabell;
	private $refereed;
	private $publicavail;
	private $abstract;
	private $dtm_expsub;
	private $dtd_expsub;
	private $dty_expsub;
	private $expsub_start;
	private $expsub_end;
	private $dtm_sub;	
	private $dtd_sub;
	private $dty_sub;
	private $sub_start;	
	private $sub_end;
	private $dtm_acc;
	private $dty_acc;
	private $acc_start;	
	private $acc_end;
	private $dtm_pub;
	private $dtd_pub;
	private $dty_pub;
	private $pub_start;
	private $pub_end;
	private $user_reference_creator;
	
	public function __construct($id = "",
								$contype = "",
								$classification = "",
								&$intellcont_auth = null,
								$status = "",
								$title = "",
								$publisher = "",
								$pubctyst = "",
								$pubcntry = "",
								$volume = "",
								$issue = "",
								$pagenum = "",
								$isbnissn = "",
								$audience = "",
								$acceptance_rate_cabell = "",
								$refereed = "",
								$publicavail = "",
								$abstract = "",
								$dtm_expsub = "",
								$dtd_expsub = "",
								$dty_expsub = "",
								$expsub_start = "",
								$expsub_end = "",
								$dtm_sub = "",
								$dtd_sub = "",
								$dty_sub = "",
								$sub_start = "",
								$sub_end = "",
								$dtm_acc = "",
								$dty_acc = "",
								$acc_start = "",
								$acc_end = "",
								$dtm_pub = "",
								$dtd_pub = "",
								$dty_pub = "",
								$pub_start = "",
								$pub_end = "",
								$user_reference_creator = "") {
		$this->id = $id;
		$this->contype = $contype;
		$this->classification = $classification;
		if ($intellcont_auth) {
			$this->intellcont_auth = $intellcont_auth;
		} else {
			$this->intellcont_auth = new DMWSListResource();
		}
		$this->status = $status;
		$this->title = $title;
		$this->publisher = $publisher;
		$this->pubctyst = $pubctyst;
		$this->pubcntry = $pubcntry;
		$this->volume = $volume;
		$this->issue = $issue;
		$this->pagenum = $pagenum;
		$this->isbnissn = $isbnissn;
		$this->audience = $audience;
		$this->acceptance_rate_cabell = $acceptance_rate_cabell;
		$this->refereed = $refereed;
		$this->publicavail = $publicavail;
		$this->abstract = $abstract;
		$this->dtm_expsub = $dtm_expsub;
		$this->dtd_expsub = $dtd_expsub;
		$this->dty_expsub = $dty_expsub;
		$this->expsub_start = $expsub_start;
		$this->expsub_end = $expsub_end;
		$this->dtm_sub = $dtm_sub;
		$this->dtd_sub = $dtd_sub;
		$this->dty_sub = $dty_sub;
		$this->sub_start = $sub_start;
		$this->sub_end = $sub_end;
		$this->dtm_acc = $dtm_acc;
		$this->dty_acc = $dty_acc;
		$this->acc_start = $acc_start;
		$this->acc_end = $acc_end;
		$this->dtm_pub = $dtm_pub;
		$this->dtd_pub = $dtd_pub;
		$this->dty_pub = $dty_pub;
		$this->pub_start = $pub_start;
		$this->pub_end = $pub_end;
		$this->user_reference_creator = $user_reference_creator;							
	}
	
	public function getId() {
		return $this->id;
	}
	public function setID($id) {
		$this->id = $id;
	}
	public function getConType() {
		return $this->contype;
	}
	public function setConType($contype) {
		$this->contype = $contype;
	}
	public function getClassification() {
		return $this->classification;
	}
	public function setClassification($classification) {
		$this->classification = $classification;
	}
	public function getAuthors() {
		return $this->intellcont_auth;
	}
	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->status = $status;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setTitle($title) {
		$this->title = $title;
	}
	public function getPublisher() {
		return $this->publisher;
	}
	public function setPublisher($publisher) {
		$this->publisher = $publisher;
	}
	public function getPubctyst() {
		return $this->pubctyst;
	}
	public function setPubctyst($pubctyst) {
		$this->pubctyst = $pubctyst;
	}
	public function getPubcntry() {
		return $this->pubcntry;
	}
	public function setPubcntry($pubcntry) {
		$this->pubcntry = $pubcntry;
	}
	public function getVolume() {
		return $this->volume;
	}
	public function setVolume($volume) {
		$this->volume = $volume;
	}
	public function getIssue() {
		return $this->issue;
	}
	public function setIssue($issue) {
		$this->issue = $issue;
	}
	public function getPageNum() {
		return $this->pagenum;
	}
	public function setPageNum($pagenum) {
		$this->pagenum = $pagenum;
	}
	public function getISBN() {
		return $this->isbnissn;
	}
	public function setISBN($isbnissn) {
		$this->isbnissn = $isbnissn;
	}	
	public function getAudience() {
		return $this->audience;
	}
	public function setAudience($audience) {
		$this->audience = $audience;
	}	
	public function getAcceptanceRate() {
		return $this->acceptance_rate_cabell;
	}
	public function setAcceptanceRate($acceptance_rate_cabell) {
		$this->acceptance_rate_cabell = $acceptance_rate_cabell;
	}	
	public function getRefereed() {
		return $this->refereed;
	}
	public function setRefereed($refereed) {
		$this->refereed = $refereed;
	}	
	public function getPublicAvail() {
		return $this->publicavail;
	}
	public function setPublicAvail($publicavail) {
		$this->publicavail = $publicavail;
	}	
	public function getAbstract() {
		return $this->abstract;
	}
	public function setAbstract($abstract) {
		$this->abstract = $abstract;
	}	
	public function getDTMExpSub() {
		return $this->dtm_expsub;
	}
	public function setDTMExpSub($dtm_expsub) {
		$this->dtm_expsub = $dtm_expsub;
	}	
	public function getDTDExpSub() {
		return $this->dtd_expsub;
	}
	public function setDTDExpSub($dtd_expsub) {
		$this->dtd_expsub = $dtd_expsub;
	}	
	public function getDTYExpSub() {
		return $this->dty_expsub;
	}
	public function setDTYExpSub($dty_expsub) {
		$this->dty_expsub = $dty_expsub;
	}	
	public function getExpSubStart() {
		return $this->expsub_start;
	}
	public function setExpSubStart($expsub_start) {
		$this->expsub_start = $expsub_start;
	}	
	public function getExpSubEnd() {
		return $this->expsub_end;
	}
	public function setExpSubEnd($expsub_end) {
		$this->expsub_end = $expsub_end;
	}
	public function getDTMSub() {
		return $this->dtm_sub;
	}
	public function setDTMSub($dtm_sub) {
		$this->dtm_sub = $dtm_sub;
	}
	public function getDTDSub() {
		return $this->dtd_sub;
	}
	public function setDTDSub($dtd_sub) {
		$this->dtd_sub = $dtd_sub;
	}
	public function getDTYSub() {
		return $this->dty_sub;
	}
	public function setDTYSub($dty_sub) {
		$this->dty_sub = $dty_sub;
	}
	public function getSubStart() {
		return $this->sub_start;
	}
	public function setSubStart($sub_start) {
		$this->sub_start = $sub_start;
	}	
	public function getSubEnd() {
		return $this->sub_end;
	}
	public function setSubEnd($sub_end) {
		$this->sub_end = $sub_end;
	}	
	public function getDTMACC() {
		return $this->dtm_acc;
	}
	public function setDTMACC($dtm_acc) {
		$this->dtm_acc = $dtm_acc;
	}	
	public function getDTYACC() {
		return $this->dty_acc;
	}
	public function setDTYACC($dty_acc) {
		$this->dty_acc = $dty_acc;
	}	
	public function getACCStart() {
		return $this->acc_start;
	}
	public function setACCStart($acc_start) {
		$this->acc_start = $acc_start;
	}	
	public function getACCEnd() {
		return $this->acc_end;
	}
	public function setACCEnd($acc_end) {
		$this->acc_end = $acc_end;
	}	
	public function getDTMPub() {
		return $this->dtm_pub;
	}
	public function setDTMPub($dtm_pub) {
		$this->dtm_pub = $dtm_pub;
	}	
	public function getDTDPub() {
		return $this->dtd_pub;
	}
	public function setDTDPub($dtd_pub) {
		$this->dtd_pub = $dtd_pub;
	}	
	public function getDTYPub() {
		return $this->dty_pub;
	}
	public function setDTYPub($dty_pub) {
		$this->dty_pub = $dty_pub;
	}	
	public function getPubStart() {
		return $this->pub_start;
	}
	public function setPubStart($pub_start) {
		$this->pub_start = $pub_start;
	}	
	public function getPubEnd() {
		return $this->pub_end;
	}
	public function setPubEnd($pub_end) {
		$this->pub_end = $pub_end;
	}	
	public function getUserReferenceCreator() {
		return $this->user_reference_creator;
	}
	public function setUserReferenceCreator($user_reference_creator) {
		$this->user_reference_creator = $user_reference_creator;
	}
	
	/**
	  * toString function
	  *
	  * @return string
	  */
	public function __toString() {
		return "DMWS INTELLCONT RECORD [\n" . 
			   "\tID: \"" . $this->getId() . "\", \n" . 
			   "\tcontype: \"" . $this->getContype() . "\", \n" . 	
			   "\tclassification: \"" . $this->getClassification() . "\", \n" . 			   
			   "\tstatus: \"" . $this->getStatus() . "\", \n" . 
			   "\ttitle: \"" . $this->getTitle() . "\", \n" . 	
			   "\tpublisher: \"" . $this->getPublisher() . "\", \n" . 
			   "\tpubctyst: \"" . $this->getPubctyst() . "\", \n" . 
			   "\tpubcntry: \"" . $this->getPubcntry() . "\", \n" . 	
			   "\tvolume: \"" . $this->getVolume() . "\", \n" . 			   
			   "\tissue: \"" . $this->getIssue() . "\", \n" . 
			   "\tpagenum: \"" . $this->getPageNum() . "\", \n" . 	
			   "\tisbnissn: \"" . $this->getISBN() . "\", \n" . 
			   "\taudience: \"" . $this->getAudience() . "\", \n" . 
			   "\tacceptance_rate_cabell: \"" . $this->getAcceptanceRate() . "\", \n" . 	
			   "\trefereed: \"" . $this->getRefereed() . "\", \n" . 
			   "\tpublicavail: \"" . $this->getPublicAvail() . "\", \n" . 
			   "\tabstract: \"" . $this->getAbstract() . "\", \n" . 	
			   "\tdtm_expsub: \"" . $this->getDTMExpSub() . "\", \n" . 			   
			   "\tdtd_expsub: \"" . $this->getDTDExpSub() . "\", \n" . 
			   "\tdty_expsub: \"" . $this->getDTYExpSub() . "\", \n" . 	
			   "\texpsub_start: \"" . $this->getExpSubStart() . "\", \n" . 
			   "\texpsub_end: \"" . $this->getExpSubEnd() . "\", \n" . 	
			   "\tdtm_sub: \"" . $this->getDTMSub() . "\", \n" . 
			   "\tdtd_sub: \"" . $this->getDTDSub() . "\", \n" . 
			   "\tdty_sub: \"" . $this->getDTYSub() . "\", \n" . 	
			   "\tsub_start: \"" . $this->getSubStart() . "\", \n" . 			   
			   "\tsub_end: \"" . $this->getSubEnd() . "\", \n" . 
			   "\tdtm_acc: \"" . $this->getDTMACC() . "\", \n" . 	
			   "\tdty_acc: \"" . $this->getDTYACC() . "\", \n" . 
			   "\tacc_start: \"" . $this->getACCStart() . "\", \n" . 			   
			   "\tacc_end: \"" . $this->getACCEnd() . "\", \n" . 
			   "\tdtm_pub: \"" . $this->getDTMPub() . "\", \n" . 	
			   "\tdtd_pub: \"" . $this->getDTDPub() . "\", \n" . 
			   "\tdty_pub: \"" . $this->getDTYPub() . "\", \n" . 			   
			   "\tpub_start: \"" . $this->getPubStart() . "\", \n" . 
			   "\tpub_end: \"" . $this->getPubEnd() . "\", \n" . 	
			   "\tuser_reference_creator: \"" . $this->getUserReferenceCreator() . "\", \n" . 
			   "]";
	}
}
