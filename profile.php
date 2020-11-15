<?php
    require_once "vendor/autoload.php";

use App\Controller\Staff;
use App\Controller\Student;
use App\Controller\Teacher;

    $stu = new Student;
    $teach = new Teacher;
    $sta = new Staff;

    if(isset($_GET['profile_id'])){
      $profile_id = $_GET['profile_id'];

      $single_array = $stu -> ViweStudent($profile_id);
      $alldata = $single_array -> fetch_assoc();
      $single_array = $teach -> ViweTeacher($profile_id);
      $alldata = $single_array -> fetch_assoc();

      $single_array = $sta -> staffSingle($profile_id);
      $alldata = $single_array -> fetch_assoc();
    }

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Authentication Project</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<style>
    .wrap {
        width: 700px !important;
    }
    
    * {
        padding: 0px;
        margin: 0px;
        outline: 0px;
    }
    
    .card-header .cover img {
        width: 100%;
        height: 300px;
        padding: 0px !important;
        margin: 0px !important;
    }
    
    .card-header .profile img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: burlywood;
        padding: 5px;
        position: relative;
        right: -240px;
        bottom: 75px;
    }
    
    .head {
        position: relative;
        top: -40px;
    }
    
ul {
       text-align: center;
    }
    
    ul li {
        display: inline-block;
    }
    
    ul li a {
        color: rgb(5, 5, 5);
        text-transform: capitalize;
        padding: 5px 10px;
        display: inline-block;
        border: 3px solid #555;
        margin: 10px;
        background: #000;
        color: cornsilk;
        border-radius: 2px !important;
        box-shadow: 1px 1px 6px rgb(39, 39, 39);
    }
</style>
</style>

<body>



    <div class="link">
        <ul>
            <li><a href="teacher.php">Teacher Signup</a></li>
            <li><a href="staff.php">Staff Signup</a></li>
            <li><a href="signup.php">Students signup</a></li>
            <li><a href="table.php">Students table</a></li>
            <li><a href="ttable.php">Teachers table</a></li>
            <li><a href="stable.php">Staff table</a></li>
        </ul>
    </div>

    <div class="wrap shadow">
        <div class="card">
            <div class="card-header">
                <div class="cover">
                    <img src="assets\media\img\photo-1470129360498-ab39dc4e05d6.webp" alt="">
                </div>
                <div class="profile">
                    <img src="photo/<?php echo $alldata['photo'] ?>" alt="" class="shadow">
                </div>
                <div class="head text-center">
                    <h2>
                        <?php echo $alldata['name'] ?>
                    </h2>
                    <h6>
                        <?php echo $alldata['uname'] ?>
                    </h6>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td>name</td>
                        <td>
                            <?php echo $alldata['name'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>username</td>
                        <td>
                            <?php echo $alldata['uname'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>email address</td>
                        <td>
                            <?php echo $alldata['email'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>cell</td>
                        <td>
                            <?php echo $alldata['cell'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>gender</td>
                        <td>
                            <?php echo $alldata['gender'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Date of Birth</td>
                        <td>
                            <?php echo $alldata['date'] ?>
                        </td>
                    </tr>


                </table>
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-lg btn-warning shadow">update profile</a>
                <a href="" class="btn btn-lg btn-danger shadow">logout</a>
            </div>
        </div>
    </div>








    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>