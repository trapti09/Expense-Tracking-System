<?php
     $User_Id=$_POST['User_Id'];
     $Email=$_POST['Email'];
     $Password=$_POST['Password'];
     $Mobile=$_POST['Mobile'];

$conn = new sqli('localhost','root','','test');
if($conn->connect_error){
    die('Connectiion Failed :'.$conn->connect_error);
}else{
    $stmt= $conn->prepare("insert into registration(User_Id,Email,Password,Mobile)
    value(?,?,?,?)");
$stmt->bind_param("issi", $User_Id, $Email, $Password, $Mobile);
$stmt->execute();
echo "registration Successfully done..." ;
$stmt->close();
$conn->close();   
}