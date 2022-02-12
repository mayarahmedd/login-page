<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

     <link rel="stylesheet" type="text/css" href="style.css"> 
     <script src="validation.js"></script>
</head>

<body>
<div class="container">
     <form name=myForm action="Login.php" onsubmit="return validate_login()" method="post" required>

        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; }?></p>

       

        <label>email</label>

        <input type="email" name="email" placeholder="email"><br>

        <label>password</label>

        <input type="password" name="password" placeholder="password"><br> 

        <a href="welcome.php"> 
   <input type="submit" name="submit" value="Login">
</a>

        <a href="Registration.php">CLick to signup</a><br><br>

     </form>
        </div>
</body>

</html>