<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function IndexAction(){
    $name = 'Asma';
    $age = 22;
    $position = 'Full stack developer';
    $data = [
        'name' => $name,
        'age' => $age,
        'position' => $position
    ];

    return view('test', $data);
}
}
