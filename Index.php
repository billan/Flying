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

function datagetfunction () {
	//Includes (move outside of function, will need to pass connection object to function)
	require 'dbconn.php';

		//Array to store DB results
		//$resultarray = resultarray();

		$sql = "SELECT * FROM loctbl INNER JOIN costtbl ON costtbl.locid = loctbl.pkey";
		$result = $conn->query($sql);
		//print_r($result);
		//Build array from $sql
		while($row = mysqli_fetch_assoc($result)){
		//Add each row returned into an array
		$resultarray[] = $row;
		}
	Return $resultarray;
	$conn->close();
}
$results = datagetfunction();
print_r($results);

?>  

</body>
</html>