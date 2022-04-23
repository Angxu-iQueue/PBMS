<html>
    <head>
        <title>PBMS | Edit Expense</title>
    <!--Favicon-->    
    <link rel="icon" type="icon" href="Assets\favicon.ico">
        <!--Css-->

        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="Src/style.css">
        <link rel="stylesheet" href="Src/Content.css">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../icofont/icofont.min.css">
        <style>
            table{
                width: 100%;
            }
            table,th,td{
            border:1px solid gray;
            }
            a{
                color: red;
                text-decoration: none; 
            }
            a:hover{
                color: cyan;
            }
            @media print{
                body{
                    visibility: visible;
                }
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
            <li><button id="btnedit" onclick="window.location.href='Admin.html'">Go Back</button></li>
            <li><button id="btnedit" onclick="window.print()">Generate Report</button></li>
        </ul>
</div>
    <div>
        <?php 
        include ('connection.php');

        $sql = " SELECT `slno`,`date`,`name of expense`,`type of expense`,`amount` FROM `expense_tbl`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>slno</th><th>Date</th><th>Name of expense</th><th>Type of expense</th><th>Amount</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["slno"]. "</td><td>" . $row["date"]. "</td><td>" . $row["name of expense"]. "</td><td>" . $row["type of expense"]. "</td><td>" . $row["amount"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>

       </div>
 <!--Script-->
 <script src="Src\theme.js"></script>
 </div>
 </body>
 </html>