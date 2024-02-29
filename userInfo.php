<?php 
$con =mysqli_connect('localhost','root')

if($con){
    echo "Connection Succesful"
}else{
    echo "connection Failed"
}
?>