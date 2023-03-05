<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/index.css" />
    <link rel="shortcut icon" href="./assets/images/" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <title>Portfolio - Kévin</title>
</head>
<body>
<nav>
        <a href="index.html"><div class="img-nav"><img src="./assets/images/logo-portfolio-white.png" alt=""></div></a>
        <ul class="nav-ul">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="about.html">A propos</a></li>
            <li><a href="creations.html">Mes créations</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="socials">
            <div class="social-btn"></div>
            <ul class="nav-ul-mobile">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="about.html">A propos</a></li>
                <li><a href="creations.html">Mes créations</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>
    <section class="grid">
        <div class="grid-infos">
            <?php if(isset($_GET["calculator"])) { ?>
            <h1>Calculatrice App Design</h1>
            <p>Cette calculatrice au design d'application native a été crée en utilisant HTML, CSS et Javascript. Elle est capable d'effectuer des calculs simples comme l'addition, la soustraction, la multiplication et la division. Le design est inspiré de celle sur Mac et iPhone d'Apple.</p>
            <ul class="filter-nav">
                <li class="filter html">HTML</li>
                <li class="filter css">CSS</li>
                <li class="filter js">JS</li>
            </ul>
            <ul class="creations-ul">
                <li><span>Contexte :</span> Au tout début de mon apprentissage du langage Javascript, ma copine rencontrait un problème : il n'existe aucune application par défaut de calculatrice sur iPad. En effet, il y en a une sur iPhone, une pour les Mac mais aucune pour les tablettes d'Apple. Comme si cela ne suffisait pas, les calculatrices sur l'appStore sont soit remplies de pub, payantes, ou mal pensées au niveau de l'UX, je décide donc avec le peu de connaissances sur ce langage nouveau pour moi, d'en créer une pour elle (C'est romantique, non ?).</li>
                <li><span>Approche méthodologique :</span> Pour ce projet, j'ai utilisé une approche itérative. J'ai commencé par créer une structure de base en HTML contenant uniquement les différentes touches de calculatrice, en CSS pour le design proche de la calculatrice iPhone d'Apple. Ensuite, j'ai ajouté du JavaScript concernant l'évenement des boutons. J'ai testé chaque fonctionnalité au fur et à mesure que je l'ajoutais pour m'assurer qu'elle fonctionnait correctement.</li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/calculator/"><div class="grid-img tablet"><img src="./assets/images/tab-calculator.png"></div></a>
        <div class="grid-infos">
            <?php } else if(isset($_GET["mongrandfrere"])) { ?>
            <h1>Projet MonGrandFrère</h1>
            <p>Mon plus gros projet à ce jour. MonGrandFrère est un projet que j'ai créé (avant d'être un site web) afin d'aider les étudiants à trouver leurs stages, alternance, et premier emploi.</p>
            <ul class="filter-nav">
                <li class="filter html">HTML</li>
                <li class="filter css">CSS</li>
                <li class="filter js">JS</li>
            </ul>
            <ul class="creations-ul">
                <li><span>Contexte :</span> Lors des années lycée, j'ai localisé un problème : On ne nous apprend jamais vraiment à l'école à réaliser un CV, écrire une lettre de motivation, gérer un entretien, ...etc Et quel type de personne en ont le plus besoin ? Les étudiants. J'ai donc réalisé ce projet et par la suite créé un site web support pour ce projet</li>
                <li><span>Approche méthodologique :</span> Pour ce site web, j'ai commencé par me renseigner sur des designs moderne et qui parle à ma cible étudiante. Une fois mon design, mes couleurs et mes polices d'écriture choisis, j'ai commencé la structure HTMl puis son style, et ensuite j'ai changé de page et ainsi de suite</li>
            </ul>
        </div>  
        <a target="_blank" href="https://kevin-legall.github.io/mongrandfrere.io/"><div class="grid-img"><img src="./assets/images/computer-mongrandfrere.png" alt=""></div></a>
        <div class="grid-infos">
            <?php } else if(isset($_GET["montagne"])) { ?>
            <h1>Bienvenue à la montagne</h1>
            <p>Un premier site utilisant Scss pour découvrir le compilateur</p>
            <ul class="filter-nav">
                <li class="filter html">HTML</li>
                <li class="filter css">CSS</li>
                <li class="filter sass">SCSS</li>
            </ul>
            <ul class="creations-ul">
                <li><span>Contexte :</span> Après CSS, vient Scss, un compilateur qui permet de mieux s'y retrouver dans son code et de structurer ses fichiers et dossier. Aujourd'hui je ne peux plus m'en passer pour mes projets</li>
                <li><span>Approche méthodologique :</span> Pour ce projet, j'ai commencé par initialiser mes dossiers et "préparer le terrain". Ensuite j'ai réalisé la structure HTMl, avec son design SCSS</li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/montagne.io/"><div class="grid-img"><img src="./assets/images/computer-montagne.png"></div></a>
        <div class="grid-infos">
            <?php } else if(isset($_GET["resto"])) { ?>
            <h1>Au resto</h1>
            <p>Ce site fut mon plus gros projet one page utilisant HTML et SCSS, j'ai mis une bonne après-midi pour le réaliser.</p>
            <ul class="filter-nav">
                <li class="filter html">HTML</li>
                <li class="filter css">CSS</li>
                <li class="filter sass">SCSS</li>
            </ul>
            <ul class="creations-ul">
                <li><span>Contexte :</span> J'avais besoin de défis et d'un plus gros projet quand j'ai vu la puissance de Scss pour générer le style d'une page. J'ai donc décidé de développer ce site dont le design provient d'internet</li>
                <li><span>Approche méthodologique :</span> Pour ce projet, j'ai commencé par l'initialisation des dossiers et fichiers Scss puis par la structure HTML puis par le style général de la page</li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/resto.io/"><div class="grid-img"><img src="./assets/images/computer-resto.png"></div></a>
        <div class="grid-infos">
            <?php } else if(isset($_GET["gamingcampus"])) { ?>
            <h1>Site web - Gaming Campus</h1>
            <p>Ce projet fut le deuxième après le projet Hélium et est également un site one page utilisant HTML et CSS</p>
            <ul class="filter-nav">
                <li class="filter html">HTML</li>
                <li class="filter css">CSS</li>
            </ul>
            <ul class="creations-ul">
                <li><span>Contexte :</span> Pour ce deuxième site, j'ai utilisé également HTML ET CSS pour le développer. Le design venait également d'internet et j'ai utilisé environ 1 heure pour le développer</li>
                <li><span>Approche méthodologique :</span> Pour ce projet, j'ai utilisé une approche itérative. J'ai commencé par créer une structure de base en HTML contenant uniquement les différentes touches de calculatrice, en CSS pour le design proche de la calculatrice iPhone d'Apple. Ensuite, j'ai ajouté du JavaScript concernant l'évenement des boutons. J'ai testé chaque fonctionnalité au fur et à mesure que je l'ajoutais pour m'assurer qu'elle fonctionnait correctement.</li>
                <li><span>Défis rencontrés :</span> Je n'ai pas rencontré de défis réel pour ce site si ce n'est le positionnement en css</li>
                <li><span>Résultats :</span> Le site internet a un design propre et moderne. Le résultat attendu est comme je le voulais</li>
                <li><span>Pour la suite :</span> Dans une version 2 de ce site, je pourrais probablement ajouter de l'interactivité avec des éléments qui bougent au rafraichissement de la page, des animations, etc</li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/gamingcampus.github.io/"><div class="grid-img"><img src="./assets/images/computer-gamingcampus.png"></div></a>
        <div class="grid-infos">
            <?php } else if(isset($_GET["helium"])) { ?>
            <h1>Site web - Hélium</h1>
            <p>Ce site web complètement designé par moi-même est un site one page et aussi mon premier site. Il a été conçu avec HTML et CSS.</p>
            <ul class="filter-nav">
                <li class="filter html">HTML</li>
                <li class="filter css">CSS</li>
            </ul>
            <ul class="creations-ul">
                <li><span>Contexte :</span> Au tout début de mon apprentissage des différents langages, j'ai commencé par HTML et CSS. Je voulais avoir un premier rendu de ce que j'étais capabale de faire et j'ai décidé de réaliser ce site.</li>
                <li><span>Approche méthodologique :</span> Pour ce projet, j'ai d'abord recherché un premier design sur différents sites comme Dribbble, Behance, etc pour avoir une maquette et en faire un site réel. Ensuite j'ai commencé par la structure en HTML et y ai ajouté du CSS pour le style</li>
                <li><span>Défis rencontrés :</span> Je n'ai pas rencontré tant de défis que ça pour le développement de ce site néanmoins ce fut un bon apprentissage pour les propriétés CSS flex afin de positionner les éléments proprement sur le flux</li>
                <li><span>Résultats :</span> Le site internet a un design propre et moderne.</li>
                <li><span>Pour la suite :</span> Dans une version 2 de ce site, je pourrais probablement ajouter de l'interactivité avec des éléments qui bougent au rafraichissement de la page, des animations, etc</li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/helium.github.io/"><div class="grid-img"><img src="./assets/images/computer-helium.png"></div></a>
        <?php } ?> 
    </section>
    <section class="grid">
        <div class="grid-infos">
            <?php if(isset($_GET["calculator"])) { ?>
            <ul class="creations-ul">
                <li><span>Défis rencontrés :</span> J'ai rencontrés quelques défis au cours de ce développement comme par exemple la gestion du nombre de chiffres pouvant s'afficher sur l'écran.</li>
                <li><span>Résultats :</span> L'application fonctionne correctement pour des usages basiques et permet à l'utilisateur d'effectuer des calculs avec une interface conviviale. Ce projet a notamment pu m'initier sur le langage Javascript</li>
                <li><span>Pour la suite :</span> Dans une version 2 de ce projet, j'ai dans l'idée de rajouter d'autres formes de calculs comme par exemple le rajout de parenthèse pour gérer la priorité des calculs, les puissances pour pouvoir raccourcir le nombre de chiffres à l'écran mais également ajouter la création d'espaces pour chaque groupe de 3 chiffres afin de faciliter l'expérience utilisateur.</li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/calculator/"><div class="grid-img tablet"><img src="./assets/images/tab-allongee-calculator.png"></div></a>
        <div class="grid-infos">
            <?php } else if(isset($_GET["mongrandfrere"])) { ?>
            <ul class="creations-ul">
                <li><span>Défis rencontrés :</span> Tout au long de ce projet j'ai rencontrés des défis notamment au niveau design pour avoir un site élégant. Ce fut également ma première grosse pâte sur Javascript. J'ai rencontré un gros problème lors de la création de mes pages produits et ai directemnent vu le frein d'utiliser HTML pour un site E-commerce. Les pages produits étant nombreuses, je me retrouvais avec une vingtaine de page HTML et de fichiers css correspondant.</li>
                <li><span>Résultats :</span> Le site internet a le design que je désirait. J'ai pris au total 1 mois pour réaliser ce site internet ainsi que toutes ses pages</li>
                <li><span>Pour la suite :</span> Dans une version 2 de ce site, j'aimerais créer un support pour que les étudiants puissent consulter nos vidéos directement sur le site, j'aimerais faire passer le site statique en dynamique avec PHP et MySQL. </li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/mongrandfrere.io/"><div class="grid-img mobile"><img src="./assets/images/phone-mongrandfrere.png"></div></a>
        <div class="grid-infos">
            <?php } else if(isset($_GET["montagne"])) { ?>
            <ul class="creations-ul">
                <li><span>Défis rencontrés :</span> Les principaux défis furent pour la gestion des dossiers et du fonctionnement de scss qui m'a fait perdre un peu de temps. POur le développement du site cela s'est fait doucement</li>
                <li><span>Résultats :</span> Le site internet a un design propre et moderne et l'organisation des fichiers Scss est une réussite</li>
                <li><span>Pour la suite :</span> Dans une version 2 de ce site, je pourrais probablement ajouter de l'interactivité avec des éléments qui bougent au rafraichissement de la page ne Javascript, des animations, etc</li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/montagne.io/"><div class="grid-img mobile"><img src="./assets/images/phone-montagne.png"></div></a>
        <div class="grid-infos">
            <?php } else if(isset($_GET["resto"])) { ?>
            <ul class="creations-ul">
                <li><span>Défis rencontrés :</span>Ce site pris sur Internet fut un gros défi, beaucoup d'éléments furent complexes à positionner comme je le souhaitait, j'ai utilisé parfois Flex parfois Grid pour respecter la maquette</li>
                <li><span>Résultats :</span> Le site internet a un design propre et moderne. </li>
                <li><span>Pour la suite :</span> Dans une version 2 de ce site, je pourrais probablement ajouter de l'interactivité au rafraichissement de la page, des animations, mais également faire fonctionner le formulaire en PHP et renvoyer les réponses dans une base de données.</li>
            </ul>
        </div>
        <a target="_blank" href="https://kevin-legall.github.io/resto.io/"><div class="grid-img mobile"><img src="./assets/images/phone-resto.png"></div></a>
        <?php } ?>
    </section>
    <footer>
        <h3>Vous désirez discuter de votre projet ?</h3>
        <h3>Contactez-moi dès maintenant 👇</h3>
        <a href="contact.html" class="primary-btn">Construisons votre projet ensemble</a>
        <p>Copyright © Kévin Le Gall | <span id="year"></span></p>
    </footer>
    <script src="./assets/js/script.js"></script>
</body>
</html>