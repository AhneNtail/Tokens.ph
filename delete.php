<?php
include("DBconnection.php");
session_start();
ob_start();


$passengerSerialNo = $_SESSION["serialNo"];



if(isset($_POST['delete'])){
	
	$passengerSerialNo = $_POST['serialNo'];
	$query = "DELETE FROM bookinginfo WHERE serialNo = '$passengerSerialNo'";
	$data = mysqli_query($connectDb,$query);
	
    if($data){

        echo '<script> alert("Record Deleted"); </script>';
        header("Location: test.php");
    }else{
        echo '<script> alert("Record Not Deleted"); </script>';
        header("Location: test.php");
}


$connectDb-> close();

}



?>