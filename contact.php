<?php
if (isset($_POST['email'])){

  // Here is the email to information
  $email_to="mfolvarska12@gmail.com";
  $email_subject="FROM WEBSITE"
  $email_from = "Maria Folvarska"

  //errorcode

  function died($error){
    echo "I am sorry, but there were error(s) found with the form you submitted.";
    echo "These errors appear below.<br/><br/>";
    echo $error. "<br/><br?>";
    echo "Please go back and fix these errors.<br/>";
    die();
  }

  //validation
    if(!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['message'])){
      died('We are sorry but there appears to be a problem with the form you
      submitted.');
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+[[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp, $email)){
      $error_message .= 'The email address you entered does not appear to
       be valid.<br/>';
        }
    $string_exp = "/^[A-Za-z.'-]+$/";
    if (!preg_math($string_exp, $name)){
      $error_message .= 'The name you entered does not appear to be valid.
      <br/>';
    }
    if(strlen($message) <2 ){
      $error_message .= 'The message you entered does not appear to be valid.
      <br/>';
      }
    if(strlen($error_message) > 0 ){
      died($error_message)
      }
      $email_message = "Form details below.\n\n";

    function clean_string($string){
      $bad = array("content-type", "bcc:", "to:", "cc:", "href");
      return str_replace($bad, "", $string);
      }
    $email_message .= "Name:" . clean_string($name) . "\n";
    $email_message .= "Email:" . clean_string($email) . "\n";
    $email_message .= "Message:" . clean_string($message) . "\n";

    //create email headers
    $headers = 'From: ' . $email_From . "\r\n". 'Reply-To:' . $email
    "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
 ?>
 <!--success message-->
 Thank you for contacting me. I will be in touch with you shortly. <br/>
 Please click <a href="index.html">here</a> to go back to the home page.
<?php
 }
?>
