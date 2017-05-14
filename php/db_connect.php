<?php
class DB_actions {
	
	private $dbh; // uchwyt bazy
	private $rec; // pobranbe rekordy
	
	private $host;
	private $db_name;
	private $user;
	private $pass;
	private $table;
	
	public function __construct ($array){
		
			$this -> host = $array[0];
			$this -> db_name = $array[1];
			$this -> user = $array[2];
			$this -> pass = $array[3];
			$this -> table = $array[4];
		
		try {
   				$this -> dbh = new PDO('mysql:host='.$this -> host.';dbname='.$this -> db_name, $this -> user, $this -> pass);
  			 	
			}   catch (PDOException $e) {
				$this -> dbh = null;
   				print "Error!: " . $e->getMessage() . "<br/>";
   			    die();
		   }
	 }
	 
	 
	
	
	public function db_select ($id){
		
		if ($id){
			return $this -> rec = $this -> dbh->query('SELECT * FROM '.$this -> table.' WHERE id='.$id.''); 
		}
		else{
			return $this -> rec = $this -> dbh->query('SELECT * FROM '.$this -> table.' ORDER BY id DESC'); 	
			}
	}
	
	
	
	public function db_select_max_id (){
	
		 return $this -> rec = $this -> dbh->query('SELECT * FROM '.$this -> table.' WHERE ID IN (SELECT MAX(ID) FROM '.$this -> table.')');
	}
	
	
	
	
	public function db_add($array){
		
		$in = $this -> dbh -> prepare('INSERT INTO '.$this -> table.' (gps, nazwa, rocznik, cena, rejestracja, opis, data) VALUES (:gps, :nazwa, :rocznik, :cena, :rejestracja, :opis, :data: telefon)');  
		$in -> execute(array(':gps' => $array[1], ':nazwa' => $array[2], ':rocznik' => $array[3], ':cena' => $array[4], ':rejestracja' => $array[5], ':opis' => $array[6], ':data' => date('Y-m-d'), ':telefon' => $array[7])); 
	}
	
	public function __destruct(){
		$this -> dbh = null;
	}
}
?>