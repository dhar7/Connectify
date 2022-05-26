<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "dhar";
setcookie($cookie_name , $cookie_value , time()+(60) , "/");
?>	

<html>
<body>
  <?php	
	if(!isset($_COOKIE[$cookie_name]))
	{
		echo "Cookie named '" . $cookie_name . "'is not set.";
	}
	else
	{
		echo "Cookie named '" . $cookie_name . "' is set to a value " . $_COOKIE[$cookie_name] ;
	}
  ?>	
</body>
</html>


<form method="get" , action="">
				<input type="radio" name="theme" id="lightid" value = "light">
				<label for="lightid" style="color: black;">Light</label><br>
				<input type="radio" name="theme" id="darkid" value="dark">
				<label for="darkid" style="color: black;">Dark</label>
				<input type="submit" value ="submit" >
	   </form>
	   <?php
	      
	        if(isset($_POST['submit']))
			{
				//echo "Good to set value";
				//$cookie_value = ;
				if (isset($__POST['theme']))
				{
					setcookie("theme", $_POST['theme'] , time() + (3600) ,"/") ; 
				    echo $_COOKIE["theme"];	
				}
				
			}
	    ?>