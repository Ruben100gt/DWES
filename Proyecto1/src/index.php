<?php
include_once "vendor/autoload.php";
include_once "env.php";
include_once "auxiliar/funciones.php";


//Directiva para insertar o utilizar la clase RouteCollector
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use App\Controller\UserController;
use App\Controller\MovieController;
use App\Controller\SeriesController;

//instancia una variable de la clase RouteCollector
$router = new RouteCollector();

//Definir las rutas de mi aplicación

$router->get( '/',function(){
    return 'Estoy en la página principal';

});

//Rutas de Usuario CRUD
//Rutas de Servicio API REST
$router->get('/user',[UserController::class,'index']);
$router->get('user/{id}',[UserController::class,'show']);
$router->post('/user',[UserController::class,'store']);
$router->put('/user',[UserController::class,'update']);
$router->delete('/user',[UserController::class,'destroy']);

//Rutas asociadas a las vistas de usuario
//$router->get('/user/create',[UserController::class,'create']);
$router->get('user/{id}/edit',[UserController::class,'edit']);



//Rutas de Peliculas CRUD
//Rutas de Servicio API REST
$router->get('/movie',[MovieController::class,'index']);
$router->get('movie/{id}',[MovieController::class,'show']);
$router->post('/movie',[MovieController::class,'store']);
$router->put('/movie',[MovieController::class,'update']);
$router->delete('/movie',[MovieController::class,'destroy']);

//Rutas asociadas a las vistas de usuario
//$router->get('/movie/create',[MovieController::class,'create']);
$router->get('movie/{id}/edit',[MovieController::class,'edit']);





$router->get('administrador', function(){
    include_once "admin/views/welcome.php";
});
$router->get('/login', function(){
    include_once "admin/views/index.php";
});
$router->post('/login', function(){
    var_dump($_POST);
});

$router->delete('/pelicula/{id}', function($id){
    echo "La pelicula a borrar tiene el id $id";
});
$router->get('/cajas', function(){
    include_once "admin/views/seeCages.php";
});
$router->get('/calculodni', function(){
    $resultado ='';
    if(isset($_GET['dni'])){
        $resultado= calcularLetraDNI($_GET['dni']);
    }else{
        $resultado= "Parametro incorrecto";
    }
    include_once DIRECTORIO_VISTAS_ADMINISTRACION."calculo_letra_dni.php";
});

$router->get('/administrador/add-pelicula', function(){
    include_once "admin/views/add-pelicula.php";
});

$router->post('/pelicula', function(){
    var_dump($_POST);
    var_dump($_FILES);

    organizarImagen($_FILES['poster'], $_POST['titulo']);
});

$router->get('/pass', function(){
    echo "Se va a generar una contraseña</br>";
    var_dump($_GET);

    include_once "auxiliar/funciones.php";

    if (isset($_GET['num1'])){
        echo generatePassword($_GET['num1']);
    }else{
        echo "Tienes que pasarme un parámetro llamado num1";
    }


});

//Resolver la ruta que debemos cargar
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

}catch (HttpRouteNotFoundException $e){
    return include_once "admin/views/404.html";
}

// Print out the value returned from the dispatched function
echo $response;