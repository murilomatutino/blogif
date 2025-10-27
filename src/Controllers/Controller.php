<?php

namespace App\Controllers;

use League\Plates\Engine;
use App\Helpers\classes\Auth;
use App\Helpers\classes\Redirect;

abstract class Controller
{
    public function view(string $view, array $data = [])
    {
        // verifica se o usuário está logado
        if (!Auth::auth() && $view != 'Login')
        {
            Redirect::to('/login');
        }

        // mostra a página
        $views_path = dirname(__DIR__) . DIRECTORY_SEPARATOR . "Views";

        if(!file_exists($views_path . DIRECTORY_SEPARATOR . $view . ".php"))
        {
            die("A view {$view} não existe");
        }

        $templates = new Engine($views_path);
        echo $templates->render($view, $data);
    }
}

?>