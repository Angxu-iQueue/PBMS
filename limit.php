<?php      
  include ('connection.php'); 
  $monthly = $_POST['monthly'];
  $weekly = $_POST['weekly'];

  $limit = "Update limit_tbl set monthly_limit = '$monthly' ,weekly_limit = '$weekly'";
  $confirm = mysqli_query($con, $limit);


  if(!$confirm){
    echo '<script> alert("Error"); window.location.href = "admin.html";</script>';
}
else {

    echo '<script> alert("Limit Set Successfully"); window.location.href = "admin.html";</script>';
    
  }
?>
