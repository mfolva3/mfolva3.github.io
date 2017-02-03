<?php
if (isset($_POST['email'])){

  // Here is the email to information
  $email_to="mfolvarska12@gmail.com";
  $email_subject="FROM WEBSITE"
  $email_from = "Maria Folvarska Web"

  //errorcode

  function died($error){
    echo "I am sorry, but there were error(s) found with the form you submitted.";
    echo "These erros appear below.<br/><br/>";
    echo $error. "<br/><br?>";
    echo "Please go back and fix these errors.<br/>";
    die();
  }

  //validation
    if(!isset($_POST['name'])) ||
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
       be valid.';
    }

}

 ?>
