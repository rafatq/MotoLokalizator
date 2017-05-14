<?php


class ThemeStaff {
	
	private $getid;
	
	public function __construct ($getid){
		
		$this -> getid = $getid;
		
		
		
	}
	
	
	public function AddSiteName (){
		if ($_GET[$this -> getid] == 'offers'){
				return 'oferty';
			}
		else if ($_GET[$this -> getid] == 'singleoffer'){
				return 'strona pojazdu';
			}
		else return 'baza pojazdów';
	}
	
	public function IncludeSite (){
		if ($_GET[$this -> getid] == 'offers'){
				require_once ('theme/offers.php');
			}
		else if ($_GET[$this -> getid] == 'singleoffer'){
				require_once ('theme/singleoffer.php');
			}
		else require_once ('theme/addoffer.php');	
	}
	
}

?>