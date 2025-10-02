<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Website Clone</title>
    <link rel="stylesheet" href="css/style.css"><!-- Aplico css externo -->
    <link rel="shortcut icon" type="image/jpg" href="templete/img/netflix-flavicon.png" />
    <meta name="keywords" content="html,css,clon netflix" />
    <meta name="description" content="Clon de la página principal de Netflix España hecho con HTML y CSS para la asignatura de Lenguajes de Marcas del IES Fernando Wirtz" />
    <meta name="author" content="Cristina Correa" />
    <meta name="generator" content="VSCode" />
    <meta name="theme-color" content="#000" />

    <meta name="google" content="nositelinkssearchbox" />
    <meta name="google" content="notranslate" />
    <meta name="robots" content="index, nofollow" />


    <meta property="og:title" content="Clon de Netflix España con HTML y CSS">
    <meta property="og:description" content="Clon de la página principal de Netflix España hecho con HTML y CSS para la asignatura de Lenguajes de Marcas del IES Fernando Wirtz">
</head>
<body>
<!-- -------------------------HEADER ----------------------------------- -->
<div class="header"> <!-- Creamos la cabecera en donde van los primeros botones y el mensaje de bienvenida -->
    <nav>
        <img src="imgogo.png" alt="NetflixLogo" class="logo">
        <div>
            <button class="idioma">Español<img src="templete/img/down-icon.png"></button>
            <a href="cuenta.php">
                <button>Iniciar sesión</button>
            </a>
        </div>
    </nav>
    <div class="contenido-headder">
        <h1>Todas las películas y series que desees, y mucho más.</h1>
        <h3>Disfruta donde quieras. Cancela cuando quieras.</h3>
        <p>¿Quieres ver algo ya? Escribe tu dirección de correo para crear una suscripción a Netflix o reactivarla.</p>
        <form class="entrada-mail">
            <input type="email" placeholder="Dirección de correo" required>
            <button type="submit">Empezar</button>
        </form>
    </div>
</div>
<!-- --------------------------ELEMENTOS ------------------------------------ -->
<div class="elementos">
    <div class="fila">
        <div class="columna-texto">
            <h2>Disfruta de Netflix en tu TV.</h2>
            <p>Smart TV, Playstation, Xbox, Chromecast, Apple TV, reproductores Blu-ray y muchos más.</p>
        </div>
        <div class="columna-imagen">
            <img src="imgndex/elemento1.png" alt="imagen1">
        </div>
    </div>
</div>
<div class="elementos">
    <div class="fila">
        <div class="columna-imagen">
            <img src="imgndex/elemento2.png" alt="imagen2">
        </div>
        <div class="columna-texto">
            <h2>Disfruta en todas partes.</h2>
            <p>Reproduce en streaming todas las películas y series en tu móvil, tableta, ordenador y TV sin pagar más.</p>
        </div>
    </div>
</div>
<div class="elementos">
    <div class="fila">
        <div class="columna-texto">
            <h2>Crea perfiles infantiles.</h2>
            <p>Deja que los niños vivan aventuras con sus personajes favoritos en un espacio diseñado exclusivamente para ellos, gratis con tu suscripción.</p>
        </div>
        <div class="columna-imagen">
            <img src="imgndex/elemento3.png" alt="imagen3">
        </div>
    </div>
</div>
<div class="elementos">
    <div class="fila">
        <div class="columna-imagen">
            <img src="imgndex/elemento4.png" alt="imagen4">
        </div>
        <div class="columna-texto">
            <h2>Descárgate tus series favoritas para verlas sin conexión.</h2>
            <p>Disponible en todos los planes menos en el Básico con anuncios.</p>
        </div>
    </div>
</div>
<!-- ------------------------------INFORMACION---------------------------------------- -->
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album example</h1>
                <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p> <a href="#" class="btn btn-primary my-2">Main call to action</a> <a href="#" class="btn btn-secondary my-2">Secondary action</a> </p>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                                Thumbnail
                            </text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center"> <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> <div class="col"> <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> <div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="d-flex justify-content-between align-items-center"> <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> <div class="col"> <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> <div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="d-flex justify-content-between align-items-center"> <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> <div class="col"> <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> <div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="d-flex justify-content-between align-items-center"> <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> <div class="col"> <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> <div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="d-flex justify-content-between align-items-center"> <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> <div class="col"> <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> <div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="d-flex justify-content-between align-items-center"> <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> <div class="col"> <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> <div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="d-flex justify-content-between align-items-center"> <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> <div class="col"> <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> <div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="d-flex justify-content-between align-items-center"> <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> <div class="col"> <div class="card shadow-sm"> <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="225" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> <div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> <div class="d-flex justify-content-between align-items-center"> <div class="btn-group"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button> <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> </div> <small class="text-body-secondary">9 mins</small> </div> </div> </div> </div> </div> </div> </div> </main>
<!-- ------------------------------------FOOTER------------------------------------------------------ -->
<div class="footer">
    <h2>¿Preguntas? Llama al 900-759-106</h2>
    <div class="fila">
        <div class="columna">
            <a href="#faqs">Preguntas frecuentes</a>
            <a href="#">Inversores</a>
            <a href="#">Formas de ver</a>
            <a href="/info-corporativa.html">Informacion corporativa</a>
            <a href="/avisos-legales.html">Avisos legales</a>
        </div>
        <div class="columna">
            <a href="#">Centro de ayuda</a>
            <a href="#">Empleo</a>
            <a href="/terminos-de-uso.html">Términos de uso</a>
            <a href="mailto:help@netflix.es">Contáctanos</a>
            <a href="#">Solo en Netflix</a>
        </div>
        <div class="columna">
            <a href="/cuenta.html">Cuenta</a>
            <a href="#">Canjear tarjetas regalo</a>
            <a href="/privacidad.html">Privacidad</a>
            <a href="https://fast.com/es/">Prueba de velocidad</a>
        </div>
        <div class="columna">
            <a href="#">Zona de prensa</a>
            <a href="#">Comprar tarjetas regalo</a>
            <a href="#">Preferencias de cookies</a>
            <a href="#">Garantía legal</a>
        </div>
    </div>
    <button class="idioma">Español<img src="templete/img/down-icon.png"></button>
    <p class="texto-copyright">Netflix España</p>
</div>
</body>
</html>