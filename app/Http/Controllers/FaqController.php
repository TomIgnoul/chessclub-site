<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
    $faqs = Faqs::all();
    return view('faqs.index', ['faqs'=>$faqs]);
    }

}
