	<?php
         $n=$_POST['name'];
		 $e=$_POST['email'];
		 $p=$_POST['phone'];
		 $d=$_POST['date'];
		 $dp=$_POST['department'];
		 $do=$_POST['doctors'];
		 $msg=$_POST['message'];
		
		 $to = "bhatiahospital01@gmail.com";
         $subject = "Contact Enquiry";
         
         $message = "<b>Contact Enquiry.</b><br>";
         $message .="Sender Name: $n<br>";
		 $message .="Sender Email: $e<br>";
         $message .="Sender Phone: $p<br>";
		 $message .="Sender Date: $d<br>";	
         $message .="Sender Department: $dp<br>";
		 $message .="Sender Doctors: $do<br>";		 
		 $message .="$msg";
		 
         
       $header = "From:$n<info@bhatiahospital.in> \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            header("location:thanks-you.php?msg=Thanks");
         }else {
           header("location:thanks-you.php?msg=err");
         }
      ?>