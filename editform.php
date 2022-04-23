<html>
    <head>
        <title>PBMS | Edit Expense</title>
    <!--Favicon-->    
    <link rel="icon" type="icon" href="Assets\favicon.ico">
        <!--Css-->
        <link rel="stylesheet" type="text/css" href="Src/style.css">
        <link rel="stylesheet" href="Src/Content.css">
        <style>
            #edit{
                margin-left: 40%;
                margin-right: auto;
                
            }
            table,th,td{
            border:1px solid gray;
            
        }
             
            </style>
    </head>
<body>
    <!--Navigation-->
    <div class="main">
        <nav>
        <img src="Assets\logo.png" type="png" class="logo" alt="PBMS">
        <ul>
            <li><a href="index.html">Sign Out</a></li>
            <li><a href="mailto:angshu201.as@gmail.com">Contact Us</a></li>
    
        </ul>
        <img src="Assets\moon.png" id="icon">
        </nav>
    <!--Content-->
    <div class="content" id="content">
        <ul>
            <li><button id="btnedit" onclick="window.location.href='edit.php'">Go Back</button></li>
        </ul>
    </div>
    <div id="edit">
        <?php 
        include ('connection.php');
        //$sl = $_GET['slno'];
        if(isset($_GET['slno']));{
            $sl = $_GET['slno'];
        }
        $qry= "select `slno`,`date`,`name of expense`,`type of expense`,`amount` from expense_tbl where slno='$sl'";
        $result=mysqli_query($con,$qry);
        while($row=mysqli_fetch_array($result)){
            
        ?>                                    
                <form class="editform" action="edited.php" onsubmit="return validation()" method="post" autocomplete="off">
                <table class="editexpense">
            <tr><td>Slno<input value="<?php echo $row['slno']; ?>" type="number" name="slno" id="slno"></input></td></tr><br>
            <tr><td>Date<input value="<?php echo $row['date']; ?>" type="date" name="date" id="date"></input></td></tr><br>
            <tr><td>Name of expense<input type="text" name="expname" id="expname" value="<?php echo $row['name of expense']; ?>"></input></td></tr><br>
            <tr><td>Type of expense<input type="text" name="exptype" id="exptype" value="<?php echo $row['type of expense']; ?>"></input></td></tr><br>
            <tr><td>Amount<input value="<?php echo $row['amount']; ?>"type="number" min="1" name="amt" id="amt" ></td></tr><br>
            </table>
            <button id="btn">Confirm Changes</button>
            </form>
        <?php
        }
    //}
        ?>
    </div>
    </div>
    </body>   
        <!--Script-->
 <script src="Src\theme.js"></script>
 <script src="Src\event.js"></script>
</html>