<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Projet réalisé</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial, sans-serif;}

body{
    background:#f5f5f5;
    color:#111;
}

/* NAV */
nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 60px;
    background:#fff;
}

nav .btn{
    background:#111;
    color:#fff;
    padding:8px 18px;
    border-radius:20px;
}

/* HERO */
.hero{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:60px;
    background:#fff;
}

.hero-text{
    max-width:500px;
}

.hero h1{
    font-size:42px;
    margin-bottom:15px;
}

.hero p{
    color:#555;
    margin-bottom:20px;
}

.hero button{
    background: #37332f;
            border: none;
            padding: 10px 22px;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

      

.hero img{
    width:350px;
    border-radius:20px;
    object-fit:cover;
}

/* BIG CARD */
.big-card{
    margin:40px 60px;
    border-radius:25px;
    overflow:hidden;
    position:relative;
}

.big-card img{
    width:100%;
    height:300px;
    object-fit:cover;
}

.big-card .overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.4);
    color:#fff;
    display:flex;
    flex-direction:column;
    justify-content:center;
    padding:40px;
}

.big-card h2{
    font-size:30px;
    margin-bottom:15px;
}

.btn-custom {
    display: inline-block;
    background: #37332f;
    border: none;
    padding: 10px 22px;
    color: white;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.3s;
    text-decoration: none; /* enlève le bleu + soulignement */
}

.btn-custom:hover {
    opacity: 0.8;
}

button {
            background: #37332f;
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

/* TEAM */
.team{
    padding:40px 60px;
}

.team h3{
    margin-bottom:20px;
}

.team-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
    gap:20px;
}

.member{
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    text-align:center;
    padding-bottom:10px;
}

.member img{
    width:100%;
    height:180px;
    object-fit:cover;
}

/* ARTICLES */



.articles{
    padding:40px 60px;
}

.article{
    display:flex;
    gap:20px;
    background:#fff;
    border-radius:15px;
    margin-bottom:20px;
    overflow:hidden;
}

.article img{
    width:200px;
    object-fit:cover;
}

.article-content{
    padding:20px;
}

/* FOOTER */
footer{
    background:#111;
    color:#fff;
    padding:40px;
    margin-top:40px;
}

/* RESPONSIVE */
@media(max-width:900px){
    .hero{
        flex-direction:column;
        text-align:center;
    }

    .hero img{
        margin-top:10px;
        width:70%;
    }

    .article{
        flex-direction:column;
    }

    .article img{
        width:100%;
        height:200px;
    }
}
</style>
</head>

<body>

<nav>
    <h2>Porfolio</h2>
    <button>Contacter</button>
</nav>

<section class="hero">
    <div class="hero-text">
        <h1>Projet réaliser</h1>
        <p>Voici les projets que j'ai réalisés au cours de l'année .</p>
        <button>Accueil</button>
    </div>

    <img src="https://i.pinimg.com/1200x/90/73/74/907374231748636a1fc60025d5b6dcc0.jpg">
</section>

<section class="big-card">
    <img src="https://i.pinimg.com/1200x/c7/10/75/c710754a4f7e13de70e2b9dfec05ecf9.jpg">
    <div class="overlay">
        <h2>Let's grow your brand together!</h2>
       
    </div>
</section>

<section class="team">
    <h3>Projets réalisés au cours de l'année</h3>

    <div class="team-grid">
        <div class="member">
            <img src="https://i.pinimg.com/1200x/8a/63/63/8a6363c773e3e5e8eb63ca12de172e7e.jpg">
<p>CMS WordPress</p> <br>

<a href="https://oceanekalala.gefor.com/front_page/?kubio-preview=saved&kubio-random=Vmb0AxiCS-aGSJ1OkrLr"
   target="_blank"
   class="btn-custom">
   Voir
</a></div>
        

        <div class="member">
            <img src="https://i.pinimg.com/1200x/23/07/50/230750f99a060723e2ef562909b34eed.jpg">
            <p>Gefor Tourisme</p> <br><button>Voir</button> </div> 
      

        <div class="member">
            <img src="https://i.pinimg.com/736x/ca/bc/c2/cabcc21033c35994df311c6478ce2520.jpg">
            <p>Ticket GLPI</p> <br><button>Voir</button> </div>


       
    </div>
</section>


<section class="articles">
    <h3>Les projets réalisés</h3><br><br>

    <p>Durant cette année, j’ai réalisé différents projets liés au domaine de l’informatique. J’ai notamment
travaillé sur des projets orientés réseau, incluant la gestion des infrastructures, le câblage,
ainsi que des notions essentielles comme la sécurité informatique.</p><br><br>

    <div class="article">
        <img src="https://i.pinimg.com/736x/9f/99/3c/9f993c808fe17c0e7888393f2a4bcf74.jpg">
        <div class="article-content">
            <h4>Projet d'accès à Ubuntu via VirtualBox et SSH</h4><br><br>

            <p>Dans le cadre du projet professionnel, j’ai utilisé le logiciel VirtualBox afin de créer et exécuter une machine
virtuelle sous Ubuntu (Linux). Une fois la machine virtuelle lancée, j’ai configuré l’accès réseau, ce qui m’a permis
d’obtenir une adresse IP propre à la machine Ubuntu. Grâce à cette adresse IP, j’ai pu me connecter à la machine
virtuelle à distance en utilisant un accès SSH, permettant ainsi d’administrer et d’utiliser Ubuntu via un terminal
depuis mon ordinateur hôte.</p>
        </div>
    </div>

    <div class="article">
        <img src="https://i.pinimg.com/1200x/ad/3a/f8/ad3af8a503f70a5c48f23782fe5e77f2.jpg">
        <div class="article-content">
            <h4>Projet d'émargement</h4><br><br>
            <p>Durant ce projet, j’ai mis en place un système d’émargement électronique pour une entreprise. <br>
                Ce système permet de suivre les présences des employés de manière efficace et fiable.</p>
        </div>
    </div>

</section>

<footer>
    <p>© 2026 Portfolio Océane </p>
</footer>

</body>
</html>