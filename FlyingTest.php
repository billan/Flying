<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "flyingdb2";
$password = "tAnbAWDz8Y2qK5fX";
$dbname = "flying";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Location, CostPerHour, OtherCosts FROM costtbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Location</th><th>CostPerHour</th><th>Other Costs</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["Location"]. "</td><td>" . $row["CostPerHour"]. "</td><td> " . $row["OtherCosts"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>