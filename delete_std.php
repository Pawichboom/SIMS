<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$id = $_GET["id"];
$sql = "DELETE FROM `std_info` WHERE `id`='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<h1>delete record </h1>";
    echo "<h1>id" . $id ."</h1>"; 
    echo "<h1>successfully!</h1>";
    echo "<a href='student.php'>Back</a>";

  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>