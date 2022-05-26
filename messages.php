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

	<title>Messages</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style >
  #scroll_message{
    max-height: 500px;
    overflow: scroll;
  }
  #btn-mesg{
    width: 20%;
    height:28px;
    border-radius:5px ;
    margin: 5px;
    border:none;
    color: #fff;
    float: right;
    background-color: #2ecc71;
  }
  #select_user{
    max-height: 500px;
    overflow: scroll;
  }
  #green{
     background-color: #2ecc71;
     border-color: #27ae60;
     width: 45%;
     padding: 2.5px;
     font-size: 16px;
     border-radius: 2px;
     float: left;
     margin-bottom:5px ;
  }
  #body
  {
    background-color: AntiqueWhite    ;
  }
  #blue
  {
     background-color: #3498db;
     border-color: #2980b9;
     width: 45%;
     padding: 2.5px;
     font-size: 16px;
     border-radius: 2px;
     float: right;
     margin-bottom:5px ;
  }
</style>
<body id="body">

  	
<div class="row">
    <div class="col-sm-12">
      <center><h2>Find People to Chat</h2></center><br><br>
      <div class="row">
        <div class="col-sm-4">
        </div>
        
        <div class="col-sm-4">
        </div>
      </div><br><br><br>
      <?php 
          $user = "select * from users";
          $run_user = mysqli_query($con,$user);
          while($row_user = mysqli_fetch_array($run_user))
          {
                $user_id = $row_user['user_id'];
                $user_image = $row_user['user_image'];
                $user_name = $row_user['user_name'];
                $first_name = $row_user['f_name'];
                $last_name = $row_user['l_name'];

                echo" <center>
                    <div class='container-fluid'>
                        
                        <a style='text-decoration: none;cursor: pointer;color: #3897f0;' href='chat.php?u_id=$user_id'>

                        <img class='img-circle' src='users/$user_image' width='90px' height='80px' title='$user_name'><strong>&nbsp $first_name $last_name</strong><br><br></a>    
                    </div> </center>
                
                ";
          }
      ?>
    </div>  
</div>




<script >
  var div = document.getElementById("scroll_messages");
  div.scrollTop = div.scrollHeight; 
</script>
</body>
</html>