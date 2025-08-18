<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
   public function index(){

        $testimonials = Testimonial::latest()->get();

        return view('home', compact('testimonials'));
    
   }
}
