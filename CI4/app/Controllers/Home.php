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
        $headerData = ['title' => 'Koshish Family', 'backLink' => '/' ];
        return view('components/header', $headerData)
            . view('home_page')
            . view('components/footer');
    }

    public function memberPage(): string
    {
        $id = $this->request->getGet('id');
        $memberData = $this->memberModel->getMemberData($id);
        $headerData = ['title' => 'Team Member Page', 'backLink' => '/' ];
        return view('section/header', $headerData)
            . view('team_page', $memberData)
            . view('section/footer');
    }

    public function pathshala(): string
    {
        $headerData = ['title' => 'Pathshala: Koshish Family', 'backLink' => '/' ];
        return view('section/header', $headerData)
            . view('department/pathshala')
            . view('section/footer');
    }

    public function collectdkure(): string
    {
        $headerData = ['title' => 'CollectdKure: Koshish Family', 'backLink' => '/' ];
        return view('section/header', $headerData)
            . view('department/collectdkure')
            . view('section/footer');
    }

    public function sales(): string
    {
        $headerData = ['title' => 'Sales: Koshish Family', 'backLink' => '/' ];
        return view('section/header', $headerData)
            . view('department/sales')
            . view('section/footer');
    }

    public function marketing(): string
    {
        $headerData = ['title' => 'Marketing: Koshish Family', 'backLink' => '/' ];
        return view('section/header', $headerData)
            . view('department/marketing')
            . view('section/footer');
    }

    public function finance(): string
    {
        $headerData = ['title' => 'Finance: Koshish Family', 'backLink' => '/' ];
        return view('section/header', $headerData)
            . view('department/finance')
            . view('section/footer');
    }

    public function artCraft(): string
    {
        $headerData = ['title' => 'Art and Craft: Koshish Family', 'backLink' => '/' ];
        return view('section/header', $headerData)
            . view('department/art-and-craft')
            . view('section/footer');
    }

    public function hr(): string
    {
        $headerData = ['title' => 'Human Resources: Koshish Family', 'backLink' => '/' ];
        return view('section/header', $headerData)
            . view('department/hr')
            . view('section/footer');
    }
}
