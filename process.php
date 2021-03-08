<?php

$con = mysqli_connect('localhost','root');
if(!$con){
	echo "no DatabaseConnection";
}
mysqli_select_db($con,'crud');
$name= $_POST['name'];
$location=$_POST['location'];
$query="insert into data(name,location) VALUES ('$name','$location')";

mysqli_query($con,$query);



?>