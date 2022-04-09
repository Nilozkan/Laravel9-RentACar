<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }



    public function param($id, $number)
    {

       // echo "Paramater 1:", $id;
       // echo "<br>Paramater 2:", $number;
       // echo "<br>Sum Paramaters:", $id + $number;
        return view('home.test2',
        [
            'id' => $id,
            'number' => $number
        ]);

        }

}
