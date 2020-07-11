<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yannick Biheul</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body>

    <?php include('header.php') ?>

    <!-- MAIN -->
    <main>

        <!-- ACCUEIL -->
        <section id="accueil">
            <div class="containerAccueil">
                <h1>Reconversion Professionnelle</h1>
                <p>Pilote de production > Développeur web</p>
                <div class="button">
                    <a href="#">Mon CV</a>
                </div>
            </div>
        </section>

        <!-- A PROPOS -->
        <section id="apropos">
            <div class="sectionTitle">
                <h2>À Propos de moi</h2>
                <div class="separation">
                    <span></span>
                </div>
            </div>
            <div class="containerApropos">
                <div class="moi">
                    <h3>Qui suis-je</h3>
                    <p>Je m’appelle Yannick Biheul, j’ai 38 ans. Je suis né et je vis à Quimper, dans le Finistère.</p>
                    <p>Je suis intéressé par les nouvelles technologies, les jeux vidéo, le cinéma, la musique et la lecture.</p>
                    <p>Je travaille en tant que pilote de production chez un équipementier automobile, et souhaite devenir développeur web.</p>
                </div>
                <div class="scolaire">
                    <h3>Parcours Scolaire</h3>
                    <p>BEP ICEF (Installateur Conseil en Équipement du Foyer option Électroménager)
                    en 1999.</p>
                    <p>BAC PRO MAEMC (Maintenance des Appareils et Équipements Ménagers et de Collectivités)
                    en 2001.</p>
                    <p>BEP ATV (Agent Technique de Vente) en 2002.</p>
                </div>
                <div class="experience">
                    <h3>Parcours Professionnel</h3>
                    <p>Quelques missions intérim dans des usines agro-alimentaire entre 2001 et 2002.</p>
                    <p>Vendeur chez Conforama à Quimper en 2002.</p>
                    <p>Opérateur de production chez Livbag à Pont de Buis de 2003 à aujourd'hui.</p>
                </div>
            </div>
        </section>


        <!-- PORTFOLIO -->
        <section id="portfolio">
            <div class="sectionTitle">
                <h2>Mon Portfolio</h2>
                <div class="separation">
                    <span></span>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section id="contact">
            <div class="sectionTitle">
                <h2>Contact</h2>
                <div class="separation">
                    <span></span>
                </div>
            </div>
            <div class="containerContact">
                <form action="cible.php" method="POST">
                    
                    <p class="element">
                        <label for="name">Votre nom</label>
                        <input type="text" name="name" id="name" required>
                    </p>
                    <p class="element">
                        <label for="mail">Votre mail</label>
                        <input type="email" name="mail" id="mail" required>
                    </p>
                    <p class="element">
                        <label for="message">Votre message</label>
                        <textarea name="message" id="message" required></textarea>
                    </p>
                    <p class="element">
                        <input type="submit" value="Envoyer" class="boutonEnvoyer">
                    </p>
                    
                </form>
            </div>
        </section>

    </main>

    <?php include('footer.php'); ?>

</body>
</html>