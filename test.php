<!--   DASIGAN, OBJERO, PINEDA, SUZUKI
       BSIT 3-2           
	   PASAHEROES, MAIN PAGE   -->

       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
       <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Main page</title>
       <link rel="stylesheet" href="admin.css">
       </head>
       
       <body>
           <div class="top">
           <img src="logowhite.png" alt="Logo">
           <h1> <a>PASAHEROES</a></h1>
           <h2>YOUR DREAM TRAVEL STARTS HERE</h2>
           
           <button class="button-2"> <a href="main page.html">LOG OUT</a></button>
               
           </div>
		   <div class="records">
			   <table>
			   
		   <tr>
			   <th>Passenger Id.</th>
			   <th>Origin</th>
			   <th>Destination</th>
			   <th>Booking Date</th>
			   <th>Passenger Count</th>
			   <th>Amount</th>
			   <th>Serial No.</th>
			   <th>Fare</th>
			   <th>Passenger Change</th>
			   <th></th>
			</tr>
		   
		   </div>
			<?php
			include("DBconnection.php");
			session_start();
			   	ob_start();
			   
			
	   		$query = "SELECT * from bookinginfo";
		 	$data = mysqli_query($connectDb,$query);
			   
			$passengerSerialNo = $_SESSION["serialNo"];
			 $_SESSION["serialNo"] = $passengerSerialNo;
			   
			   
			
		 
		   $total = mysqli_num_rows($data);
		   
		   if($total!=0){
			   while($result=mysqli_fetch_assoc($data)){
				   
				   
				   echo "
				   
				   <tr>
				   <td>".$result['passengerId']."</td>
				   <td>".$result['origin']."</td>
				   <td>".$result['destination']."</td>
				   <td>".$result['bookingDate']."</td>
				   <td>".$result['passengercount']."</td>
				   <td>".$result['amount']."</td>
				   <td>".$result['serialNo']."</td>
				   <td>".$result['fare']."</td>
				   <td>".$result['passengerChange']."</td>
				   <form action='delete.php' method='post'>
				   <input type='hidden' name='serialNo' value='".$result['serialNo']."'>
				   <td><input type='submit' name='delete' class='dltbtn' value='DELETE'></a></td>
				   </form>
				   </tr>
				   
				   ";
			   }
		   }
		else{
			echo '<script> alert("NO RECORDS FOUND"); </script>';
		}
			   $connectDb-> close();
		   
		   ?>
           
          
			   </table>
       </body>
       </html>
       