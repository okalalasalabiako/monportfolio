<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille technologique</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f5f5;
            color: #333;
        }

        /* NAVBAR */
        /* NAVBAR */
        /* NAVBAR */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* LOGO */
        nav h1 {
            font-weight: bold;
            color: #32281d;
        }

        /* MENU */
        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
        }

        /* LIENS */
        nav a {
            text-decoration: none;
            /* enlève le soulignement de base */
            color: #32281d;
            font-weight: 500;
            transition: 0.3s;
        }

        /* HOVER SIMPLE */
        nav a:hover {
            color: #c49a6c;
        }

        /* BOUTON */
        nav button {
            background: #c49a6c;
            border: none;
            padding: 10px 22px;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        nav button:hover {
            opacity: 0.8;
        }

        /* HERO */
        .hero {
            margin: 20px auto;
            width: 90%;
            height: 400px;
            border-radius: 20px;
            background: url('https://i.pinimg.com/1200x/2f/50/0f/2f500ffbbf4f2514240588f9f5b5f3a6.jpg') center/cover;
            display: flex;
            align-items: center;
            padding: 40px;
            color: white;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;

            border-radius: 20px;
        }

        .hero-text {
            position: relative;
            max-width: 400px;
        }

        .hero h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        /* SECTION */
        .section {
            width: 90%;
            margin: 40px auto;
            display: flex;
            gap: 20px;
        }

        /* CARD */
        .card {
            background: white;
            padding: 25px;
            border-radius: 20px;
            flex: 1;
        }

        .card img {
            width: 100%;
            border-radius: 15px;
        }

        .veille-list {
            list-style: none;
            padding: 0;
        }

        .veille-list li {
            background: #fff;
            margin: 10px 0;
            padding: 12px 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        /* STATS */
        .stats {
            background: #32281d;
            color: white;
        }

        .stats h2 {
            font-size: 40px;
        }

        /* TITLE */
        .title {
            width: 90%;
            margin: auto;
            font-size: 24px;
            font-weight: bold;
        }

        button {
            background: #c49a6c;
            border: none;
            padding: 10px 22px;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            opacity: 0.8;
        }

        .portfolio-card {
    background: white;
    padding: 30px;
    border-radius: 16px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: 0.3s;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
}

.portfolio-card h3 {
    margin-bottom: 15px;
}

/* grande carte */

.large {
    grid-column: span 1;
}

    </style>

</head>

<body>

    <!-- NAV -->
    <nav>
        <h1>Océane</h1>
        <div class="nav-links">
            <ul>

                <li><a href="oceporfio.php">Accueil</a></li>
                
                <li><a href="Projetpro.php">Projets professionnels</a></li>
                <li><a href="ProjetProfessionel.php">Contact</a></li>

            </ul>
        </div>
        <button>Contacter</button>
    </nav>

    <!-- HERO -->
    <div class="hero">
        <div class="hero-text">
            <h2>Veille technologique</h2>
            <p>Restez informé des dernières innovations et tendances du secteur.</p>
        </div>
    </div>

  <div class="title">Evolutions, innovations et tendances technologiques</div><br><br>

 <div class="portfolio-card">
                <h3>Veille technologique</h3>

                <p>
                    La veille technologique est une démarche organisée et continue qui consiste à surveiller, collecter, analyser et 
                    exploiter les informations liées aux évolutions techniques d’un domaine spécifique. Elle permet aux entreprises,
                    aux développeurs et aux professionnels du numérique de rester informés des innovations, des nouveaux outils,
                    des mises à jour logicielles et des tendances émergentes. Dans un secteur en constante évolution comme l’informatique,
                    cette pratique est essentielle pour anticiper les changements, adapter ses compétences et prendredes décisions 
                    stratégiques éclairées. Par exemple, suivre les évolutions de technologies comme Laravel, React ou Docker permet de 
                    choisir les solutions les plus adaptées à un projet et d’éviter l’obsolescence. La veille technologique repose sur 
                    l’utilisation de différents outils (flux RSS, newsletters, réseaux professionnels, plateformes spécialisées) et 
                    nécessite une sélection rigoureuse des sources afin de garantir la pertinence et la fiabilité des informations. 
                    Elle constitue ainsi un levier essentiel d’innovation, de compétitivité et d’adaptation dans un environnement 
                    technologique en perpétuel changement.
                </p><br><br>

                <button>En savoir plus</button>

            </div> <br><br>


    <!-- SECTION -->
    <div class="section">

        <div class="card stats">
            <h3>Objectifs</h3><br>
            <p>Dans le cadre de mon BTS SIO SLAM, je réalise une veille technologique afin de suivre les évolutions de l’intelligence artificielle
                et de la cybersécurité. Cela me permet de rester informé sur les innovations, les vulnérabilités et les nouvelles tendances du
                secteur numérique.</p><br><br>

            <h3>L'intelligence artificielle</h3><br>
            <p>L’intelligence artificielle (IA) désigne l’ensemble des techniques permettant à des machines de simuler certaines capacités humaines comme
                l’apprentissage, le raisonnement ou la prise de décision. Ce concept apparaît dès les années 1950, notamment avec les travaux d’Alan Turing,
                considéré comme l’un des précurseurs du domaine. Au fil des décennies, l’IA a connu plusieurs phases d’évolution, passant de simples
                programmes logiques à des systèmes complexes basés sur le machine learning et le deep learning. Aujourd’hui, grâce à l’augmentation
                de la puissance de calcul et à l’accès massif aux données, l’IA s’est largement développée et s’intègre dans de nombreux domaines comme
                la santé, la finance ou encore la cybersécurité. Elle représente un véritable bouleversement technologique et sociétal, transformant les
                métiers, les usages numériques et les interactions entre l’homme et la machine, tout en soulevant des enjeux éthiques et sécuritaires
                importants.</p>
            <br>


        </div>

        <div class="card">
            <h3>Feedly</h3> <br>
            <p>Dans un contexte de transformation numérique, je mène une veille technologique
                centrée sur l’intelligence artificielle et la cybersécurité afin d’identifier les
                innovations majeures et les nouvelles vulnérabilités.Cette démarche me permet de
                suivre l’évolution rapide des technologies, de comprendre les enjeux liés à la
                protection des données et d’anticiper les menaces émergentes. Pour cela, je m’appuie
                sur différents outils et sources d’information tels que la plateforme Feedly, la presse
                en ligne comme Le Parisien, le réseau social X (anciennement Twitter), ainsi que
                diverses newsletters spécialisées. Ces ressources me permettent d’obtenir une information
                variée, actualisée et pertinente, essentielle pour rester informé et développer mes
                compétences dans ces domaines en constante évolution. </p><br>
            <p>En utilisant Feedly, je peux organiser ma veille de manière efficace en regroupant les flux d’information provenant
                de différentes sources, ce qui me permet de suivre les dernières tendances et les innovations dans le domaine de
                l’intelligence artificielle et de la cybersécurité. De plus, en consultant régulièrement des sources fiables
                telles que Le Parisien et en suivant des experts sur X, je peux rester informé des développements récents,
                des nouvelles vulnérabilités et des meilleures pratiques en matière de sécurité numérique.
                Cette veille technologique est essentielle pour anticiper les risques, comprendre les enjeux
                actuels du numérique et adapter mes compétences aux évolutions rapides du secteur.</p> <br>

            <button>Feedly</button>


        </div>

        <div class="card">
            <img src="https://imjustcreative.com/wp-content/uploads/2020/04/Feedly-Logo-App-Icon-MockUp-Poster-The-Logo-Smith-2048x1488.jpg">
        <img src="https://i.pinimg.com/736x/05/62/89/0562899350dd5d07e5e90620c04a1f54.jpg">
        </div>

    </div>

    <div class="title">Programmes</div><br><br>

    <ul class="veille-list">

        <li>Ma veille technologique porte sur l’intelligence artificielle et la cybersécurité,<br>
            dans le but d’analyser les nouvelles tendances, d’anticiper les risques et de comprendre <br>
            les enjeux actuels du numérique.<br>
        </li>

    </ul>

    <div class="section">

        <div class="card">
            <img src="https://i.pinimg.com/736x/ad/89/42/ad89425656360d1b7faad649411b249b.jpg">
            
        </div>

        <div class="card">
            <h3>La cybersécurité</h3><br><br>
            <p>La cybersécurité désigne l’ensemble des pratiques, technologies et processus mis en place
                pour protéger les systèmes informatiques, les réseaux et les données contre les cyberattaques,
                les intrusions ou les vols d’informations. Avec le développement d’Internet et des technologies
                numériques, les risques se sont multipliés, rendant la cybersécurité essentielle dans tous les
                secteurs. Elle englobe plusieurs domaines comme la protection des données, la sécurité des
                réseaux, la gestion des accès ou encore la détection des menaces. Aujourd’hui, les cyberattaques
                (phishing, ransomware, piratage) sont de plus en plus sophistiquées, ce qui pousse les entreprises
                et les organisations à renforcer leurs systèmes de défense. La cybersécurité représente donc un
                enjeu majeur, car elle permet de garantir la confidentialité, l’intégrité et la disponibilité
                des informations, tout en protégeant les utilisateurs et les infrastructures numériques.
            </p>
        </div>

    </div>

    <script>
        // Petit effet au scroll
        window.addEventListener("scroll", () => {
            document.querySelectorAll(".card").forEach(card => {
                let top = card.getBoundingClientRect().top;
                if (top < window.innerHeight - 50) {
                    card.style.transform = "translateY(0)";
                    card.style.opacity = "1";
                }
            });
        });

        // Animation initiale
        document.querySelectorAll(".card").forEach(card => {
            card.style.transform = "translateY(50px)";
            card.style.opacity = "0";
            card.style.transition = "0.6s";
        });
    </script>

</body>

</html>