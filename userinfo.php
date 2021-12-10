<?php 
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'hospitaluserdata');

$name =$_POST['name'];
$email=$_POST['email'];
$qualification=$_POST['qualification'];
$hospitalAddrress=$_POST['hospitalAddrress'];
$phoneno=$_POST['phoneno'];
$password=$_POST['password'];
$repeatpassword=$_POST['repeatpassword'];

$query="insert into doctordata(name, email, qualification, hospitalAddrress, phoneno, password,    repeatpassword) values('$name','$email','$qualification','$hospitalAddrress','$phoneno','$password','$repeatpassword')";

echo "$query";
mysqli_query($con,$query);
header('location:index.php');




?>