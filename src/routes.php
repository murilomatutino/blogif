<?php

// Classe@método

return [
    'GET' => [
        '/' => 'HomeController@index',
        '/usuarios' => 'UserController@index',
        '/contact' => 'ContactController@index',
        '/login' => 'LoginController@index',
        '/logout' => 'LoginController@destroy',
        '/post/create' => 'PostController@index'
    ],
    'POST' => [
        '/contact' => 'ContactController@store',
        '/login' => 'LoginController@store',
        '/post/create' => 'PostController@store'
    ]
];

?>