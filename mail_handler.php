<?php
	if(isset($_POST['email'])){
	    $message="";
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$email=$_POST['email'];

        if(isset($_POST['number'])){
            $number = $_POST['number'];
            if($number == ""){
                $number = "Not provided";
            }
        }

		if(isset($_POST['message'])){
            $message=$_POST['message'];
            $message=   "First Name : ".$firstName."\n".
                        "Last Name : ".$lastName."\n".
                        "Number : ".$number."\n\n".
                        "Message : "."\n\n".$message;
        }
        else if(isset($_POST['course'])){
            $course = $_POST['course'];
            $message="First Name : ".$firstName."\n"."Last Name : ".$lastName."\n"."Number : ".$number."\n"."Downloaded the following course outline :"."\n\n".$course;
        }
        else{
            $message="First Name : ".$firstName."\n"."Last Name : ".$lastName."Number :".$number."\n";
        }

		$to='info@axislearning.pk'; // Receiver Email ID, Replace with your email ID
		$subject='Contact Message';
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
            echo "true";
		}
		else{
            echo "false";
		}
	}
	else{
        echo "false";
    }
