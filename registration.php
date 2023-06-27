<?php
session_start();
header('location:login.php');

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'babystore');

$name = $_POST['username'];
$password = $_POST['password'];

$s = "select * from  users where name = '$name'";

$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1){
        echo "username is already taken ";
}
else{
    $reg = "insert into users(name,password) values('$name','$password')";
    mysqli_query($conn,$reg);
    echo "registration successfull";

}


?>