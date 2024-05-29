<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Sellsy</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
            font-family: 'Roboto', sans-serif;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        body {
            margin: 0;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.9;
            z-index: -1;
        }

        .header {
            border-bottom: 1px solid #E2E8F0;
            background-color: rgba(34, 34, 34, 0.8);

        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 1.5rem;
        }

        .hamburger {
            display: none;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            transition: all 0.3s ease-in-out;
            background-color: #fff;
        }

        .nav-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-item {
            margin-left: 5rem;
        }

        .nav-link {
            font-size: 2rem;
            font-weight: 400;
            color: #fff;
        }

        .nav-link:hover {
            color: #482ff7;
        }

        .nav-logo {
            font-size: 3rem;
            font-weight: 500;
            color: #fff;
        }

        @media only screen and (max-width: 768px) {
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 5rem;
                flex-direction: column;
                background-color: #222;
                width: 100%;
                border-radius: 10px;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
            }

            .nav-link {
                color: #fff;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-item {
                margin: 2.5rem 0;
            }

            .hamburger {
                display: block;
                cursor: pointer;
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-slideInLeft {
    animation: slideInLeft 2s ease-in-out forwards;
    animation-delay: 0.3s; /* Pour retarder l'animation de l'image */

}
@keyframes slideRight {
    from {
        opacity: 0;
        transform: translateX(100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-slideRight {
    animation: slideRight 2s ease-in-out forwards;
    animation-delay: 0.3s; /* Pour retarder l'animation de l'image */
}
.animate-slideUp {
    animation: slideUp 4s ease-in-out forwards;
    animation-delay: 0.3s; /* Pour retarder l'animation de l'image */
    opacity: 0;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
</head>

<body class="bg-blue-50">

    <header class="header">
        <nav class="navbar">
            <a href="#" class="nav-logo">CRM</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="indexhome.php" class="nav-link">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a href="../index.php" class="nav-link">Essayer gratuitement</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <div class="container mx-auto py-12 px-4 flex flex-col lg:flex-row items-center mb-20">
     <div class="lg:w-3/4 lg:pr-8 text-center lg:text-left animate-slideInLeft">
        <h1 class="text-8xl font-bold text-blue-900 mb-4">Une seule plateforme digitale et bien plus qu'un CRM !</h1>
        <p class="text-4xl text-gray-700 mb-5">La suite CRM Sellsy associe tous les outils digitaux et tous les conseils nécessaires pour vous aider à faire de la croissance.</p>
        <div class="flex flex-col lg:flex-row gap-4 justify-center lg:justify-start">
           <a href="../index.php" class="bg-blue-600 text-white py-6 my-7 px-10 text-3xl rounded-lg shadow-lg hover:bg-blue-700">Essayer gratuitement</a>
        </div>
    </div>
    <div class="lg:w-1/2 mt-12 lg:mt-0 animate-slideRight ">
        <div class="relative">
            <img src="crm.jpg" alt="Team working" class="w-full rounded-lg shadow-lg">
        </div>
    </div>
</div>


<section class="py-12 text-2xl animate-slideUp" class="a">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center mb-8 fadeInUp text-4xl">... Et ils nous adorent !</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« J’étais un des premiers à utiliser l’application mobile. Simple et ludique. Enfin une application adaptée au métier d’agent commercial. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« C’est l’outil qu’il me fallait pour suivre et bien visualiser les clients et prospects, notamment grâce à Google Maps. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« Très bonne application, super pratique. Permet de répertorier ses clients sur une carte afin de n’oublier personne sur une tournée. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« Enfin un CRM pour les commerciaux de terrain. Simple qui me fait gagner du temps dans la gestion de mes contacts. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« Outil sur mesure pour les commerciaux itinérants. Intuitif, hyper simple et très très efficace ! Allez-y les yeux fermés ! »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« Je ne trouvais que des applications compliquées, impersonnelles et coûteuses, mais ça, c’était avant. Depuis, j’ai découvert Moovago : très simple, léger et intuitif sur PC et Smartphone. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« Enfin une application CRM faite pour simplifier le travail du commercial. Les principales fonctionnalités y sont. Le développeur est à l’écoute pour des compléments. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« L’APPLI DU COMMERCIAL IDÉAL. Pour ma part, après plusieurs essais de logiciels de suivi de clientèle, celui-ci s’avère être le plus efficace, simple et rapide d’utilisation. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« J’ai bénéficié d’une assistance avec un expert de l’application qui m’a donné beaucoup de son temps, le conseiller en question étant parfaitement compétent et pédagogique de plus. Bref, je recommande à 200% Moovago à tous points de vue. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg testimonial hover:shadow-xl fadeInUp">
                <p class="mb-4">« Super application, gain de temps pour la gestion des RDV ainsi que pour la gestion des différentes tâches. De plus, une grande disponibilité de leurs part en cas de besoin. Je recommande. »</p>
                <div class="text-yellow-500">
                    <span>★★★★★</span>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-8 fadeInUp">
           <a href="../index.php" class="bg-blue-600 text-white py-6 my-7 px-10 text-3xl rounded-lg shadow-lg hover:bg-blue-700">Essayer gratuitement</a>
        </div>
    </div>
</section>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        window.addEventListener('scroll', () => {
    const slideUpElements = document.querySelectorAll('.animate-slideUp');
    const triggerPoint = window.innerHeight * 0.9;

    slideUpElements.forEach((element) => {
        const elementTop = element.getBoundingClientRect().top;

        if (elementTop < triggerPoint) {
            element.classList.add('animate-slideUp');
        }
    });
});

    </script>
</body>

</html>