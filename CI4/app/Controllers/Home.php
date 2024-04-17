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
    public function memberPage(): string
    {
        $id = $this->request->getGet('id');
        $memberData = $this->memberModel->getMemberData($id);
        return view('section/header')
            .view('team_page', $memberData)
            .view('section/footer');
    }
    public function pathshala(): string
    {
        return view('section/header')
            .view('department/pathshala')
            .view('section/footer');
    }
    public function collectdkure(): string
    {
        return view('section/header')
            .view('department/collectdkure')
            .view('section/footer');
    }
    public function sales(): string
    {
        return view('section/header')
            .view('department/sales')
            .view('section/footer');
    }
    public function marketing(): string
    {
        return view('section/header')
            .view('department/marketing')
            .view('section/footer');
    }
    public function finance(): string
    {
        return view('section/header')
            .view('department/finance')
            .view('section/footer');
    }
    public function artCraft(): string
    {
        return view('section/header')
            .view('department/art-and-craft')
            .view('section/footer');
    }
    public function hr(): string
    {
        return view('section/header')
            .view('department/hr')
            .view('section/footer');
    }
}
