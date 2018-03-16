<?php
require 'connect.php';
   if(isset($_POST['login'])){	   
		$email=($_POST['email']);
		$password=($_POST['password']);
		$query="select * from sell where email='$email' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['email']=$email;
			header("location:display.php");
		}
		else{
            echo '<script type="text/javascript">
            alert("invalid credentials")
            </script>';
		}
   }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Login</title>
            <link rel="stylesheet" href="register.css"/>
    </head>   
    <body>
        	<h1>PROPERTY</h1>
            <h2>Login</h2>
            <form class="form" method="post" action="">
                Email</br><input type="text" name="email"><br />
                Password</br><input type="password" name="password"><br />
                <input type="submit" name="login" value="Log In">
            </form>
            <a href="register.php" > REGISTER </a></br>
            <a href="index.html" > HOME </a></br>    
        </div>
    </body>  
</html>
