<?php
session_destroy();
if(!isset($_SESSION['username'])){
	header("Location:viewer.php");
}
else{
	session_destroy();
}
?>