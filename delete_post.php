



    	    <?php
    	    echo "delete" ; 
    	    //$con = mysqli_connect("localhost","root","","social_network") ;
    	    //global $con;
    	    echo "delete" ; 
               if(!(isset($_GET['post_id'])))
                  {
                  	echo "Hi";
                       
	                   
                       $get_id = $_GET['post_id'];
    
	                   $get_post = "delete * from posts where post_id='$post_id'";
                     
	                   $run_delete = mysqli_query($con,$get_post);
                   
	                   if($run_delete)
                       {
    	                   echo "<string>alert('Your Post Has Been Deleted!')</script>";
    	                   echo "<script>window.open('home.php','_self')</script>";
                       }
                       else
                       {
                       	 echo "failed" ; 
                       }

                       
                  }
                else
                {
                	echo"outer else";
                }  
    	    ?>
    	   

