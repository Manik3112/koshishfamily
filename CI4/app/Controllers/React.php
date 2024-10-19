<?php

namespace App\Controllers;

class React extends BaseController
{

    public function index(): string
    {
        $headerData = ['title' => 'Koshish Family', 'backLink' => '/' ];
        return view('components/header', $headerData)
            . view('components/common', )
            . view('react/demo', )
            . view('components/footer');
    }
}
