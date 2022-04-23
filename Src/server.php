<?php
if(isset($_POST['submit']))
{
 
   $name = $_POST['usr'];
   $password = $_POST['pass'];
  

   if ($name == '' or $email == '' or $contact =='' or $address == '' or $password =='' or $confirm_password == ''){
   	echo "fields must not be empty";
   }
   elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      echo "Only letters and white space allowed";
    }elseif($_POST["pass"] !== $_POST["confirm_password"]) {
      echo "Passwords does not match !! Please try again."; 
  	} else {
  		include('connection.php');
  		$sql = "SELECT FROM admin (admin,password)
   VALUES ('$name','$password')";
   if (mysqli_query($con, $sql)) {
    echo '<script> alert("Logged in Successfully"); window.location.href = "admin.html";</script>';
   } else {
    echo '<script> alert("Error"); window.location.href = "admin.html";</script>' . $sql . "
" . mysqli_error($con);
   }
   mysqli_close($con);
} }
?>
    
