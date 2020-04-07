<?php 
// Database configuration 
  
 

$servername = "";
$username = "";
$password = "";
$dbname = "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['search'];
$sql = "select * from serviceinfo where service_name like '%".$id."%' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["service_name"]. "\n";
 }
} else {
 echo "0 results";
}
$conn->close();
?>