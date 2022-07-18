<?php

    require "DBconnection.php";
    session_start();
    ob_start();

    if(isset($_POST['delete'])){
        $passengerPassword = $_SESSION["passengerPassword"];
        $query = "DELETE FROM `passengerinfo` WHERE password = '$passengerPassword'";
        $query_run = mysqli_query($connectDb, $query);
        if(!$query_run){
            die('could not delete info kase '.$connectDb->error);
        }else{
            echo'<script type = "text/Javascript">';
			echo'alert("Account Deleted");';
            echo 'window.location.href ="signin-user.html";';
			echo'</script>';

            #header("Location: signin-user.html");
        }
    }
?>