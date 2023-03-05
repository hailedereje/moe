<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {
        $values = [
        'title'=>"shoping mole",
        'subtitle' => "subtitle",
        'author'=>"developed by haile Dereje",
        'description'=>"this is the about page"

        ];
        return view('home.about')->with("data", $values);
    }
}
