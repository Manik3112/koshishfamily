<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamMember extends Model
{
    private $memberJson = '[
        {"memberId": "M15MANRAS", "name": "Manik Rastogi", "designation": "Member", "email": "manik3112@gmail.com", "photo": "", "bloodGroup": "A+", "joiningYear": 2015},
        {"memberId": "M21MRIJAI", "name": "Mridul Jaiswal", "designation": "Member", "email": "", "photo": "", "bloodGroup": "AB+", "joiningYear": 2021},
        {"memberId": "M12AMIRAJ", "name": "Amit Raj Singh", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2012},
        {"memberId": "M21UGERSA", "name": "Ugersain", "designation": "Member", "email": "", "photo": "", "bloodGroup": "", "joiningYear": 2021},
        {"memberId": "M19ANSSAX", "name": "Anshul Saxena", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B(+)", "joiningYear": 2019},
        {"memberId": "M23NIHVIR", "name": "Niharika Virmani", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2023},
        {"memberId": "M20NEHARY", "name": "Neha Arya", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2020},
        {"memberId": "M23YASJAT", "name": "Yashraj jat", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2023},
        {"memberId": "M23MOHABR", "name": "Mohamed Abrar Amjad", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2023},
        {"memberId": "M23PREDEE", "name": "Prerna deep", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+ve", "joiningYear": 2023},
        {"memberId": "M22DEVWAL", "name": "Devansh walia", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2022},
        {"memberId": "M22RASGUP", "name": "Rashi Gupta", "designation": "Member", "email": "", "photo": "", "bloodGroup": "AB-", "joiningYear": 2022},
        {"memberId": "M23PRIYAD", "name": "Prince yadav", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2023},
        {"memberId": "M19PRARAY", "name": "Prarthana Ray", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2019},
        {"memberId": "M23WANSIN", "name": "Wanshika singh", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+ve", "joiningYear": 2023},
        {"memberId": "M20SEJSIN", "name": "Sejal singh", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2020},
        {"memberId": "M23KADGAU", "name": "Kadambari gaur", "designation": "Member", "email": "", "photo": "", "bloodGroup": "", "joiningYear": 2023},
        {"memberId": "M19ABHSON", "name": "Abhishek Soni", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2019},
        {"memberId": "M20NETCHH", "name": "Netrika Chhettri", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2020},
        {"memberId": "M21MANCHA", "name": "Manisha Chauhan", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2021},
        {"memberId": "M20NETCHH", "name": "Netrika Chhettri", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2020},
        {"memberId": "M22DIKSIN", "name": "Diksha singh", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2022},
        {"memberId": "M19RIVBIS", "name": "Rivya Bisht", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2019},
        {"memberId": "M20SHRIJA", "name": "Shrija", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2020},
        {"memberId": "M21DHASHA", "name": "Dhairya Sharma", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2021},
        {"memberId": "M23HARGAR", "name": "Harshita Garg", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2023},
        {"memberId": "M23ARYCHA", "name": "Aryan Chaudhary", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2023},
        {"memberId": "M23RAHKUM", "name": "Rahul Kumar Soni", "designation": "Member", "email": "", "photo": "", "bloodGroup": "Ab-", "joiningYear": 2023},
        {"memberId": "M21ASISHE", "name": "Asif Sheikh (Deny)", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A neg (A-)", "joiningYear": 2021},
        {"memberId": "M20NEHARY", "name": "Neha Arya", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2020},
        {"memberId": "M21TANSHA", "name": "Tanya Sharma", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2021},
        {"memberId": "M20ADIAGA", "name": "Aditya Agarwal", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2020},
        {"memberId": "M23TANVAD", "name": "Tanvi Vadiyan", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2023},
        {"memberId": "M23MEHGOY", "name": "Mehak Goyal", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2023},
        {"memberId": "M23MEHGOY", "name": "Mehak Goyal", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2023},
        {"memberId": "M16SIDPAY", "name": "Siddharth payal", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2016},
        {"memberId": "M21UGERSA", "name": "Ugersain", "designation": "Member", "email": "", "photo": "", "bloodGroup": "", "joiningYear": 2021},
        {"memberId": "M22TEJRAJ", "name": "Tejaswa Raj Sargwan", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2022},
        {"memberId": "M20NIHKHA", "name": "Niharika Khanduri", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+ve", "joiningYear": 2020},
        {"memberId": "M23TANGAB", "name": "Tanvi Gaba", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+ve", "joiningYear": 2023},
        {"memberId": "M23TANGAB", "name": "Tanvi Gaba", "designation": "Member", "email": "", "photo": "", "bloodGroup": "0+", "joiningYear": 2023},
        {"memberId": "M23NIKSIN", "name": "Nikita Singh", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2023},
        {"memberId": "M21KIRMOU", "name": "Kiran Moura", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2021},
        {"memberId": "M22SONBHA", "name": "Sonali Bhatnagar", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2022},
        {"memberId": "M22AMRAFR", "name": "Amra afreen", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2022},
        {"memberId": "M22SHRJAI", "name": "Shreya Jain", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2022},
        {"memberId": "M14ANJSRI", "name": "Anjali Srivastava", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2014},
        {"memberId": "M17SHOBHA", "name": "Shobhit Bhatt", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2017},
        {"memberId": "M23VAIMAM", "name": "Vaishnavi Mamgain", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2023},
        {"memberId": "M19UTKGUP", "name": "Utkarsh Gupta", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O-", "joiningYear": 2019},
        {"memberId": "M23POOSIN", "name": "Poorvi Singh", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+ve", "joiningYear": 2023},
        {"memberId": "M23SUBHAN", "name": "Subhanshi", "designation": "Member", "email": "", "photo": "", "bloodGroup": "O+", "joiningYear": 2023},
        {"memberId": "M12SANKUM", "name": "Sandeep Kumar", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A-", "joiningYear": 2012},
        {"memberId": "M23PRIRAN", "name": "Priyanshu Ranjan Mistry", "designation": "Member", "email": "", "photo": "", "bloodGroup": "AB+", "joiningYear": 2023},
        {"memberId": "M17DHADHA", "name": "Dharmvir Dharmacharya", "designation": "Member", "email": "", "photo": "", "bloodGroup": "0+ve", "joiningYear": 2017},
        {"memberId": "M17DHADHA", "name": "Dharmvir Dharmacharya", "designation": "Member", "email": "", "photo": "", "bloodGroup": "0+ve", "joiningYear": 2017},
        {"memberId": "M23ABHRAI", "name": "Abhishek rai", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2023},
        {"memberId": "M21AARADH", "name": "Aaradhana", "designation": "Member", "email": "", "photo": "", "bloodGroup": "A+", "joiningYear": 2021},
        {"memberId": "M23UROFAT", "name": "Urooj Fatima", "designation": "Member", "email": "", "photo": "", "bloodGroup": "B+", "joiningYear": 2023}
        {"memberId": "M25SONJIN","name": "Sonika Jindal","designation": "Member","email": "aj7480039@gmail.com","photo": "","bloodGroup": "O+","joiningYear": 2025},
        {"memberId": "M25SUNBEH","name": "Sunsheel Behera","designation": "Member","email": "sunsheel0001@gmail.com","photo": "","bloodGroup": "O+","joiningYear": 2025},
        {"memberId": "M25SHASIN","name": "Shambhavi Sinha","designation": "Member","email": "shambhavisinha1306@gmail.com","photo": "","bloodGroup": "B+","joiningYear": 2025},
        {"memberId": "M25ANIRAJ","name": "Animesh Raj","designation": "Member","email": "7animeshrajmsd7@gmail.com","photo": "","bloodGroup": "B+","joiningYear": 2025},
        {"memberId": "M25RISBHA","name": "Rishabh Bhardwaj","designation": "Member","email": "rishabhvyas2980@gmail.com","photo": "","bloodGroup": "O+","joiningYear": 2025}
      ]
      ';
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
            'bloodGroup'=>'BLOOD GROUP NOT FOUND',
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
