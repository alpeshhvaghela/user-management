<?php
ini_set('display_errors', true);
include('connection.php');
$id = $_GET['id'];
$sql = "select * from `trip_kachh` where id = '$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if (!empty($_POST)) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $other_info = $_POST["other_info"];

    $sql = "UPDATE `trip_kachh` SET `name` = '$name', `age` = '$age', `gender` = '$gender', `email` = '$email', `phone` = '$phone', `other_info` = '$other_info' WHERE `trip_kachh`.`id` = '$id';";
    // UPDATE `trip_kachh` SET `name` = 'jay dgdg', `email` = 'jay@jay.comdfdf', `phone` = '1234567890dfdf', `other_info` = 'hidfdfdfdf' WHERE `trip_kachh`.`id` = 10;   

    if ($con->query($sql) == true) {

        header("Location:index.php?message=Update sucessfully");

    } else {
        echo "ERROR:$Sql <br/> $con ->error";
    }

    $con->close();

    print_r($sql);
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='stylesheet' href='./css/bootstrap.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Update</title>
</head>

<body>
    <div class='container'>
        <H3 class='text-center bg-info  pt-3 pb-3'>Welcome To view</H3>

        <form method='POST' class='g-3'>
            <div class='row'>

                <div class='col-md-6 offset-md-3 pt-3 pb-3'>
                    <input type='text' class='form-control' name='name' id='name' placeholder='Enter your name' value="<?php echo $row['name']; ?>">
                </div>
                <div class='col-md-6 offset-md-3 offset-md-3 pt-3 pb-3'>
                    <input type='text' class='form-control' name='age' id='age' placeholder='Eater your age' value="<?php echo $row['age']; ?>">
                </div>
                <div class='col-md-6 offset-md-3 pt-3 pb-3'>
                    <input type='text' class='form-control' name='gender' id='gender' placeholder='Eater your gender' value="<?php echo $row['gender']; ?>">
                </div>
                <div class='col-md-6 offset-md-3 pt-3 pb-3'>
                    <input type='text' class='form-control' name='email' id='email' placeholder='Eater your email' value="<?php echo $row['email']; ?>">
                </div>
                <div class='col-md-6 offset-md-3 pt-3 pb-3'>
                    <input type='text' class='form-control' name='phone' id='phone' placeholder='Eater your phone' value="<?php echo $row['phone']; ?>">
                </div>
                <div class='col-md-6 offset-md-3 pt-3 pb-3 '>
                    <textarea class='form-control' name='other_info' id='other_info' placeholder='Enter other information'><?php echo $row['other_info']; ?></textarea>
                </div>
                <div class=' col-md-6 offset-md-3 pt-3 pb-3 text-center'>
                    <button class=" btn btn-primary" type="submit">Update</button>
                
                    <a class=" btn btn-primary" href="index.php">Back</a>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src='./js/bootstrap.js'></script>

</body>

</html>
