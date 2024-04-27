<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Achats</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
  <link rel="stylesheet" href="https://unpkg.com/css-gap-polyfill/dist/css-gap-polyfill.min.css">
  <link rel="icon" href="images/icon_tmv.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
      <?php include_once "header.html"; ?>
  <h1>Achat de ticket</h1>

  <form action="confirmation.html" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br>

    <label for="film">Film :</label>
    <select id="film" name="film" required>
      <option value="">Sélectionnez un film</option>
      <option value="film1">Madame Web</option>
      <option value="film2">Godzila & Kong</option>
      <option value="film3">Imaginaire</option>
    </select><br>

    <label for="date">Date :</label>
    <input type="date" id="date" name="date" required><br>

    <label for="heure">Heure :</label>
    <select id="heure" name="heure" required>
      <option value="">Sélectionnez une heure</option>
      <option value="14h00">14h00</option>
      <option value="16h00">16h00</option>
      <option value="18h00">18h00</option>
      <option value="20h00">20h00</option>
    </select><br>

    <label for="nbTickets">Nombre de tickets :</label>
    <input type="number" id="nbTickets" name="nbTickets" min="1" value="1" required><br>

    <button type="submit">Valider</button>
  </form>
<?php include_once "footer.html"; ?>
</body>
</html>
