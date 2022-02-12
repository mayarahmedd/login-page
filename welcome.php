


<?php 

session_start();


 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css"> 

</head>

<body>

     <h1>Hello, <?php echo $_SESSION['uname']; ?></h1>

     <a href="Logout.php"><input type="submit" name="submit" value="Logout"></a>
     
   
</a>
</body>

</html>



 