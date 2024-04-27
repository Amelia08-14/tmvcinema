<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tmv Cards</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
  <link rel="stylesheet" href="https://unpkg.com/css-gap-polyfill/dist/css-gap-polyfill.min.css">
  <link rel="icon" href="images/icon_tmv.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "header.html"; ?>

    <section class="card-banner">
        <img src="images/bannière.png" alt="Banner Image">
    </section>

    <section class="card-columns">
        <div class="card">
            <img src="images/TMV-CARD-SOLO.png" alt="Card 1 Image">
            <h3>Carte Solo</h3>
            <p class="price">00,00 DZD</p>
            <p class="subscription-type">Abonnement Annuel</p>
            <a href="#" class="subscribe-button">Je M'abonne</a>
        </div>

        <div class="card">
            <img src="images/TMV-CARD-FAMILLE.png" alt="Card 2 Image">
            <h3>Carte Famille</h3>
            <p class="price">00,00 DZD</p>
            <p class="subscription-type">Abonnement Annuel</p>
            <a href="#" class="subscribe-button">Je M'abonne</a>
        </div>

        <div class="card">
            <img src="images/TMV-CARD-DUO.png" alt="Card 3 Image">
            <h3>Carte Duo</h3>
            <p class="price">00,00 DZD</p>
            <p class="subscription-type">Abonnement Annuel</p>
            <a href="#" class="subscribe-button">Je M'abonne</a>
        </div>
    </section>

     <?php include_once "footer.html"; ?>
     <script src="disable-click.js"></script>
</body>
</html>
