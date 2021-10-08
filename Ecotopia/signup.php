<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-26">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" placeholder="Full Name">
						<span class="focus-input100" ></span>
					</div>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="phone" placeholder="Phone No.">
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass1" placeholder="Enter password">
						<span class="focus-input100" ></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass2" placeholder="Re-enter password">
						<span class="focus-input100" ></span>
					</div>



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Sign Up!
							</button>
						</div>
					</div>
					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="login.php">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['email']) && !empty($_POST['pass1'])) {  
    $user=$_POST['email'];  
    $pass=$_POST['pass1'];  
	$full=$_POST['name'];
	$phone=$_POST['phone'];
	
    $con=mysqli_connect('localhost','root','root', 'ecotopia') or die(mysql_error());   
  
    $query=mysqli_query($con,"SELECT * FROM userlogin WHERE Username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO userlogin(Username,Password, FullName, PhoneNo) VALUES('$user','$pass', '$full', '$phone')";  
  
    $result=mysqli_query($con, $sql);  
        if($result){  
    echo '<script>alert("Account successfully created!")</script>';  
	header("Location: login.php");
    } else {  
    echo '<script>alert("Failure!")</script>';  
    }  
  
    } else {  
    echo '<script>alert("Invalid username or password!")</script>'; 
    }  
  
} else {  
    echo '<script>alert("All fields are required!")</script>';  
}  
} 
 
?>  
</body>  
</html>