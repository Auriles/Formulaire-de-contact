<?php

  $firstname = $name = $email = $phone = $message = "";
  $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
  $isSuccess = false;
  $emailTo = "auriles0404@gmail.com";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = verifyInput($_POST["firstname"]);
    $name = verifyInput($_POST["name"]);
    $email = verifyInput($_POST["email"]);
    $phone = verifyInput($_POST["phone"]);
    $message = verifyInput($_POST["message"]);
    $isSuccess = true;
    $emailText = "";

    if(empty($firstname)) {
      $firstnameError = " Je veux connaitre ton prénom !";
      $isSuccess = false;
    } else {
      $emailText .= "FirstName : $firstname\n";
    }

    if(empty($name)) {
      $nameError = " Et oui je veux tout savoir de toi, même ton nom !";
      $isSuccess = false;
    } else {
      $emailText .= "Name : $name\n";
    }

    if(!isEmail($email)) {
      $emailError = " Tu essayes de me rouler? C'est pas un email ça !";
      $isSuccess = false;
    } else {
      $emailText .= "Email : $email\n";
    }

    if(!isPhone($phone)) {
      $phoneError = " Que des chiffres et des espaces stp...";
      $isSuccess = false;
    } else {
      $emailText .= "Phone : $phone\n";
    }

    if(empty($message)) {
      $messageError = " Je veux recevoir quelque chose quand même !";
      $isSuccess = false;
    } else {
      $emailText .= "Message : $message\n";
    }

    if($isSuccess) {
      $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
      mail($emailTo, "Un message de votre site", $emailText, $headers);
      $firstname = $name = $email = $phone = $message = "";
    }

  }

  function isPhone($var) {
    return preg_match("/^[0-9 ]*$/", $var);
  }

  function isEmail($var) {
    return filter_var($var, FILTER_VALIDATE_EMAIL);
  }

  function verifyInput($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);

    return $var;
  }

?>
