<?php 

namespace App\Support;

use mysqli;

/**
     * Class Databse
     * @package Ura\Dhura\Controller
  */


  abstract class Database{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'oop';
    private $connection;


    /**
     * database connection
     */

    private function way(){
      return $this -> connection = new mysqli($this -> host , $this -> user , $this -> pass , $this -> db);
    }

    /**
     * insert function
     */

     protected function insert($sql){

      $status =  $this -> way() -> query($sql);

      if ($status) {
       return true;
      }else{
        return false;
      }

      
     }
    /**
     * select function
     */

     protected function all($table , $order = 'DESC'){
      return $this -> way() -> query ("SELECT * FROM $table ORDER BY id $order");

     }
    /**
     * update function
     */

     protected function update($sql){
        $this -> way() -> query($sql);

     }
    /**
     * delete function
     */

     protected function delete($table , $id){
      $status =  $this -> way() -> query("DELETE FROM $table WHERE id = '$id'");

      if ($status) {
        return true;
       }else{
         return false;
       }
 

     }
    /**
     * single data  function
     */

     protected function SingleData($table , $id ){
      return $this -> way() -> query ("SELECT * FROM $table WHERE id='$id'");

     }
  }

 