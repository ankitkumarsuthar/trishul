<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function home()
    {
        return view('front.home.index');  // Points to the 'resources/views/home.blade.php' view
    }
}
