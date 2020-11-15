<?php

namespace APP\Controller;

use App\Support\Database;

Class Teacher extends Database{

  /**
   * insert teachers data
   */

   public function teacher_data_insert($name , $email , $cell , $uname , $date , $gender , $pass, $photo){
      $status = $this -> insert("INSERT INTO teachers (name , email, cell , uname , date , gender, pass , photo) VALUES ('$name', '$email', '$cell', '$uname' ,'$date', '$gender' , '$pass', '$photo')");

      if ($status) {
        return "Data stable";
      }else{
        return false;
      }

   }


  /**
   * all teachers data
   */

   public function SelectTeachers(){
      return $this -> all('teachers');
   }
  /**
   * update teachers data
   */

   public function teacherUpadate($name , $email , $cell , $uname,  $date , $gender , $pass, $newphoto,$tedit_id){
      $this -> update("UPDATE teachers SET name='$name', email='$email', cell='$cell', uname='$uname' ,date='$date', gender='$gender',pass='$pass', photo = '$newphoto' WHERE id = '$tedit_id'");
   }

   public function ViweTeacheredit($tedit_id){
    $single_array = $this -> SingleData('teachers' , $tedit_id);
    return $single_array;
  }
  /**
   * delete teachers data
   */

   public function DeleteTeachers($deleteid){
    return  $this -> delete('teachers' , $deleteid);
   }
  /**
   * single teachers data
   */

  public function ViweTeacher($profile_id){
    $single_array = $this -> SingleData('teachers' , $profile_id);
    return $single_array;
  }

}