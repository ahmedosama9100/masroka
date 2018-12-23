<?php
class Item {
    protected $ID;
    protected $Photo;
    protected $Brand;
    protected $Owner_Email;
    protected $Questions;
    protected $username;
    protected $category;
    public function __construct(){}

    public function set_Item($Owner_Email , $Photo , $Brand , $Questions,$ID,$category)
{
    $this->Owner_Email = $Owner_Email;
    $this->Photo = $Photo;
    $this->Brand = $Brand;
    $this->Questions = $Questions;
    $this->ID=$ID;
    $this->category=$category;
}
    public function get_Photo(){
        return $this->Photo;
    }
     public function get_category(){
        return $this->category;
    }
    public function get_Brand(){
        return $this->Brand;
    }
    public function get_Questions(){
        return $this->Questions;
    }
    public function get_ID(){
        return $this->ID;
    }
    public function username(){
        return $this->username;
    }
}
class authentication extends itemdb
{
public function checkitem()
{
if(!empty($_POST['pic'])&& !empty($_POST['Brand']) && !empty($_POST['category']))
{
return true;
}
else
{
return false;
}
}
public function checkupdate(){}

}
class itemservice extends authentication
{
public function createitem()
{
$db=mysqli_connect('localhost','root','POTO','users');
if($this->checkitem()){
session_start();
$_SESSION['email'];
$query2=mysqli_query($db,"SELECT ID FROM item");
$I=mysqli_num_rows($query2);
$b=$_POST['category'];
$q=mysqli_query($db,"SELECT questions FROM category WHERE category='$b'");
$quarr=mysqli_fetch_array($q);
$this->set_Item($_SESSION['email'], $_POST['pic'],$_POST['Brand'], $quarr,$I,$_POST['category']);
$this->saveitem();
}
else
{
echo "there is empty filled";
}
}
public function deleteitem($id){
this->deleteitemd($id);
}
}

class itemdb extends item
{
public function saveitem()
{
   $db=mysqli_connect('localhost','root','POTO','users');
        $f=$this->get_Photo();
        $l=$this->get_category();
        $e=$this->get_Brand();
        $id=$this->get_ID();
        $query=mysqli_query($db,"INSERT INTO item (photo,category,brand,ID) VALUES ('$f','$l','$e','$id')");
        if(!$db)
         {
           return 0;
        }
        else
         {
          return 1;
         }
}
public function deleteitemd($id)
{
$db=mysqli_connect('localhost','root','POTO','users');
$query=mysqli_query($db,"DELETE FROM 'item' WHERE ID='$id'");
}
public function getitem()
{
}

}


?>