<?php
$server='localhost';
$db='student_db';
$username='root';
$password='2021';

$conn=new mysqli($server,$username,$password,$db);
if(!$conn){
    echo'connection failed';
}else{
    echo'connected successfully';
}
?>