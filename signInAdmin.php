<?php
    require "DBconnection.php";
    session_start();
    
    if(isset($_POST['adminUsername']) && isset($_POST['adminPassword'])){
        #$passengeremail = $_SESSION['passengerEmail'];
        
        $adminUsername = $_POST['adminUsername'];
        $adminPassword = $_POST['adminPassword'];

        $query = ("select adminUsername, adminPassword from admininfo where adminUsername='$adminUsername' and adminPassword = '$adminPassword'");
        $result = mysqli_query($connectDb, $query);
        if(mysqli_num_rows($result) === 1){
            #$_SESSION["passengerPassword"] = $_POST['passengerPassword'];    
            #header("Location: main-pag e-signed-in.html"); 
            header("Location: test.php");
            die();
            }else{
                header("Location: signin-admin.html");
            }

    }









?>