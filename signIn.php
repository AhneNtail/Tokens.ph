<?php
    require "DBconnection.php";
    session_start();
    
    if(isset($_POST['UserEmail']) && isset($_POST['UserPassword'])){
        $Useremail = $_SESSION['UserEmail'];
        
        $UserEmail = $_POST['UserEmail'];
        $UserPassword = $_POST['UserPassword'];

        $query = ("select email, password from Userinfo where email='$UserEmail' and password = '$UserPassword'");
        $result = mysqli_query($connectDb, $query);
        if(mysqli_num_rows($result) === 1){
            $_SESSION["UserPassword"] = $_POST['UserPassword'];    
            header("Location: main-page-signed-in.html"); 
            }else{
                header("Location: signin-user.html");
            }
        



            
        
        
    }









?>