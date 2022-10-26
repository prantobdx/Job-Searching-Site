<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function addSlider()
    {
        return view( 'admin.home.slider.add' );
    }

    public function createSlider( Request $request )
    {
        $silder = new Slider();
        $silder = new Slider();
    }

}