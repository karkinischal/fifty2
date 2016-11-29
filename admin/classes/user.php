<?php
class User extends Connection
{
    private $admin_id;
    private $admin_username;
    private $firstname;
    private $lastname;
    private $password;
    private $login_date;

    public function setuid($ud=''){
        return $this->admin_id=$ud;
    }

    public function getAdmin_username(){
        return $this->admin_username;
    }
    public function get_firstname(){
        return $this->firstname;
    }
    public function set_firstname($fname=''){
        $this->firstname=$fname;
    }
    public function get_lastname(){
        return $this->lastname;
    }
    public function set_lastname($lname=''){
        $this->lastname=$lname;
    }
    public function getPassword(){
        return $this->password;
    }

    public function setAdmin_username($uname=''){
        $this->admin_username=$uname;
    }

    public function setPassword($upass=''){
        $this->password=$upass;
    }

    public function setlogin_date(){
        $this->login_date=date('y-m-d h:i:s');
    }
    
//validate the username
public function validateuser()
{
    $this->sql= "SELECT * FROM admin WHERE username='$this->admin_username' AND password='$this->password'";
    $this->res = mysqli_query($this->conxn,$this->sql) or die($this->error = mysqli_error($this->conxn));
    $this->numRows = mysqli_num_rows($this->res);
    if($this->numRows!=0)
    {   $this->arr=array();
        $this->data=mysqli_fetch_assoc($this->res);
        $id=$this->data['id_admin'];   
        $_SESSION['uid']=$this->data['id_admin'];
        $_SESSION['uname']=$this->data['username'];
        $this->sql="UPDATE admin SET login_date='$this->login_date' WHERE id_admin='$id' ";
        $this->res = mysqli_query($this->conxn,$this->sql) or die($this->error = mysqli_error($this->conxn));
        return TRUE;
    }
    else{
        return FALSE;
    }

}

//get the user information from database

public function user_info()
{
    if(isset($_SESSION['uid']))
    {
    $id=$_SESSION['uid'];
    $this->sql="SELECT * FROM admin WHERE id_admin='$id' "; 
    $this->res=mysqli_query($this->conxn,$this->sql) or die($this->error=mysqli_query($this->conxn));
    $this->numRows=mysqli_num_rows($this->res);
    $this->arr=array();
    if($this->numRows>0){
        while($this->data=mysqli_fetch_assoc($this->res)){
            array_push($this->arr,$this->data);
        }
    }
    return $this->arr;
    }
}

//inset the new user
public function adduser(){
    $this->sql= "INSERT INTO admin (id_admin,username,password) 
    VALUES ('','$this->username,$this->password')";
    $this->res = mysqli_query($this->conxn,$this->sql) or die($this->error = mysqli_error($this->conxn));
    $this->affRows=mysqli_affected_rows($this->conxn);
    if($this->affRows>0){
        return TRUE;
    }
    else{
        return false;
    }
}

//display content of whole table
public function getalluser(){    
    $this->sql= "SELECT * FROM admin";
    $this->res=mysqli_query($this->conxn,$this->sql) or die($this->error=mysqli_query($this->conxn));
    $this->numRows=mysqli_num_rows($this->res);
    $this->arr=array();
    if($this->numRows>0){
        while($this->data=mysqli_fetch_assoc($this->res)){
            array_push($this->arr,$this->data);
        }
    }
    return $this->arr;
}
/*
public function deleteuser()
{
    
    $this->sql = "SELECT admin_img FROM admin_data WHERE admin_id = '$this->admin_id' ";
        $this->res = mysqli_query($this->conxn, $this->sql) 
            or trigger_error($this->err = mysqli_error($this->conxn));
        $this->numRows = mysqli_num_rows($this->res);
        $this->data = mysqli_fetch_assoc($this->res);
        
        //filename
        $file_name = $this->data['admin_img'];
        
    
        $destination="/projects/Finished/Prabhat/admin/kode/Uploads/".$file_name;
                    
       
        //delete the file
        if(file_exists($_SERVER['DOCUMENT_ROOT'].$destination)){

        
                if(unlink($_SERVER['DOCUMENT_ROOT'].$destination)){
            //file removed from the server
            //now remove from the database
                    $this->sql = " DELETE FROM admin_data WHERE admin_id = '$this->admin_id' ";
                    $this->res = mysqli_query($this->conxn, $this->sql)
                    or trigger_error($this->err = mysqli_error($this->conxn));
                    $this->affRows = mysqli_affected_rows($this->conxn);
                    
                
                    if($this->affRows>0){
                        
                    return TRUE;
                    }
                    else{
                        return FALSE;
                    }
                    //unlink ends
                    }

                
                else{
                     return FALSE;
                }
        }//delete file ends

   

   

}//function ends



public function updateuser()
{
    $this->sql="UPDATE admin_data SET admin_name='$this->Admin_username', admin_email='$this->admin_email', password='$this->password',admin_img='$this->img_name' WHERE admin_id ='$this->admin_id'";
    $this->res = mysqli_query($this->conxn,$this->sql) or die($this->error = mysqli_error($this->conxn));
    $this->affRows=mysqli_affected_rows($this->conxn);
    if($this->affRows>0)
    {
    
        return true;
    
}
else
        return false;


  
}

*/
}//class ends



