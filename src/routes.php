<?php

// Classe@método

return [
    'GET' => [
        '/' => 'HomeController@index',
        '/usuarios' => 'UserController@index',
        '/contact' => 'ContactController@index'
    ],
    'POST' => [
        '/contact' => 'ContactController@store'
    ]
];

?>