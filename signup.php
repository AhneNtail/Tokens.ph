<?php 
   
$name = $_POST['fullName'];
$email = $_POST['UserEmail'];
$password = $_POST['UserPassword'];
$number = $_POST['number'];


$conn = new mysqli('localhost','root','','tokensphdb');
if($conn->connect_error){
die('Connection Failed :'.$conn->connect_error);
}else{
$query = $conn->prepare("insert into usertable(name, email, password,number)values(?,?,?,?)");
$query->bind_param("sssi",$name,$email,$password,$number);
$query->execute();
header("Location: signin.html");
$query->close();
$conn->close();

}

    
    
   
    
    



?>