<?php

  $firstname = $name = $email = $phone = $message = "";
  $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = verifyInput($_POST["firstname"]);
    $name = verifyInput($_POST["name"]);
    $email = verifyInput($_POST["email"]);
    $phone = verifyInput($_POST["phone"]);
    $message = verifyInput($_POST["message"]);

    if(empty($firstname)) {
      $firstnameError = " Je veux connaitre ton prénom !";
    }

    if(empty($name)) {
      $nameError = " Et oui je veux tout savoir de toi, même ton nom !";
    }

    if(empty($message)) {
      $messageError = " Je veux recevoir quelque chose quand même !";
    }

    if(!isEmail($email)) {
      $emailError = " Tu essayes de me rouler? C'est pas un email ça !";
    }

    if(!isPhone($phone)) {
      $phoneError = " Que des chiffres et des espaces stp...";
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

<!DOCTYPE html>

<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <title>Contactez-moi ! </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="divider"></div>
      <div class="heading">
        <h2>Contactez-moi</h2>
      </div>
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <form id="contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" role="form">
            <div class="row">
              <!-- Prénom -->
              <div class="col-md-6">
                <label for="firstname">Prénom <span class="blue">*</span></label>
                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
                <p class="comments"> <?php echo $firstnameError;?> </p>
              </div>
              <!-- Nom -->
              <div class="col-md-6">
                <label for="name">Nom <span class="blue">*</span></label>
                <input id="name" type="text" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>">
                <p class="comments"> <?php echo $nameError;?> </p>
              </div>
              <!-- Email -->
              <div class="col-md-6">
                <label for="email">Email <span class="blue">*</span></label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
                <p class="comments"> <?php echo $emailError;?> </p>
              </div>
              <!-- Téléphone -->
              <div class="col-md-6">
                <label for="phone">Téléphone</label>
                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre numéro de téléphone" value="<?php echo $phone; ?>">
                <p class="comments"> <?php echo $phoneError;?> </p>
              </div>
              <!-- Message -->
              <div class="col-md-12">
                <label for="message">Message <span class="blue">*</span></label>
                <textarea name="message" id="message" class="form-control" cols="4" rows="4" placeholder="Votre message..."> <?php echo $message; ?> </textarea>
                <p class="comments"> <?php echo $messageError;?> </p>
              </div>
              <!-- Informations Requises -->
              <div class="col-md-12">
                <p class="blue"><strong>* Ces informations sont requises !</strong></p>
              </div>
              <!-- Boutton d'envoi du formulaire -->
              <div class="col-md-12">
                <input type="submit" class="button1" value="Envoyer">
              </div>
            </div>
            <!-- Remerciements -->
            <p class="thank-you">Votre message à bien été envoyé. Merci de m'avoir contacté ! </p>
          </form>
        </div>
      </div>
    </div>
  </body>

</html>
