<?php
$servername="localhost";
$username="root";
$password="";
$dbname="students";
// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
$id = $_GET["id"];
$sql="SELECT * FROM `std_info` WHERE `id` =$id ";
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html lang="th">
<head><meta charset="UTF-8"></head>
<body>
<form method="post" action="./update_std.php">
<input type="hidden" id="old_id" name="old_id" value="<?php echo $row["id"]; ?>">
id: <input type="text" id="id" name="id" value="<?php echo $row["id"]; ?>" required></br>
name:<input type="text" name="en_name" value="<?php echo $row["en_name"]; ?>"></br>
surname:<input type="text" name="en_surname" value="<?php echo $row["en_surname"]; ?>"></br>
ชื่อ:<input type="text" name="th_name" value="<?php echo $row["th_name"]; ?>"></br>
นามสกุล:<input type="text" name="th_surname" value="<?php echo $row["th_surname"]; ?>"></br>
Major:<input type="text" name="major_code" value="<?php echo $row["major_code"]; ?>"></br>
Email:<input type="email" name="email" value="<?php echo $row["email"]; ?>"></br>
<input type="submit" value="update"><input type="reset">
<?php
        }}}
?>
</form>
</body>
</html>