<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address







  

  // echo "<script type='text/javascript'>alert('Starting');</script>";
  // session_start();
  // echo "<script type='text/javascript'>alert('Started');</script>";
  //   $status = '';
  //   if ( isset($_POST['captcha']) && ($_POST['captcha']!="") )
  //   {
  //   // Validation: Checking entered captcha code with the generated captcha code
  //   if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0)
  //   {
  //   // Note: the captcha code is compared case insensitively.
  //   // if you want case sensitive match, update the check above to strcmp()
  //   $status = "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#FF0000;'>Entered captcha code does not match! Kindly try again.</span></p>";
  //   }
  //   else
  //   {
    
  //     $receiving_email_address = 'soumick.chatterjee@ovgu.de';
  //     $name = $_POST['name'];
  //     $visitor_email = $_POST['email'];
  //     $subject = "[ISACT 2022] Web Contact Form: " . $_POST['subject'];
  //     $message = $name . " submitted a message on the website's contact form.  \r\n Email: " . $visitor_email . "  \r\n Message:  \r\n" . $_POST['message'];
    
  //     $headers = "From: $receiving_email_address \r\n";
    
  //     $headers .= "Reply-To: $visitor_email \r\n";
    
  //     mail($receiving_email_address,$subject,$message,$headers);
  //     $status = "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#FF0000;'>Your query has been forwarded to us! We will get back to you shortly!</span></p>";
  //     }


  

  
  // echo "OK";

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = "[ISACT 2021] Web Contact Form: " + $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
