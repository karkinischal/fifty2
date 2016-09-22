<?php
class Database
{
    public $conn;
    protected $db_name = 'fifty';
    protected $db_user = '50fcUser';
    protected $db_password = '50fcpassword';
    protected $db_host = 'localhost';
    public function __construct()
    {
        $this->conn = mysql_connect($db_host,$db_user,$db_password);
        if(!$this->conn)
        {
            echo "HOST COULD NOT CONNECT";
        }
        mysql_select_db($db_name, $this->conn) or die(mysql_error());
    }
    
    public function selectAll($tbl_name)
    {
        $data = array();
        $sql = mysql_query("select * from $tbl_name");
        
        if(mysql_num_rows($sql) > 0)
        {
            while($row = mysql_fetch_assoc($sql))
            {
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function totalRow($table){
        $sql = mysql_query("select count('total') from $table") or die(mysql_error());
        $total = mysql_fetch_array($sql);
        return $total[0];
    }
    
    public function selectOne($tbl_name,$field,$id){
        $data = array();
        $sql = mysql_query("select * from $tbl_name where $field = $id");
        if(mysql_num_rows($sql) > 0)
        {
            while($row = mysql_fetch_assoc($sql))
            {
                $data[] = $row;
                
            }
        }
        return $data[0];
    }
    public function insertRow($table,$formdata){
        $col = array();
        $val = array();
        foreach($formdata as $key => $v){
            $col[] = $key;
            $val[] = "'".$v."'";    
            
        }
        $fields = implode(',',$col);
        $values = implode(',',$val);
        $sql = "INSERT INTO $table($fields) VALUES ($values)";
        $result = mysql_query($sql) or die(mysql_error());
        if($result){
            return mysql_insert_id();   
        }else{
            return false;
        }
    }
    public function updateRow($table, $formdata, $field , $id){
        foreach($formdata as $key => $value){
            $sql = "UPDATE $table SET $key = "."'$value'"." WHERE $field = $id";
            mysql_query($sql) or die(mysql_error());
        }
        return true;
    }
    public function deleteRow($table, $field, $id){
    
        $sql = "DELETE FROM $table WHERE $field = $id";
        mysql_query($sql) or die(mysql_error());
    }
}
?>