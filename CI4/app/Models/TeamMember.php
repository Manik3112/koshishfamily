<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamMember extends Model
{
    private $memberJson = '[
        {
          "memberId": "KF/2015/0001",
          "name": "Manik Rastogi",
          "phone": "9808136139",
          "email": "manik3112@gmail.com",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0002",
          "name": "Abhishek rai ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0003",
          "name": "Abrad amjad ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0004",
          "name": "Amra ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0005",
          "name": "Aryan ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0006",
          "name": "Avantika ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0007",
          "name": "Aditya ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0008",
          "name": "Asif ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0009",
          "name": "Diksha ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0010",
          "name": "Dhairya ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0011",
          "name": "Kiran ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0012",
          "name": "Mridul ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0013",
          "name": "Rivya ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0014",
          "name": "Amit ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0015",
          "name": "Anjali ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0016",
          "name": "Anshul ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0017",
          "name": "Aradhna ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0018",
          "name": "Dharma ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0019",
          "name": "Neha ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0020",
          "name": "Netrika ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0021",
          "name": "Niharika ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0022",
          "name": "Prarthana ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0023",
          "name": "Shobhit ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0024",
          "name": "Harshit rajvanshi",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0025",
          "name": "Utkarsh ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0026",
          "name": "Harshita ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0027",
          "name": "Kadambari ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0028",
          "name": "Abhishek soni ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0029",
          "name": "Harsh ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0030",
          "name": "Prankul ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0031",
          "name": "Shrija ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0032",
          "name": "Ugersain ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0033",
          "name": "Mehek ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0034",
          "name": "Nandini ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0035",
          "name": "Neha ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0036",
          "name": "Nikita ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0037",
          "name": "Niharika",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0038",
          "name": "Poorvi ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0039",
          "name": "Prerna ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0040",
          "name": "Prince ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0041",
          "name": "Priya ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0042",
          "name": "Priyanshu ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0043",
          "name": "Qasim ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0044",
          "name": "Rahul ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0045",
          "name": "Rashi ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0046",
          "name": "Rohit ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0047",
          "name": "Sandeep",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0048",
          "name": "Sejal ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0049",
          "name": "Shreya ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0050",
          "name": "Siddharth ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0051",
          "name": "Sonali ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0052",
          "name": "Subhanshi ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0053",
          "name": "Tanvi ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0054",
          "name": "Tanvi gaba ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0055",
          "name": "Tanya ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0056",
          "name": "Tejaswa ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0057",
          "name": "Urooj ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0058",
          "name": "Vaishnavi ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0059",
          "name": "Vanshika ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0060",
          "name": "Yashraj ",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0061",
          "name": "Devansh",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0062",
          "name": "Abhijeet",
          "phone": "",
          "email": "",
          "photo": ""
        },
        {
          "memberId": "KF/2015/0063",
          "name": "Manisha ",
          "phone": "",
          "email": "",
          "photo": ""
        }
       ]';

    private $memberArray;

    public function __construct()
    {
        $this->memberArray = json_decode($this->memberJson, true);
    }

    public function getMemberData($id) {
        $response = [
            'memberId'=>'INVALID MEMBER ID',
            'name'=>'NAME NOT FOUND',
            'phone'=>'PHONE NOT FOUND',
            'email'=>'EMAIL NOT FOUND',
        ];
        foreach ($this->memberArray as $singleMember) {
            if($singleMember['memberId'] === $id) {
                $response = $singleMember;
                break;
            }
        }
        return $response;
    }
}
