<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TMV CINEMA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="icon" href="images/icon_tmv.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "header.html"; ?>

  <section class="slider">
    <div class="slider-wrapper">
      <div class="slide active">
        <img src="images/dune2.jpg" alt="Slide 1 Image">
        <div class="slide-content">
          <img src="images/dune2.jpg" alt="Slide 1 Miniature Image">
          <div class="text-container">
            <h1>Slide 1 Title</h1>
            <p>Slide 1 description</p>
          </div>
          <div class="play-icon">
            <i class="fa fa-play-circle" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="slide">
        <img src="images/MWEB_FB_Header.jpg" alt="Slide 2 Image">
        <div class="slide-content">
          <img src="images/MWEB_FB_Header.jpg" alt="Slide 2 Miniature Image">
          <div class="text-container">
            <h1>Slide 1 Title</h1>
            <p>Slide 1 description</p>
          </div>
          <div class="play-icon">
            <i class="fa fa-play-circle" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-controls">
      <div class="prev-arrow">
        <i class="fa-solid fa-circle-chevron-left"></i>
      </div>
      <div class="next-arrow">
        <i class="fa-solid fa-circle-chevron-right"></i>
      </div>
    </div>
  </section>

  <section class="featured-movies">
    <h2>Films en Vedette</h2>
    <div class="movies-container">
      <div class="movie-item">
        <img src="images/argyle.webp" alt="Movie 1 poster">
        <div class="movie-info-band">
          <h3>ARGYLLE</h3>
          <div class="movie-details">
            <span class="category">Action</span> - 180 Mins
          </div>
          <div class="movie-buttons">
            <button class="trailer-button">Voir la Bande Annonce</button>
            <button class="movie-page-button">Achetez Votre Ticket</button>
          </div>
        </div>
      </div>
      
      <div class="movie-item">
        <img src="images/dune.webp" alt="Movie 1 poster">
        <div class="movie-info-band">
          <h3>Dune 2</h3>
          <div class="movie-details">
            <span class="category">Action</span> - 180 Mins
          </div>
          <div class="movie-buttons">
            <button class="trailer-button">Voir la Bande Annonce</button>
            <button class="movie-page-button">Achetez Votre Ticket</button>
          </div>
        </div>
      </div>

      <div class="movie-item">
        <img src="images/mme_web.jpeg" alt="Movie 2 poster">
        <div class="movie-info-band">
          <h3>Madame Web</h3>
          <div class="movie-details">
            <span class="category">Action</span> - 180 Mins
          </div>
          <div class="movie-buttons">
            <button class="trailer-button">Voir la Bande Annonce</button>
            <button class="movie-page-button">Achetez Votre Ticket</button>
          </div>
        </div>
      </div>
      </div>
</section>
  
   <section class="upcoming-movies">
    <h2>Nos Prochaines Sorties</h2>
    <div class="moviescom-container">
      <div class="moviecom-item">
        <img src="images/almachi.jpeg" alt="Movie 1 poster">
        <div class="moviecom-info-band">
          <h3>Al Machi</h3>
          <div class="moviecom-details">
            <span class="comcategory">Comédie</span> 
          </div>
          <div class="moviecom-buttons">
           <button class="morecom-button">En Savoir Plus</button>
          </div>
        </div>
      </div>
      
      <div class="moviecom-item">
        <img src="images/Godvskong.webp" alt="Movie 1 poster">
        <div class="moviecom-info-band">
          <h3>Godzilla Vs Kong</h3>
          <div class="moviecom-details">
            <span class="comcategory">Action</span>
          </div>
          <div class="moviecom-buttons">
            <button class="morecom-button">En Savoir Plus</button>
          </div>
        </div>
      </div>

      <div class="moviecom-item">
        <img src="images/imaginaire.jpeg" alt="Movie 2 poster">
        <div class="moviecom-info-band">
          <h3>Imaginaire</h3>
          <div class="moviecom-details">
            <span class="comcategory">Fantastique</span>
          </div>
          <div class="moviecom-buttons">
            <button class="morecom-button">En Savoir Plus</button>
          </div>
        </div>
      </div>
      </div>
</section>
  <?php include_once "footer.html"; ?>

  
  <script src="script.js" defer></script>
  <script src="disable-click.js"></script>
</body>
</html>
