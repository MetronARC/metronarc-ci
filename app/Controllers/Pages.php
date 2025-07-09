<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home(): string
    {
        $data['active_page'] = 'home';
        return view('pages/home', $data);
    }

    public function cnc(): string
    {
        $data['active_page'] = 'cnc';
        return view('pages/cnc', $data);
    }
}