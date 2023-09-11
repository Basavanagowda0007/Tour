<?php
$con =mysqli_connect('localhost','root');

 if($con)
    {
        echo "connection successfully";
    }else{
        echo 'not connected';
    }
mysqli_select_db($con, 'tour_data');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile =$_POST['mobile'];
$address =$_POST['address'];

$query= "insert into userinfodata3( user, email, mobile, address) VALUES ('$user','$email','$mobile','$address')";
mysqli_query($con ,$query);


echo "$query";
header('location:index.php');
?>    






















































