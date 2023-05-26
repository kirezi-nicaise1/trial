<?php
include 'connection.php';
// include 'signup.html';

if(isset($_POST{'submit'})){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    // $password=$_POST['password'];
    // $password=MD5($password);
    $password=SHA1($_POST['password']);
    $gender=$_POST['gender'];
    $sql="INSERT INTO user(fname,lname,email,pass,gender)values('$fname','$lname','$email','$password','$gender')";
    $result=$conn->query($sql);

    if($result==true){
        echo'New record created successfully.';
    }else{
        echo'Error:'.$sql.'<br>'.$conn->error;
    }
    $conn->close();
}


?>
