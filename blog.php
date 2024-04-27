<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualités</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
  <link rel="stylesheet" href="https://unpkg.com/css-gap-polyfill/dist/css-gap-polyfill.min.css">
  <link rel="icon" href="images/icon_tmv.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "header.html"; ?>
   
        <section class="blog-banner">
            <img src="images/banneractu.jpg" alt="Blog Banner">
        </section>

        <section class="blog-posts">
            <div class="article">
                <img src="images/article1.jpeg" alt="Article 1 Image">
                <h2>Tom Cruise court toujours sur le tournage de Mission : Impossible 8</h2>
                <span class="category">21 Avr</span>
                <button class="read-more-btn">Lire plus</button>
            </div>

            <div class="article">
                <img src="images/article2.jpeg" alt="Article 2 Image">
                <h2>« Nolan a été mon ange gardien » : Interstellar a sauvé la carrière de cette actrice</h2>
                <span class="category">01 Mar</span>
                <button class="read-more-btn">Lire plus</button>
            </div>

            <div class="article">
                <img src="images/article3.png" alt="Article 3 Image">
                <h2>DÉCOUVREZ LE FILM DE CLÔTURE DE LA 46E ÉDITION</h2>
                
                <span class="category">10 Jan</span>
                <button class="read-more-btn">Lire plus</button>
            </div>
        </section>

    <?php include_once "footer.html"; ?>

    <script src="script.js"></script>
    <script src="disable-click.js"></script>
</body>
</html>
