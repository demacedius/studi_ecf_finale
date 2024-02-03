<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
</head>

<body class="bg-primary text-secondary ">
    <nav class="md:flex md:items-center md:justify-between lg:max-w-[1024px] lg:mx-auto lg:pt-4">
        <div class="py-4 px-4 flex justify-between">
            <span class="text-2xl font-bold font-primary">Vparrot</span>
            <ion-icon class="text-secondary text-3xl md:hidden block cursor-pointer" name="menu"
                onclick="Menu(this)"></ion-icon>
        </div>
        <ul class="font-secondary font-semibold md:flex md:items-center bg-primary md:static absolute
            w-full md:w-auto left-0 md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="my-6 md:my-0"><a class="hover:text-cta md:text-lg  lg:text-xl duration-500 md:mx-4" href="#"
                    target="_blank">Acceuil</a></li>
            <li class="my-6 md:my-0"><a class="hover:text-cta md:text-lg  lg:text-xl duration-500 md:mx-4" href="#"
                    target="_blank">A propos</a></li>
            <li class="my-6 md:my-0"><a class="hover:text-cta md:text-lg  lg:text-xl duration-500 md:mx-4" href="#"
                    target="_blank">Nos voiture</a></li>
            <button class="bg-cta text-secondary font-bold font-primary p-2 rounded-full ">Ce connecter</button>
        </ul>
    </nav>
    <main class="lg:max-w-[1024px] lg:mx-auto lg:pt-4">
        <header class="md:flex md:items-center">
            <img src="./image/voiture_collection.jpg" alt="une voiture de collection dans un garage">
            <div class="max-lg:flex max-lg:flex-col max-lg:items-center">
                <h1 class="pt-4 text-center font-primary text-2xl font-bold">Bienvenue au garage Vincent Parrot</h1>
                <p class="pt-2 pl-4 font-secondary text-base font-light  ">Mécanicien et vente de véhicules d’occasion</p>
            </div>
        </header>
        <section class="pt-8 ">
            <h2 class="text-center font-primary font-bold text-3xl">Nos services</h2>
            <div class="md:grid md:grid-cols-2 lg:pt-16 lg:gap-8 lg:max-w-[1024px] lg:mx-auto">
                <div class="py-4">
                    <h3 class="text-xl font-bold font-primary">Mécanique</h3>
                    <p>Notre équipe de mécaniciens hautement qualifiés assure des réparations et des entretiens mécaniques exceptionnels. De la maintenance régulière aux réparations complexes, nous veillons à ce que votre véhicule fonctionne de manière optimale.</p>
                </div>
                <img class="w-full py-4" src="./image/mécanicien.jpg" alt="image d'un mécanicien de face travaillant dans une baie moteur">
                <img class="py-4 w-full"src="./image/phare.png" alt="image d'un mécanicien de face travaillant dans une baie moteur">
                <div class="py-4">
                    <h3 class="text-right text-xl font-bold font-primary">Carrosserie</h3>
                    <p class="text-right"> Redonnez à votre voiture son éclat d'origine avec notre service de réparation de carrosserie. Des dommages mineurs aux réparations majeures, notre équipe compétente utilise des techniques avancées pour restaurer l'apparence de votre véhicule.</p>
                </div>
                <div class="py-4">
                    <h3 class="text-xl font-bold font-primary">Vente de Véhicules</h3>
                    <p class=""> Explorez notre sélection de véhicules d'occasion de qualité. Avec des inspections approfondies et des garanties disponibles, nous offrons des options fiables pour répondre à vos besoins et garantir une expérience d'achat en toute confiance.</p>
                </div>
                <img class="w-full py-4" src="./image/avant_lomborghini.png" alt="">
            </div>
        </section>
    </main>
</body>

<script>
    function Menu(e) {
        let liste = document.querySelector('ul');
        e.name === "menu" ? (e.name = "close", liste.classList.add('top-[50px]'), liste.classList.add('opacity-100')) : (e.name = "menu", liste.classList.remove('top-[50px]'), liste.classList.remove('opacity-100'))
    }
</script>

</html>