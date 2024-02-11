<?php

namespace App\Controllers;
use App\Models\TeamMember;

class Home extends BaseController
{
    private $memberModel;
    public function __construct()
    {
        $this->memberModel = new TeamMember();
    }

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
    public function memberPage(): string
    {
        $id = $this->request->getGet('id');
        $memberData = $this->memberModel->getMemberData($id);
        return view('section/header')
            .view('team_page', $memberData)
            .view('section/footer');
    }
}
