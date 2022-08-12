<?php
ini_set("display_errors", true);
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel='stylesheet' href='./css/bootstrap.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>User</title>
</head>

<body>
    <div class="container">
        <div class="heder">
            <h3 class="text-center pt-5 pb-5">User</h3>
        </div>
        <div class='pt-3 pb-3'>
            <a class="btn btn-primary" href="add.php">Add user</a>
        </div>
        <?php if (isset($_GET['message'])) { ?>
            <div class="alert alert-success">
                <?php echo $_GET['message']; ?>
            </div>
        <?php } ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Other</th>
                    <th scope="col">Date &time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `trip_kachh`";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo "<pre>";
                    // print_r($row);
                    // echo "</pre>";  
                ?>

                    <tr>

                        <td><?php echo $row['id']; ?> </td>
                        <td><?php echo $row['name']; ?> </td>
                        <td><?php echo $row['age']; ?> </td>
                        <td><?php echo $row['gender']; ?> </td>
                        <td><?php echo $row['email']; ?> </td>
                        <td><?php echo $row['phone']; ?> </td>
                        <td><?php echo $row['other_info']; ?> </td>
                        <td><?php echo $row['dt']; ?></td>
                        <td>
                            <a class="btn btn-success btn-sm" href="view.php?id=<?php echo $row['id']; ?>">
                                <i class="bi bi-eye mx-2"></i>
                            </a>
                            <a class="btn btn-warning btn-sm" href="update.php?id=<?php echo $row['id']; ?>">
                                <i class="bi bi-pencil-square mx-2"></i>
                            </a>

                            <a onclick="del(<?php echo $row['id']; ?>)" class="btn btn-danger btn-sm" href="javascript:;">


                                <i class="bi bi-trash mx-2"></i>
                            </a>

                        </td>

                    </tr>
                <?php  } ?>
        </table>

    </div>
    <script src='./js/bootstrap.js'></script>
    <script>
        // make a function confirm the user confirmation  
        function del(id) {


            const del_usr = confirm("confirm to delete this user press ok");
            if (del_usr) {
                //rediract page
                location.href = "delete.php?id=" + id;
            }
        }
    </script>
</body>

</html>