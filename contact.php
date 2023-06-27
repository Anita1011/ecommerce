<?php
session_start();
header('location:contactpage.php');

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'babystore');

$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['messaage'];

$s = "select * from  contact where name = '$name'";

$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1){
        echo "username is already taken ";
}
else{
    $reg = "insert into users(name,email,phone,message) values('$name','$email','$phone','$message')";
    mysqli_query($conn,$reg);
    echo "registration successfull";

}


?>