<?php 

use Aura\Router\RouterContainer;

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();


//
// Rutas del proyecto
//
//El primer parametro es el nombre de la ruta, el segundo es la url amigable y 
//el tercero es el que hara el redireccionamiento en este caso usando controladores
//

//Lo que vas a cambiar es get por post
$map->post('estoEsElNombreDeLaRuta', '/stylom/proveedores/store', [ //Y esto: /stylom/proveedores/create es la url lo que va a salir arriba que no importa mucho por que lo que haremos sera guardar y redirigir pero igual hay que ponerlo

    'controller' => 'App\Controllers\SupplierController', //Esta es la direccion del controlador
    'action' => 'store' //Este es el nombre del metodo del controlador

]);


$map->get('web', '/stylom/nosotros', [

    'controller' => 'App\Controllers\WebController',
    'action' => 'about'

]);


$map->get('cart', '/stylom/cart', [

    'controller' => 'App\Controllers\WebController',
    'action' => 'cart'

]);


$map->get('contact', '/stylom/contacto', [

    'controller' => 'App\Controllers\WebController',
    'action' => 'contact'

]);

$map->get('product', '/stylom/productos', [

    'controller' => 'App\Controllers\WebController',
    'action' => 'product'

]);


$map->get('admin', '/stylom/admin', [

    'controller' => 'App\Controllers\AdminController',
    'action' => 'admin'

]);

$map->get('login', '/stylom/login', [

    'controller' => 'App\Controllers\WebController',
    'action' => 'login'

]);

$map->get('create', '/stylom/create', [

    'controller' => 'App\Controllers\WebController',
    'action' => 'create'

]);





//Las rutas van aquí pueden ser de tipo get, post, patch, delete (revisar documentación)



//
// Fin rutas del proyecto
//

$matcher = $routerContainer->getMatcher();
$route   = $matcher->match($request);


if($route){
    $handlerData = $route->handler;

    $controllerName = $handlerData['controller'];
    $actionName = $handlerData["action"];

    $controller = new $controllerName;
    $response = $controller->$actionName($request);

    echo $response->getBody(); 
}else{
    echo "No hay ruta encontrada 404";
}