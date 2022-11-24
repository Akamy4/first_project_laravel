<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyUniversityController extends Controller
{
    public function univer(){
        return "UIB";
    }

    public function speciality(){
        return "ВТиПО";
    }
}
