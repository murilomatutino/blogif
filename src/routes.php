<?php

// Classe@método

return [
    'GET' => [
        '/' => 'HomeController@index',
        '/usuarios' => 'UserController@index',
        '/contact' => 'ContactController@index',
        '/login' => 'LoginController@index'
    ],
    'POST' => [
        '/contact' => 'ContactController@store',
        '/login' => 'LoginController@store'
    ]
];

?>