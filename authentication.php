<?php      
  include ('connection.php');
    $user_id = $_POST['usr'];  
    $password = $_POST['pass'];
    
    

        //to prevent from mysqli injection  
        $user_id = stripcslashes($user_id);  
        $password = stripcslashes($password);  
        $user_id = mysqli_real_escape_string($con, $user_id);  
        $password = mysqli_real_escape_string($con, $password);  
      
        //for admin  
        $sqll = "select *from admin where admin_id = '$user_id' and password = '$password' ";  
        $admin = mysqli_query($con, $sqll);
        $arow = mysqli_fetch_array($admin, MYSQLI_ASSOC);  
        $acount = mysqli_num_rows($admin); 
        
        $error = "Login failed" ;


        if($count == 1)
        {  
            header("location: user.html");
        }
        elseif($acount == 1){
            header("location: admin.html");
        }
        else{
            header("location:index.html? login failed");
            echo "<script>console.log('ERROR" . $error . "' );</script>";
            echo '<div style="color: red">' .$error. '</div>';  
        }
?>         
