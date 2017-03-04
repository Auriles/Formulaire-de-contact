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
    <script src="js/script.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="divider"></div>
      <div class="heading">
        <h2>Contactez-moi</h2>
      </div>
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <form id="contact-form" action="" method="post" role="form">
            <div class="row">
              <!-- Prénom -->
              <div class="col-md-6">
                <label for="firstname">Prénom <span class="blue">*</span></label>
                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                <p class="comments"></p>
              </div>
              <!-- Nom -->
              <div class="col-md-6">
                <label for="name">Nom <span class="blue">*</span></label>
                <input id="name" type="text" name="name" class="form-control" placeholder="Votre nom" value="">
                <p class="comments"></p>
              </div>
              <!-- Email -->
              <div class="col-md-6">
                <label for="email">Email <span class="blue">*</span></label>
                <input id="email" type="email" name="email" class="form-control" placeholder="Votre email" value="">
                <p class="comments"></p>
              </div>
              <!-- Téléphone -->
              <div class="col-md-6">
                <label for="phone">Téléphone</label>
                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre numéro de téléphone" value="">
                <p class="comments"></p>
              </div>
              <!-- Message -->
              <div class="col-md-12">
                <label for="message">Message <span class="blue">*</span></label>
                <textarea name="message" id="message" class="form-control" cols="4" rows="4" placeholder="Votre message..."></textarea>
                <p class="comments"></p>
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
          </form>
        </div>
      </div>
    </div>
  </body>

</html>
