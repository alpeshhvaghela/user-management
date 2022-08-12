<?php
ini_set("display_errors", true);
include("connection.php");

if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $other_info = $_POST["other_info"];


    $sql = " INSERT INTO `trip_kachh` ( `name`, `age`, `gender`, `email`, `phone`, `other_info`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$other_info');";
    // echo $sql;
    if ($con->query($sql) == true) {
        
     header("Location:index.php?message=Add sucessfully");  
     
    } else {
        echo "ERROR:$Sql <br/> $con ->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Add</title>
</head>

<body>
    <div class="container">
        <H3 class="text-center bg-info  pt-3 pb-3">Welcome to trip form</H3>
        <form method="POST" class="g-3">
            <div class="row">
                <div class="col-md-6 offset-md-3 pt-3 pb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="col-md-6 offset-md-3 offset-md-3 pt-3 pb-3">
                    <input type="text" class="form-control" name="age" id="age" placeholder="Enter your age">
                </div>
                <div class="col-md-6 offset-md-3 pt-3 pb-3">
                    <input type="text" class="form-control" name="gender" id="gender" placeholder="Enter your gender">
                </div>
                <div class="col-md-6 offset-md-3 pt-3 pb-3">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="col-md-6 offset-md-3 pt-3 pb-3">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="col-md-6 offset-md-3 pt-3 pb-3 ">
                    <textarea class="form-control" name="other_info" id="other_info" placeholder="Enter other information"></textarea>
                </div>
                <div class="text-center pt-3 pb-3">
                    <button class="btn btn-primary " type="submit">submit</button>
                    <button class="btn btn-primary " type="reset">reset</button>
                </div>
                <div class="btn pt-3 pb-3">
                    <a class="btn btn-primary" href="index.php" >Back</a>
                </div>
            </div>
        </form>
    </div>

    <script src="./js/bootstrap.js"></script>

</body>

</html>