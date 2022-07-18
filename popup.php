<!--   DASIGAN, OBJERO, PINEDA, SUZUKI
       BSIT 3-2           
	   PASAHEROES, MAIN PAGE   -->

       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
       <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Main page</title>
       <link rel="stylesheet" href="popup.css">
       </head>
       
       <body>
           <div class="top">
           <img src="logowhite.png" alt="Logo">
           <h1> <a href="main-page-signed-in.html">PASAHEROES</a></h1>
           <h2>YOUR DREAM TRAVEL STARTS HERE</h2>
           
           <button class="button-2"> <a href="setting-logout.html">ACCOUNT</a></button>
           </div>
           
           <div class="below_top">
            <button class="button-3"> <a href="about signed in.html">ABOUT</a></button>
            <button class="button-4"> <a href="destinations signed in.html">OUR DESTINATIONS</a></button>
            <button class="button-5"> <a href="schedule signed in.html">BUS SCHEDULES</a></button>
            <button class="button-6"> <a href="reviews signed in.html">REVIEWS</a></button>
            <button class="button-7"> <a href="contact signed in.html">CONTACT</a></button>
		   </div>
		   <div class="outliners">
			   </div>
		   <?php
		    require "DBconnection.php";
		   
			$conn = mysqli_connect("localhost", "root","", "pasaheroesdb");
			if ($conn-> connect_error){
				die("Connection failed:". $conn-> connect_error);
			}
		   
		   session_start();
			ob_start();
				
			  
            $passengerSerialNo = $_SESSION["serialNo"];
            $passengerPassword = $_SESSION["passengerPassword"];
            $query = "SELECT origin, destination, bookingDate, passengercount, amount, fare, serialNo, passengerChange from bookinginfo 
                      where serialNo ='$passengerSerialNo' 
                      GROUP BY bookingDate DESC
                      LIMIT 1";
            $result = $connectDb-> query($query);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                     $passengerOrigin = $row['origin'];
                     $passengerDestination = $row['destination'];
                     $passengerBookingDate = $row['bookingDate'];
                     $passengerCount = $row['passengercount'];
                     $passengerAmount = $row['amount'];
                     $busFare = $row['fare'];
					 $change = $row['passengerChange'];
					 $SerialNo = $row['serialNo'];

			$sql = "SELECT passengerId, passengerName, phoneNumber, email, password from passengerinfo WHERE password = '$passengerPassword' LIMIT 1";
			$result1 = $conn-> query($sql);
	
			if($result1-> num_rows > 0){
			while($row = $result1-> fetch_assoc()){
			
				$passengerId = $row['passengerId'];
				$passengerName = $row['passengerName'];
				$_SESSION["passengerId"] = $passengerId;
				
           echo '<div class="content">';
           echo '<h1>PASAHEROES</h1>';
           echo '<h2>0956-793-3589/484-11-42</h2>';
           echo '<h3>pasaheroes@gmail.com</h3>';
           echo '<h4>PASSENGER RECEIPT</h4>';
		     echo '<h5>SERIAL NO.<span>	'.	  $SerialNo.'</span></h5>';
           echo '<h6>PASSENGER NO.<span>	'.	$passengerId.'</span></h6>';
		   
           echo '</div>';

           echo '<div class="content_bot">';
           echo '<h1>BOOKING BY:<span>	'.$passengerName.'</span></h1>';
           echo '<h2>ORIGIN:<span>	'.	$passengerOrigin.'</span></h2>';
           echo '<h3>DESTINATION:<span>	'.	$passengerDestination.'</span></h3>';
           echo '<h4>DEPARTURE DATE:<span>	'.	$passengerBookingDate.'</span></h4>';
           echo '<h5>PASSENGER COUNT:<span>		    '.	$passengerCount.'</span></h5>';
           echo '</div>';

           echo '<div class="content_right">';
           echo '<h1>TOTAL FARE:<span>	'.	($busFare*$passengerCount).'.00 PHP</span></h1>';
		   echo '<h2>MONEY AMOUNT:<span>	'.	$passengerAmount.'.00 PHP</span></h2>';
           echo '<h3>CHANGE:<span>	'.	$change.'.00 PHP</span></h3>';
		   
           echo '</div>';
					   }
            }
				}
			}
		   $conn-> close();
			?>

       </body>
       </html>
       