<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<title>Delete Post</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
    <div class='row'>
    	<div class="col-sm-3">
    	</div>
    	<div class="col-sm-6">
    	    <?php
               if(isset($_GET['post_id']))
                  {
						global $con;

						$get_id = $_GET['post_id'];

						$get_post = "delete from posts where post_id = '$get_id'";

						$run_post = mysqli_query($con,$get_post);

					
						$del_com = "delete from comments where post_id = '$get_id'";
						$run_com = mysqli_query($con,$del_com);
						
						if($run_post)
						{
							echo "<string>alert('Your Post Has Been Deleted!')</script>";
							echo "<script>window.open('home.php','_self')</script>";
						}
                   
                       
                  }
    	    ?>
    	</div>
    	<div class="col-sm-3">
    	</div>
    </div>
</body>
</html>