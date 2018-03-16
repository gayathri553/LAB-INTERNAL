<?php
require 'connect.php';
      if(isset($_POST['register'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $id=$_POST['id'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];
        $phoneno=$_POST['phoneno'];
        $query="select * from sell where email='$email'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("user already exists ....try another name")</script>';
					
				}else
				{
					 $qry = "INSERT INTO `sell` ( `name`,`email`,`id`, `password`,`confirmpassword`,`phoneno`) VALUES ('$name', '$email', '$id','$password','$confirmpassword','$phoneno')";
					 $sql=mysqli_query($con,$qry);
					if($sql){
                        echo '<script type="text/javascript">
                        alert("user got registered ...go to login page")
                        </script>';
					}
					else{
                        echo '<script type="text/javascript">
                        alert("error")
                        </script>';
					}
				}
         
		   }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Registration</title>
            <link rel="stylesheet" href="register.css"/>
    </head>   
    <body>
        
           <h1>PROPERTY BOOKING</h1>
    
                <form class="form" method="post" action="">
		            Name</br><input type="text" name="name"><br />
                    Email</br><input type="text" name="email"><br />
                    ID</br><input type="text" name="id"><br />
                    Password</br><input type="password" name="password"><br />
                    Confirmpassword</br><input type="password" name="confirmpassword"><br />
                    Phoneno</br><input type="text" name="phoneno"><br />
                    <input type="submit" name="register" value="REGISTER"><br/>
                   
                </form>
                <a href="login.php" > Log In </a>
    </body>  
</html>
