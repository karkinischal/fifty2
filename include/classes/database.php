<?php
class Connection{

    private $username;
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
    public function __construct($h = 'localhost',  $u = 'root', $p = 'pentagon', $db = 'testdb'){
    
    $this->conxn=mysqli_connect($h, $u, $p, $db)
                or trigger_error($this->err = mysqli_error($this->conxn));
    }
    
    public function close(){
    mysqli_close($this->conxn);
    }//class ends
?>