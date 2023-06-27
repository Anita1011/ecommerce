

<?php
session_start();

$conn = mysqli_connect('sql301.infinityfree.com','if0_34404746','');
mysqli_select_db($conn,'if0_34404746_babystore');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "select * from  users where name = '$name' && password= '$password'";

$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1){
        $_SESSION['username'] = $name;
       header('location:index.php');
}
else{
    header('location:login.php');
    

}


?> 


