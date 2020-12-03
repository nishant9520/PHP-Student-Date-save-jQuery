<?php
include('dbconnection.php');
$data=stripslashes(file_get_contents("php://input"));

$mydata=json_decode($data,true);

$id=$mydata['id'];
$name=$mydata['name'];
$email=$mydata['email'];
$password=$mydata['password'];


// insert data mysql

// if(!empty($name) && !empty($email) && !empty($password)){

//     $sql="INSERT INTO student(name,email,password) VALUES('$name','$email','$password')";
    
//     if($conn->query($sql)==TRUE){
//         echo "Student Date Save";
//     }else{
//         echo "UN_Save Date";
//     }
// }else{
//     echo "fill all data";
// }


 // add and update
if(!empty($name) && !empty($email) && !empty($password)){

    $sql="INSERT INTO student( id, name,email,password) VALUES('$id','$name','$email','$password') ON DUPLICATE KEY UPDATE name='$name',email='$email', password='$password' ";
    
    if($conn->query($sql)==TRUE){
        echo "Student Date Save";
    }else{
        echo "UN_Save Date";
    }
}else{
    echo "fill all data";
}
