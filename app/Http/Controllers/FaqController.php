<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        #second argument: 'faqs' => $faqs means create a variable called faqs in the view,
        #containing what my $faqs holds'
        return view('faqs.index', ['faqs' => $faqs]);
    }

}
