<?php

namespace App\Controllers;

use CodeIgniter\Commands\Utilities\Publish;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }

    public function faq()
    {
        return view('pages/faq');
    }

    public function tentangkami()
    {
        return view('pages/tentangkami');
    }
    
    public function artikel()
    {
        return view('pages/artikel');
    }
}
