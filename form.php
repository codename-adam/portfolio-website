<?php
//The value of this variable will be displayed if the followup_url is not specified.

	$followup_url = "thanks.html";

//so if you don't use the thanks.html file, this will be displayed instead

$default_response = "Thank you for contacting us.<br>We will respond to your email as soon as possible";

if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "adam.keller.design@gmail.com";
    $email_subject = "Someone wants to contact you!";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['email'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email_from = $_POST['email']; // required
	  $message = $_POST['message'];

     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     

    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "Last Name: ".clean_string($lastname)."\n";
	$email_message .= "Email: ".clean_string($email)."\n";
	// $email_message .= "Subject: ".clean_string($subject)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 

$thanks = true;

if($followup_url) 
	header("Location: $followup_url"); 

else 
	echo "$default_response";
}

if ($_POST['leaveblank'] != '' or $_POST['dontchange'] != 'http://') {
   // display message that the form submission was rejected
}
else {
   // accept form submission
}

?>