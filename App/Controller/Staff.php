<?php
  namespace App\Controller;
  use App\Support\Database;

  class Staff extends Database{
    /**
   * insert staff data
   */

   public function staffInsert($name , $email , $cell , $uname , $date , $gender , $pass, $photo){
      $status = $this -> insert("INSERT INTO staffs (name , email, cell , uname , date , gender, pass , photo) VALUES ('$name', '$email', '$cell', '$uname' ,'$date', '$gender' , '$pass', '$photo')");

      if ($status) {
        return "Data stable";
      }else{
        return false;
      }
        
  }
 /**
  * all staff data
  */

  public function staffAll(){
    return $this -> all('staffs');
  }
 /**
  * update staff data
  */

  public function staffUpadate($name , $email , $cell , $uname, $date , $gender , $pass, $newphoto, $sedit_id){

    $this -> update("UPDATE staffs SET name='$name', email='$email', cell='$cell', uname='$uname' ,date='$date', gender='$gender',pass='$pass', photo = '$newphoto' WHERE id = '$sedit_id'");

    header('location:stable.php');


  }

  //  update data show
    public function  staffUpadatesingle($sedit_id){
    $return = $this -> SingleData('staffs' , $sedit_id);
    return $return;
 }


 /**
  * delete staff data
  */

  public function staffDelete($deleteid){
    return $this -> delete('staffs', $deleteid);
  }
 /**
  * single staff data
  */

  public function staffSingle($profile_id){
    return $this -> SingleData('staffs' , $profile_id);

  }
  }












