<?php

namespace Rajesh\Slider\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rajesh\Slider\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
       return view('slider::contact');
    }
}
