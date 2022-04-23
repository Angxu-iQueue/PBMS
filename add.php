<?php      
  include ('connection.php');

  $date = $_POST['date'];
  $expname = $_POST['expname'];
  $type = $_POST['exptype'];
  $amount = $_POST['amt'];
  
  $add = "insert into expense_tbl(`date`,`name of expense`,`type of expense`,`amount`) values ('$date','$expname','$type','$amount')";
  $insert = mysqli_query($con,$add);

  
  
  if(!$insert){
    echo '<script> alert("Error"); window.location.href = "admin.html";</script>';
}
else {
    echo '<script> alert("Expense Added Successfully"); window.location.href = "edit.php";</script>';
}
?>