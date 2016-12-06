<?php
class Connection{
    private $user;
    private $password;
    private $host;
    private $db;
    public $sql;
    public $res;
    public $err;
    public $affRows;
    public $numRows;
    public $data = array(); // blank array
    public $conxn;
    public $test = "test";
    /* setters */
    public function setUser($ur = ''){
        $this->user = $ur;
    }
    public function setPassword($pd = '' ){
        $this->password = $pd;
    }
    public function setHost($ht = ''){
        $this->host = $ht;
    }
    public function setDB($db = ''){
        $this->db = $db;
    }
//$h = 'localhost', $u = 'itucnac_site', $p = 'HswldUQN*{Ji', $db = 'itucnac_site'
//$h = 'localhost',  $u = 'root', $p = '', $db = 'db_bedc'
   /*
    public function __construct($h = 'localhost',  $u = 'root', $p = 'pentagon', $db = 'fifty'){
    
    $this->conxn=mysqli_connect($h, $u, $p, $db)
                or trigger_error($this->err = mysqli_error($this->conxn));
    
//echo "<br /> The database is ready to serve! ";   
    }*/
    public function __construct(){
        // Create connection
        $this->conxn = new mysqli('localhost','root','pentagon','fifty');
        // Check connection
        if ($this->conxn->connect_error) {
            die("Connection failed: " . $this->conxn->connect_error);
        } 
    }
    public function getConnection(){
        return $this->conxn;
    }
    public function getPost($tbl_name,$type){
        $sql = 'SELECT post_cont FROM '.$tbl_name.'WHERE post_type='.$type;
        $result = $conxn->query($sql);
        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
        }
        return $row;
    }
     public function getTest()
    {
        return $test;
    }
    public function close(){
    mysqli_close($this->conxn);
    //echo "<br /> The connection is closed";   
    }
}//class ends
?>