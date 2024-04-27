<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programme Films</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
  <link rel="stylesheet" href="https://unpkg.com/css-gap-polyfill/dist/css-gap-polyfill.min.css">
  <link rel="icon" href="images/icon_tmv.png">
  <link rel="stylesheet" href="style.css">
</head>
<body class="filmbody">
     <?php include_once "header.html"; ?>
  <div class="calendar-container">
    <ul class="calendar-tabs">
    </ul>

    <div class="movie-listings">
    </div>
  </div>
  
    <?php include_once "footer.html"; ?>

  <script src="films.js" ></script>
  <script src="disable-click.js"></script>
</body>
</html>
