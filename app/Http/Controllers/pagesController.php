<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    //about method
    public function about() {
        $myName = 'Da COSTA';
        return view('pages.about', compact('myName'));
    }
    
    //commentcamarche method
    public function commentcamarche() {
        return view('pages.commentcamarche');
    }
}
