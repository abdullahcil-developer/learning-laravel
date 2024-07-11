<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    public function index() {
        $age = 35;

        $person = new stdClass();
        $person->age = $age;

       // return view("front.index", ['age' => $age]);
       //return view("front.index", compact("age"));
       //return view("front.index")->with('age', $age);
       //return view("front.index")->with(["age" => $age, "sercan" => "Recep"]);
       return view("front.index", compact("person"));
    }

    public function about() {
        
      return view("front.about");
    }

    public function contact() {
        return view("front.contact");
    }

   
}
