<?php
ini_set('display_errors', true);
include('connection.php');
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='stylesheet' href='./css/bootstrap.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>view</title>
</head>

<body>
    <div class='container'>
        <h3 class='text-center bg-info  pt-3 pb-3'>Welcome To view</h3>

        <div class='row'>
            <?php
            // print_r( $_GET );
            // exit;
            $id = $_GET['id'];
            $sql = "select * from `trip_kachh` where id = '$id'";
            $result = mysqli_query($con, $sql);										
            $row = mysqli_fetch_array($result);
            ?>

            <div class='col-md-6 offset-md-3 pt-3 pb-3'>
                
                <label for="name">name :<?php echo $row['name'] ?></label>
            </div>
            <div class='col-md-6 offset-md-3 offset-md-3 pt-3 pb-3'>
              
                <lable>age :<?php echo $row['age'] ?></lable>
            </div>
            <div class='col-md-6 offset-md-3 pt-3 pb-3'>
               
                <lable>gender :<?php echo $row['gender']?></lable>
            </div>
            <div class='col-md-6 offset-md-3 pt-3 pb-3'>
             
                <lable>email : <?php echo $row['email']?></lable>
            </div>
            <div class='col-md-6 offset-md-3 pt-3 pb-3'>
                
                <label>phone : <?php echo $row['phone'] ?> </label>
            </div>
            <div class='col-md-6 offset-md-3 pt-3 pb-3 '>
                <label>text : <?php echo $row['other_info']?></label>
            </div>    
            <div class='col-md-6 offset-md-3 pt-3 pb-3'>
                <a class='btn btn-primary' href='index.php'>Back</a>
                <a class="btn btn-primary" href="update.php?id=<?php echo $row['id']?>">Edit</a>
            </div>

        </div>

    </div>
    <script src='./js/bootstrap.js'></script>
</body>

</html>
