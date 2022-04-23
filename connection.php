<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "pbms";  
    
    //connect db
    $con = mysqli_connect($host, $user, $password, $db_name);  
    //error in connection
    if(!$con) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  