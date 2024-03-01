<?php 
$con = mysqli_connect('localhost','root');

if ($con) {
    echo "Connection Succesful";
}else{
    echo "connection Failed";
}

mysqli_select_db($con, 'php');

$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$comment= $_POST['comment'];
$query= "insert into user (name,email,mobile,comment) values('$name','$email','$mobile','$comment')";

mysqli_query($con, $query);

header('location:index.php');

?>