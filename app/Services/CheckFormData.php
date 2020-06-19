<?php

namespace App\Services;

class CheckFormData
{
    public static function checkGender($contact)
    {
        if($contact->gender === 0){
            $contact->gender = '男性';
        }elseif($contact->gender === 1){
            $contact->gender = '女性';
        }
        return $contact;
    }

    public static function checkAge($contact)
    {
    switch($contact->age){
        case 1:
            $contact->age = '〜19歳';
        break;
        case 2:
            $contact->age = '20歳〜29歳';
        break;
        case 3:
            $contact->age = '30歳〜39歳';
        break;
        case 4:
            $contact->age = '40歳〜49歳';
        break;
        case 5:
            $contact->age = '50歳〜59歳';
        break;
        case 6:
            $contact->age = '60歳〜';
        break;
    }
        return $contact;
    }
}


