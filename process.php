<?php

$mysqli=new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
if(isset($_POST['save'])){
$name=$_POST['name'];
$location=$_POST['location'];
$mysqli->query("insert into data(name,location) VALUES ('$name','$location')")or die($mysqli->error);
header('location:index.php');
}
if(isset($_GET['delete'])){

	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM data WHERE Id=$id") or die($mysqli->error());
header('location:index.php');

}



