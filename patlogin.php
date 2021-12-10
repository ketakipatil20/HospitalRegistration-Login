<?php 
session_start();
 header('location:index.php');


$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}else{
    echo "no connection";
}



mysqli_select_db($con, 'patientuserdata');

$name =$_POST['name'];
$email=$_POST['email'];
$patientaddress=$_POST['patientaddress'];
$mobile=$_POST['mobile'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$psw=$_POST['psw'];
$pswrepeat=$_POST['pswrepeat'];


$q=" select name,psw from patientdata where name='$name' && psw='$psw' ";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);

if(num==1){
   $_SESSION['username']=$name;
   header('location:patient.php');

}
else{
    header('location:index.php');
}



?>