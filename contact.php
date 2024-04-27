<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactez Nous</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
  <link rel="stylesheet" href="https://unpkg.com/css-gap-polyfill/dist/css-gap-polyfill.min.css">
  <link rel="icon" href="images/icon_tmv.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "header.html"; ?>
        <section class="hero">
            <img src="images/banner-contact-us.jpg" alt="Contact Us Banner">
        </section>
        <h2 class="title-page-about">À propos de nous</h2>
        <section class="about-us">
            
            <div class="about-us-image">
                <img src="images/presentation.jpeg" alt="Company Image">
            </div>
            <div class="about-us-text">
               <p>Niché au sommet du centre commercial Garden City, TMV Cinemas se dresse en tant que précurseur des complexes cinématographiques de la capitale. Les cinéphiles et les familles trouveront leur bonheur dans les 3 salles, toutes équipées selon les normes internationales et abritant les dernières avancées en matière d’expérience sonore (Dolby 7.1) et visuelle (technologie de projection laser, qualité d’image 2K). De plus, le confort des sièges, spécialement conçu pour offrir une ergonomie exceptionnelle, ajoute une touche personnalisée à l’ensemble, promettant une expérience cinématographique qui marie le luxe à l’innovation.</p>
            </div>
        </section>

        <section class="contact-form">
            <h2>Contactez-nous</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </section>

        <section class="map">
            <h2>Notre localisation</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.8184270969837!2d2.949670175184437!3d36.750929172261124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb13138a5c28d%3A0xf8e810b55ff64e43!2sTMV%20Garden%20City!5e0!3m2!1sfr!2sdz!4v1713698822286!5m2!1sfr!2sdz" width="1400" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
 

   <?php include_once "footer.html"; ?>
    <script src="disable-click.js"></script>
</body>
</html>
