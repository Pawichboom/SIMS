<?php
$oldid=trim(htmlspecialchars($_POST["old_id"]));
$id=$_POST["id"];
$en_name=$_POST["en_name"];
$en_surname=$_POST["en_surname"];
$th_name=$_POST["th_name"];
$th_surname=$_POST["th_surname"];
$major_code=$_POST["major_code"];
$email=$_POST["email"];
//echo $id; echo $en_name; echo $en_surname; echo $th_name; echo $th_surname;
//echo $major_code; echo $email;
$servername="localhost";
$username="root";
$password="";
$dbname="students";
// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
$sql="UPDATE `std_info` SET `id`='$id',`en_name`='$en_name',`en_surname`='$en_surname',`th_name`='$th_name',`th_surname`='$th_surname',`major_code`='$major_code',`email`='$email' WHERE `id`=$oldid";
//echo $sql."<br>";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<h1>Update Record</h1>";
    echo "<h1>id" . $id ."</h1>"; 
    echo "<h1>successfully</h1>";
    echo "<a href='student.php'>Back</a>";
}
else echo "Error: ".$sql."<br>".mysqli_error($conn);
mysqli_close($conn);
?>