<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salle 1 - Multicolors</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Space Grotesk' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="icon" href="images/icon_tmv.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php include_once "header.html"; ?>

        <section class="salle-banner">
            
            <img src="images/salle1.jpeg" alt="Salle de Cinema Banner">
        </section>

        <section class="salle-details">
            <div class="salle-image">
                <img src="images/salle1.jpeg" alt="Salle de Cinema Image">
            </div>

            <div class="salle-features">
                <ul>
                    <li>Nombre de Sièges: 54</li>
                    <li>Sièges PMR: 3</li>
                    <li>Horaires Flexibles</li>
                    <li>Idéale pour vos collaborateurs</li>
                    <li>Crown By JBL</li>
                    <li>Dolby CP950 (Installation 7.1)</li>
                </ul>

                <a href="pdf/Fiche-Technique-Salle-01.pdf" download="Fiche-Technique-Salle-01.pdf" class="download-button">Télécharger la Fiche Technique</a>
            </div>
        </section>

    <?php include_once "footer.html"; ?>

    <script src="script.js"></script>
    <script src="disable-click.js"></script>
</body>
</html>
