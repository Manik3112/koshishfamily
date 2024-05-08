<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamMember extends Model
{
    private $memberJson = '[
      {
        "memberId": "KF/2015/0001",
        "name": "Manik Rastogi",
        "designation": "Member",
        "email": "manik3112@gmail.com",
        "photo": "",
        "bloodGroup": "A+"
      },
     {
       "memberId": "KF/2021/0002",
       "name": "Mridul Jaiswal",
       "designation": "Member",
       "bloodGroup": "AB+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2012/0003",
       "name": "Amit Raj Singh ",
       "designation": "Settler",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2021/0004",
       "name": "Ugersain",
       "designation": "Member",
       "bloodGroup": "",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2019/0005",
       "name": "Anshul Saxena ",
       "designation": "Member",
       "bloodGroup": "B(+)",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0006",
       "name": "Niharika Virmani",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2020/0007",
       "name": "Neha Arya ",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0008",
       "name": "Yashraj jat ",
       "designation": "Member ",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0009",
       "name": "Mohamed Abrar Amjad ",
       "designation": "Member ",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0010",
       "name": "Prerna deep",
       "designation": "Member",
       "bloodGroup": "B+ve",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2022/0011",
       "name": "Devansh walia",
       "designation": "Member website ",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2022/0012",
       "name": "Rashi Gupta ",
       "designation": "Member",
       "bloodGroup": "AB-",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0013",
       "name": "Prince yadav ",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2019/0014",
       "name": "Prarthana Ray",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0015",
       "name": "Wanshika singh ",
       "designation": "Member",
       "bloodGroup": "B+ve",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2020/0016",
       "name": "Sejal singh",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0017",
       "name": "Kadambari gaur",
       "designation": "Member",
       "bloodGroup": "",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2019/0018",
       "name": "Abhishek Soni",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2020/0019",
       "name": "Netrika Chhettri",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2021/0020",
       "name": "Manisha Chauhan",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2020/0021",
       "name": "Netrika Chhettri",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2022/0022",
       "name": "Diksha singh ",
       "designation": "Member ",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2019/0023",
       "name": "Rivya Bisht",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2020/0024",
       "name": "Shrija",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2021/0025",
       "name": "Dhairya Sharma ",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0026",
       "name": "Harshita Garg",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0027",
       "name": "Aryan Chaudhary",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0028",
       "name": "Rahul Kumar Soni",
       "designation": "Member",
       "bloodGroup": "Ab-",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2021/0029",
       "name": "Asif Sheikh (Deny)",
       "designation": "Member",
       "bloodGroup": "A neg (A-)",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2020/0030",
       "name": "Neha Arya ",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2021/0031",
       "name": "Tanya Sharma ",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2020/0032",
       "name": "Aditya Agarwal",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0033",
       "name": "Tanvi Vadiyan",
       "designation": "Member ",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0034",
       "name": "Mehak Goyal ",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0035",
       "name": "Mehak Goyal ",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2016/0036",
       "name": "Siddharth payal",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2021/0037",
       "name": "Ugersain",
       "designation": "Member",
       "bloodGroup": "",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2022/0038",
       "name": "Tejaswa Raj Sargwan",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2020/0039",
       "name": "Niharika Khanduri ",
       "designation": "Member",
       "bloodGroup": "O+ve",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0040",
       "name": "Tanvi Gaba",
       "designation": "Member",
       "bloodGroup": "O+ve",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0041",
       "name": "Tanvi Gaba ",
       "designation": "Member",
       "bloodGroup": "0+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0042",
       "name": "Nikita Singh",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2021/0043",
       "name": "Kiran Moura ",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2022/0044",
       "name": "Sonali Bhatnagar ",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2022/0045",
       "name": "Amra afreen",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2022/0046",
       "name": "Shreya Jain",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2014/0047",
       "name": "Anjali Srivastava ",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2017/0048",
       "name": "Shobhit Bhatt",
       "designation": "Member",
       "bloodGroup": "B+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0049",
       "name": "Vaishnavi Mamgain ",
       "designation": "Member ",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2019/0050",
       "name": "Utkarsh Gupta ",
       "designation": "Member ",
       "bloodGroup": "O-",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0051",
       "name": "Poorvi Singh",
       "designation": "Member",
       "bloodGroup": "A+ve",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0052",
       "name": "Subhanshi",
       "designation": "Member",
       "bloodGroup": "O+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2012/0053",
       "name": "Sandeep Kumar",
       "designation": "Member",
       "bloodGroup": "A-",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0054",
       "name": "Priyanshu Ranjan Mistry ",
       "designation": "Member",
       "bloodGroup": "AB+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2017/0055",
       "name": "Dharmvir Dharmacharya ",
       "designation": "Member",
       "bloodGroup": "0+ve",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2017/0056",
       "name": "Dharmvir Dharmacharya ",
       "designation": "Member ",
       "bloodGroup": "0+ve",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0057",
       "name": "Abhishek rai",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2021/0058",
       "name": "Aaradhana ",
       "designation": "Member",
       "bloodGroup": "A+",
       "email": "",
       "photo": ""
     },
     {
       "memberId": "KF/2023/0059",
       "name": "Urooj Fatima",
       "designation": "Member",
       "bloodGroup": "B+",
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
            'designation'=>'DESIGNATION_NOT_FOUND',
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
