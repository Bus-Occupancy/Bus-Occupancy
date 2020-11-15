<?php
// include("config.php");
require("functions.php");
 
extract($_POST);
$sql = "INSERT INTO `contactdata`(`name`, `phone`, `email`, `message`) VALUES ('".$name."',".$phone.",'".$email."','".$message."')";
$result = $db->con->query($sql);
// $result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
?>
<html>
<title>Thank You</title>
<center>
<font color="red">
<h1>Thank You For Contacting Us!!!</h1>
</font>
</center>
</html>