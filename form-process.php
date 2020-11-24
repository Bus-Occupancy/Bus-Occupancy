<?php
// include("config.php");
require("functions.php");
 
extract($_POST);
$sql = "INSERT INTO `contactdata`(`name`, `phone`, `email`, `message`) VALUES ('".$name."',".$phone.",'".$email."','".$message."')";
$result = $db->con->query($sql);
// $result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}else{
    echo '<script>swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
});</script>';
}
?>
