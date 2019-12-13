<?php
	include('../connection.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
		$que=mysqli_query($conn,"select * from admin where user='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{
				$_SESSION['admin']=$email;
				header('location:index.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>mactooTech</title>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/sup/style.css">


</head>

<body style="background-color: #0b3c5d;">


  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="color:orange;">ADMIN Login</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" style="color:orange;"><!--&nbspCreate Account--></label>
    <div class="login-form">
      <form class="sign-in-htm" action="index.php" method="post">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="./api/user/signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">UserName</label>
          <input id="username" name="username" type="text" class="input" required>
        </div>
         <!--  <div class="group">
          <label for="middlename" class="label">Middle Name</label>
          <input id="middlename" name="middlename" type="text" class="input" required>
        </div> >
          <div class="group">
          <label for="lastname" class="label">Last Name</label>
          <input id="lastname" name="lastname" type="text" class="input" required>
        </div-->
        <div class="group">
          <label for="email" class="label">Email</label>
          <input id="email" name="email" type="email" class="input" required>
        </div>
        <div class="group">
          <label for="psw" class="label">Password</label>
          <input id="password" name="pwd" type="password" class="input" data-type="password" required>
        </div>
        <div class="group">
          <label for="psw-repeat" class="label">Confirm Password</label>
          <input id="password" name="pwd" type="password" class="input" data-type="confirmpassword" required>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
            <label for="tab-1">Already Member?</label>
        </div>
      </form>
    </div>
  </div>
</div>



</body>

</html>
