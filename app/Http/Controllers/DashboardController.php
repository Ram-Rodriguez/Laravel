<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() {
        $products = [
            [
                "name" => "Monsgeek M1W V3",
                "image" => "https://th.bing.com/th/id/OIP.HVtUPviA-YR3O_Iv-glj0wHaG3?rs=1&pid=ImgDetMain",
                "description" => "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer."
            ],
            [
                "name" => "WOB Rainy75",
                "image" => "https://th.bing.com/th/id/OIP.HVtUPviA-YR3O_Iv-glj0wHaG3?rs=1&pid=ImgDetMain",
                "description" => "This card has supporting text below as a natural lead-in to additional content."
            ],
            [
                "name" => "Monsgeek M1W V3",
                "image" => "https://th.bing.com/th/id/OIP.HVtUPviA-YR3O_Iv-glj0wHaG3?rs=1&pid=ImgDetMain",
                "description" => "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer."
            ],
            [
                "name" => "Monsgeek M1W V3",
                "image" => "https://th.bing.com/th/id/OIP.HVtUPviA-YR3O_Iv-glj0wHaG3?rs=1&pid=ImgDetMain",
                "description" => "This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer."
            ],
        ];
        return view('dashboard')->with("products", json_encode($products));
    }
}
