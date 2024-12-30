<?php

namespace App\Controllers;

class React extends BaseController
{
    public function collection(): string
    {
        $headerData = ['title' => 'Collection & Distribution', 'backLink' => '/' ];
        return view('components/header', $headerData)
            . view('react/collection')
            . view('components/footer');
    }

    public function arts(): string
    {
        $headerData = ['title' => 'Arts & Crafts', 'backLink' => '/' ];
        return view('components/header', $headerData)
            . view('react/arts')
            . view('components/footer');
    }
    
    public function pathshala(): string
    {
        $headerData = ['title' => 'Pathshala', 'backLink' => '/' ];
        return view('components/header', $headerData)
            . view('react/pathshala')
            . view('components/footer');
    }
}
