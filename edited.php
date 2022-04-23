<?php
    include('connection.php');

    $slno=$_POST['slno'];
    $date=$_POST['date'];
    $expname = $_POST['expname'];
    $type = $_POST['exptype'];
    $amount = $_POST['amt'];
  
    //if(isset($_POST['slno']));{
  
    //$update = "UPDATE `expense_tbl` Set `name of expense`='$expname',`type of expense`='$type',`amount`='$amount' Where `slno`='$slno'";
    $update = "update expense_tbl set `name of expense`='$expname',`type of expense`='$type',`amount`='$amount' where `slno`='$slno';";
    $insert = mysqli_query($con,$update);
    if(!$insert){
        echo '<script> alert("error"); window.location.href = "edit.php";</script>';
    }
    else{
        echo '<script> alert("Updated successfully"); window.location.href = "edit.php";</script>';
    }
//}
?>