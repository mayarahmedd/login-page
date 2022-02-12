
<!Doctype html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="validation.js"></script>
</head>
<body>
   <div class="container">
      <div class="header">
         <h2> Registration Form</h2>
</div>
<form name= myForm action="Registration.php" onsubmit="return validate()" method="post" required>


<div> 
   <label for="username"> Username :</label>
   <input type="text" name="Username" placeholder="User Name">
</div>

<div> 
   <label for="email"> email :</label>
   <input type="email" name="email" placeholder="email">
</div>

<div>
<label for="password"> Password :</label>
   <input type="password" name="password" placeholder="password">
   </div>
   <div>
   <label for="password"> Confirm Password :</label>
   <input type="password" name="password_2"placeholder="Confirm password">
   </div>
   <div>
   <a href="welcome.php"> 
   <input type="submit" name="submit" value="register">
</a>
</div>
   <p>Already a user?<a href ="index.php"><b>Login</b></a></p> 
</form>
</div>

<?php

session_start();

$conn = mysqli_connect('localhost','root','','registration');


if (!$conn) {

    echo "Connection failed!";

}

if(isset($_POST['submit'])){

$errors =array();

$uname=mysqli_real_escape_string($conn,$_POST['Username']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$password_2=mysqli_real_escape_string($conn,$_POST['password_2']);





if($password!=$password_2){array_push($errors,"password don't match");
   echo '<script>alert("unmatched passwords")</script>';}




$user_check_query ="SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $user_check_query);
$user=mysqli_fetch_assoc($result);

if($user){
   if($user['name']===$uname){array_push($errors,"username already exists");
      echo '<script>alert("username already exists")</script>';}
   if($user['email']===$email){array_push($errors,"This email id already has a registration username");
      echo '<script>alert("This email id already has a registration username")</script>';}
      
    
   
}



if(count($errors)==0){
  
   $password=md5($password);

   
   mysqli_query($conn,"INSERT INTO users (name,email,password) VALUES('$uname','$email','$password')");
   $_SESSION['uname']=$uname;
   
    header('location:welcome.php');

}
}
?>

</body>
</html>

