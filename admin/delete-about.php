<?php
require_once('functions/function.php');
$id=$_GET['d'];
$del="DELETE FROM cs_about WHERE about_id='$id'";

if(mysqli_query($con,$del)){
header('Location:all-about.php');
}else{
 echo "not delete!";
}
?>