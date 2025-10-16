<?php

namespace App\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        $this->view("Contact");
    }

    public function store($params)
    {
        var_dump($params);
        echo "Store do contact";
    }
}

?>  