<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yannick Biheul</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>

<body>

    <div class="containerCible">
        <h1>Bonjour <?php echo htmlspecialchars($_POST['name']) ?> !</h1>
        <p>Votre message a bien été envoyé, merci !</p>
        <div class="button">
            <a href="index.php">Retour</a>
        </div>
    </div>
    
    
</body>

</html>