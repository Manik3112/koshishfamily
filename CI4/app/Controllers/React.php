<?php

namespace App\Controllers;

class React extends BaseController
{
    public function collection(): string
    {
        return view('components/header') . view('react/collection') . view('components/footer');
    }

    public function arts(): string
    {
        return view('components/header') . view('react/arts') . view('components/footer');
    }
    
    public function pathshala(): string
    {
        return view('components/header') . view('react/pathshala') . view('components/footer');
    }
}
