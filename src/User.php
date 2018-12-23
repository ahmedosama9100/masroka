<?php
class User 
{
    private $First_Name;
    private $Second_Name;
    private $Email;
    private $Phone;
    private $Password;
    //Empty Constructor
    public function __construct(){}

    //No Need for it Right now
    /*public function __construct($First_Name,$Second_Name,$Email,$Phone,$Password){
        $this->First_Name = $First_Name;
        $this->Second_Name = $Second_Name;
        $this->Email = $Email;
        $this->Phone = $Phone;
        $this->Password = $Password;
    }*/
    public function set_Signin($Email , $Password){
        $this->Email = $Email;
        $this->Password = $Password;
    }
    public function set_Signup($First_Name,$Second_Name,$Email,$Phone,$Password){
        $this->First_Name = $First_Name;
        $this->Second_Name = $Second_Name;
        $this->Email = $Email;
        $this->Phone = $Phone;
        $this->Password = $Password;
    }
    public function get_FirstName(){
        return $this->First_Name;
    }
    public function get_LastName(){
        return $this->Second_Name;
    }
    public function get_Email(){
        return $this->Email;
    }
    public function get_Password(){
        return $this->Password;
    }
    public function get_Phone(){
        return $this->Phone;
    }
}
class ausentication 
{
public function checksignin()
{
$objs=new dbuser;
$obj=new dbuser;
$objs->set_Signin($_POST['emaill'] , $_POST['password']);
$obj->getuser($_POST['emaill']);
if($objs->get_Password()==$obj->get_Password()&&$objs->get_Password()!="")
{
return true;
}
else
{
return false;
}
}
public function checksignup()
{
$obj=new dbuser;
if($_POST['pass1']==$_POST['pass2'])
{
return true;
}
else
{
return false;
}
}

}
class UserServices extends ausentication
{
public function signin()
{
if($this->checksignin())
{
 session_start();
$_SESSION['email']=$_POST['emaill'];
header("location:firstpage.php");
}
else
{
echo "Wrong Password or Username !!";
}
}

public function signup()
 {
$obj=new dbuser;
if($this->checksignup())
{
$f=$_POST['fn'];
$obj->set_Signup($f,$_POST['ln'],$_POST['email'],$_POST['phone'],$_POST['pass1']);
$e= $obj->get_LastName();
$r=$obj->saveuser();
if($r==1)
{
echo "signup successully";
}
}
else
{
echo "confirm password dosn't match";
}
}   
}

class dbuser extends user
{
   
    public function saveuser()
      {

        $db=mysqli_connect('localhost','root','POTO','users');
       $f=$this->get_FirstName();
       $l=$this->get_LastName();
      $e=$this->get_Email();
        $p=$this->get_Password();
        $ph=$this->get_Phone();
        echo $f." ".$l." ";
        $query=mysqli_query($db,"INSERT INTO user_db (fristname,lastname,password,phone,email) VALUES ('$f','$l','$p','$ph','$e')");
        if(!$db)
         {
           return 0;
        }
        else
         {
          return 1;
         }
      }
     public function deleteuser($email)
      {
     $db=mysqli_connect('localhost','root','POTO','users');
     $query=mysqli_query($db,"DELETE FROM user_db WHERE email==$email ");
      if(!$db)
       {
        return 0;
       }
       else
       {
        return 1;
        }
      }
public function usernotifications($email,$message)
{  

  $db=mysqli_connect('localhost','root','POTO','users');
  $query=mysqli_query($db,"SELECT message FROM notification Where email='$email'");
  $result=mysqli_fetch_array($query);
  return $query;
}
public function getuser($email){
  $db=mysqli_connect('localhost','root','POTO','users');
  $query=mysqli_query($db,"SELECT * FROM user_db Where email='$email'");
  $result=mysqli_fetch_array($query);
  $this->set_Signup($result[0],$result[1],$result[4],$result[3],$result[2]);
  return $bb;
}
}
?>