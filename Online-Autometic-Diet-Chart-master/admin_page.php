
<?php
session_start();
if(isset($_SESSION['user_id'])){
    $session_id = $_SESSION['user_id'];
}
else
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/color.css">
    <!-- custom css -->
</head>

<div class="container-fluid">
    <div class="row" style="margin-top: 30px">
        <div class="col-sm-5 col-sm-offset-3">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h2>Admin Panel</h2>
                </div>
                <div class="panel-body">
                    <ul style="list-style-type:none;margin-right:35px;" >

                        <li ><a href="addItem.php" class="btn btn-success btn-block ">ADD Food Item</a></li>
                        <br>
                        <li ><a href="delete_food_item.php" class="btn btn-warning btn-block ">Delete OR Edit  Food Item</a></li>
                        <br>
                        <li ><a href="log_out.php?logout=1" class="btn btn-danger btn-block ">Log Out</a></li>


                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- javascript here -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>

<!-- custom js  -->
</body>
</html>