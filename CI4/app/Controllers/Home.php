<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('section/header')
            .view('home_page')
            .view('section/footer');
    }
    public function pathshala(): string
    {
        return view('section/header')
            .view('home_page')
            .view('section/footer');
    }
}
