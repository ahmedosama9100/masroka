<?php

class Category{
    public $Category_Name;

    public function Set_Category($Category_Name){
        $this->Category_Name = $Category_Name;
    }
    public function Get_Category(){
        return $this->Category_Name;
    }
}
class Category_Services extends Category {

public function __construct(Category $Obj){
    $this->Object = $Obj;
}

}

class Category_Authentication extends Category {
    public function Check_Category(){

    }
    public function Check_Category_Update(){

    }
}
class Category_Database extends Category {
    public function __construct(Category $Cat1)
    {
        $this->Category = $Cat1;
    }
    public function setCategory($Category)
    {
        $this->Category = $Category;
    }

}
class Questions_Authentication extends Category {
    public function Check_Question(){

    }
    public function Check_Question_update(){

    }
}


?>