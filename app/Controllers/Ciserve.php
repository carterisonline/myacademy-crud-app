<?php

namespace App\Controllers\Ciserve;

use CodeIgniter\Controller;

class Ciserve extends Controller
{

    public function index()
    {
        return view('\App\Views\welcome_message.php');
    }
}
