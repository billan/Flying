<html>
<head>
<style>
table, th, td {
border: 1px solid black;
}
</style>
</center>
<body>

<?php
//error reporting
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

//Includes
require 'dbconn.php';

//Array to store DB results
$resultarray = resultarray();

$sql = "SELECT * FROM loctbl INNER JOIN costtbl ON costtbl.locid = loctbl.pkey";
$result = $conn->query($sql);

//Build array from $sql
while($row = mysql_fetch_assoc($sql)){
// add each row returned into an array
$resultarray[] = $row;
}

Return $resultarray;

print_r($resultarray);

$conn->close();
?>  

</body>
</html>