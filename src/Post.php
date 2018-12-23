<html>
<body>
<?php
class Post{
    public $Post_ID;
    public $Photo;
    public $Category;
    public $Brand;
    public $Questions;
    public function Set_Category($Category){

        $this->Category=$Category;
    }
    public function getcategory()
    {
        return $this->Category;
    }
}
class Post_Services extends PostDatabase {

    public function View(){

        $this->View_Answer($this->getcategory());
    }
    public function choosePost($id,$quesQuery)
    {
        if(isset( $_POST[$id] )) {
            while ($result2 = mysqli_fetch_array($quesQuery)) {
                echo $result2[0];
                ?>
                <form  action="" method="post">
                    <input type="text" name=<?php echo $result2[0];?>  >
                </form>
            <?php    }
        }

    }
}
class PostDatabase extends Post{

    public function View_Answer($Category){
        $Object1=new Post_Services();
        $Object2=new recommendedQuestions_Database();

        $db=mysqli_connect('localhost','root','POTO','users');
        $query=mysqli_query($db,"SELECT * FROM item WHERE category='$Category'");

        while($result=mysqli_fetch_array($query))
        {
            echo $result[1]." ".$result[2]." ".$result[3];
            ?>

            <br>
            <img src= <?php echo $result[0]; ?> >
            <br>
            <form method="post" action="answerpage.php">

                <input type="submit" name=<?php echo $result[3];?> value="mine">
            </form>

            <br>
            <br>
<?php
            session_start();
            $_SESSION['category']=$result[1];
            echo $result[3];
            $Object2->set_category($result[1]);

            $Object1->choosePost($result[3],$Object2->View_Question($Object2->get_CategoryName()));
        }
        return $Object1;
    }

}



class recommendedQuestions{
   public $Question;
   public $ID;
   public $Category_Name;

   public function set_Question(){}
   public function set_category($category){$this->Category_Name=$category;}
   public function get_Question(){
       return $this->Question;
   }
   public function get_CategoryName()
   {
       return $this->Category_Name;
       }
}
class recommendedQuestions_Database extends recommendedQuestions{
    public function View_Question($Category){
        $db=mysqli_connect('localhost','root','POTO','users');
        $query2=mysqli_query($db,"SELECT questions FROM category WHERE category='$Category'");
        return $query2;
    }
}
?>
</body>
</html>
