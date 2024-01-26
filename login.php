<?php
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="login.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html {
            display: table;
            margin: auto;
        }
        p {
            color: red;
            margin-top: 10px;
        }
        .card {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="card">
        <form action="login.php" method="post">
            <h1 class="damn">Log in</h1>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input style="width:100%;" type="email" name="user" id="form3Example3"
                    class="form-control form-control-lg" placeholder="Enter a valid email address" required />
            </div>
            <!-- Password input -->
            <div class="form-outline mb-3">
                <input style="width:100%;" type="password" name="password" id="form3Example4"
                    class="form-control form-control-lg" placeholder="Enter password" required />
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" name="ok" class="btn btn-dark btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>
            </div>
        </form>
<?php
if(isset($_POST['ok'])){
    $admin = "admin@gmail.com";
    $adminpass = "321321";
    $username =  $_POST['user'];
    $password =  $_POST['password'];
    $_SESSION["user"] = $username;
    error_reporting(E_ERROR | E_PARSE);
    $sql = "SELECT EMAIL,PASSWORD  from login where EMAIL = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($username == $admin && $password == $adminpass){
        echo "<script>window.location.href='admin_home.php';</script>"; 
    } elseif($username == $row['EMAIL'] && $password == $row['PASSWORD']) {
        echo "<script>window.location.href='manage_home.php';</script>";
    } else {
        echo "<p>Login failed</p> ";
    }
}
?>
    </div>
</body>
</html>