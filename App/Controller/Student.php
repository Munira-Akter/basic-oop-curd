<?php

namespace  App\Controller;

use App\Support\Database;



  /**
     * Class Student
     * @package Ura\Dhura\Controller
  */

  Class Student extends Database{

    /**
     * data insert method
     */

    public function student_data_insert($name , $email , $cell , $uname, $date , $gender , $pass, $photo ) {

    $status =  $this -> insert ("INSERT INTO basic (name , email, cell , uname , date , gender, pass , photo) VALUES ('$name', '$email', '$cell', '$uname' ,'$date', '$gender' , '$pass', '$photo')");
    
   

    if ($status) {
      return "Data stable";
    }else{
      return false;
    }
      
    }

    /**
     * Selcet all student
     */

     public function SelectStudent(){
       $all_array = $this -> all('basic');
       return $all_array;
     }


     /**
      * DElete student data
      */

      public function DeleteStudent($deleteid){
        $status = $this -> delete('basic' , $deleteid);
        if ($status) {
          return "Delete Successfully";
         }else{
           return false;
         }
   
      }

      /**
       * simgle data viwe
       */

       public function ViweStudent($profile_id){
         $single_array = $this -> SingleData('basic' , $profile_id);
         return $single_array;
       }


      /**
       * update data 
       */

       public function student_data_update($name , $email , $cell , $uname,  $date , $gender , $pass, $newphoto, $edit_id){
          $this -> update("UPDATE basic SET name='$name', email='$email', cell='$cell', uname='$uname' ,date='$date', gender='$gender',pass='$pass', photo = '$newphoto' WHERE id = '$edit_id'");

          header('location:table.php');
       }
      //  update data show
       public function  UpdateStudent($edit_id){
          $return = $this -> SingleData('basic' , $edit_id);
          return $return;
       }

      }

?>