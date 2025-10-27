<?php

// Classe@método

return [
    'GET' => [
        '/' => 'HomeController@index',
        '/usuarios' => 'UserController@index',
        '/contact' => 'ContactController@index',
        '/login' => 'LoginController@index',
        '/logout' => 'LoginController@destroy'
    ],
    'POST' => [
        '/contact' => 'ContactController@store',
        '/login' => 'LoginController@store'
    ]
];

?>