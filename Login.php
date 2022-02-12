<?php 

session_start(); 


echo "b";
$conn = mysqli_connect('localhost','root','','registration');


if (!$conn) {

    echo "Connection failed!";

}



if(isset($_POST['submit']))
 {
    
  
    $email = $_POST['email'];

    $password = $_POST['password'];

  
        
        $sql = "SELECT * FROM users WHERE email='$email' ";
        
       
        $result = mysqli_query($conn, $sql);
        $count =  mysqli_num_rows($result);
        if ($result && $count > 0) {
              
            
            
            $data = mysqli_fetch_assoc($result);
              
         
            if( $data['password'] === md5( $password)){
                echo "Logged in!";
                
                $_SESSION['uname'] = $data['name'];

                $_SESSION['password'] = $data['password'];

                $_SESSION['user_id'] = $data['user_id'];

                header("Location: welcome.php");

                exit();

            }else{
                     
                     header("Location: index.php?error=Incorect User name or password");
                     
                exit();

            }

       }else{ 
                  
            header("Location: index.php?error=Incorect User name or password");
            exit();

        }



}
    