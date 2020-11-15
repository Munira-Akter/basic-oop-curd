<?php require_once "vendor/autoload.php";

use App\Controller\Student;

$stu = new Student;

/**
 * data delete
 */

if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];

    $msg = $stu -> DeleteStudent($deleteid);
    header("location:table.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
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
</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
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
                </div>
            </div>
        </div>
    </section>

    <div class="wrap-table shadow">
        <div class="card">
            <div class="card-body">
                <h2>All Data</h2>
                <?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell</th>
                            <th>UserName</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $all_array = $stu -> SelectStudent();
                            $i = 1;
                            while ($all_data = $all_array -> fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $i ; $i++ ;?></td>
                            <td><?php echo $all_data['name']?></td>
                            <td><?php echo $all_data['email']?></td>
                            <td><?php echo $all_data['cell']?></td>
                            <td><?php echo $all_data['uname']?></td>
                            
                            <td>
                                <a class="btn btn-sm btn-info" href="profile.php?profile_id=<?php echo $all_data['id']?>">View</a>
                                <a class="btn btn-sm btn-warning" href="edit.php?edit_id=<?php echo $all_data['id']?>">Edit</a>
                                <a id="delete" class="btn btn-sm btn-danger" href="?deleteid=<?php echo $all_data['id']?>">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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