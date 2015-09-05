<?php

/* ROUTES */

$router = new AltoRouter;

$router->map('GET', '/', 'HomeController@index', 'home');
$router->map('GET', '/contact', 'HomeController@contact', 'contact');
$router->map('GET', '/posts/[i:id]', 'PostController@show', 'post-show');
$router->map('GET', '/posts/create', 'PostController@create', 'post-create');
$router->map('GET', '/posts/[i:id]/edit', 'PostController@edit', 'post-edit');
$router->map('POST', '/posts/[i:id]', 'PostController@update', 'post-update');
$router->map('POST', '/posts', 'PostController@store', 'post-store');

// Tambahkan route disini



$match = $router->match();

/**
 * Agar bisa diakses global, seperti pada view
 */
$GLOBALS['router'] = $router;

if(empty($match)) {
  header('HTTP/1.1 404 Not Found');
  view('404');
  exit();
}

list( $controller, $action ) = explode( '@', $match['target'] );

if ( is_callable(array($controller, $action)) ) {
    $obj = new $controller();

    call_user_func_array([$obj, $action], [$match['params']]);
} else {
    echo 'Error [Method Missing]: Cannot call <b>'.$controller.'@'.$action .'.</b>  ';
    //possibly throw a 404 error
}
