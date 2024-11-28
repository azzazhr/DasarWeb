//<?php  
//include('Model.php'); 
 
//class UserModel extends Model{ 
  //  protected $db; 
    //protected $table = 'm_user'; 
    //protected $driver; 
 
    //public function __construct(){ 
      //  include('../lib/Connection.php'); 
 
        //$this->db = $db; 
        //$this->driver = $use_driver; 
    //} 
 
    //public function insertData($data){ 
      //  if($this->driver == 'mysql'){ 
            // prepare statement untuk query insert 
        //    $query = $this->db->prepare("insert into {$this->table} (username, nama, level, 
//password) values(?,?,?,?)"); 
 
            // binding parameter ke query, "s" berarti string, "ss" berarti dua string 
  //          $query->bind_param('ssss', $data['username'], $data['nama'], $data['level'], 
//password_hash($data['password'], PASSWORD_DEFAULT)); 
             
            // eksekusi query untuk menyimpan ke database 
  //          $query->execute(); 
    //    } else { 
            // eksekusi query untuk menyimpan ke database 
      //      sqlsrv_query($this->db, "insert into {$this->table} (username, nama, level, 
//password) values(?,?,?,?)", array($data['username'], $data['nama'], $data['level'], 
//password_hash($data['password'], PASSWORD_DEFAULT))); 
  //      } 
   // } 
//}