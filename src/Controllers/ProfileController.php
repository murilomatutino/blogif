<?php

namespace App\Controllers;

use App\Helpers\classes\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $session = Auth::get_session();
        $this->view("Profile", ['datas' => $session]);
    }
}
?>