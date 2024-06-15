<?php 

$sever ="localhost";
$username="root";
$password="";
$dbname="project data";

$con = mysqli_connect($sever, $username,$password,$dbname);

if(!$con)
{
    echo "not connected";
}

else{
    echo "connect";
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "INSERT INTO INSERT INTO `test`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email','$password','$phone')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo "data submited";
}

{
    echo "query failed.....!";
}

?>