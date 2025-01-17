<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $view            = '';
    public $index           = '';

    public function __construct() {
        $this->view                 = 'front.blog.';
        $this->index                = 'front/blog/index.';                
    }

    public function index(Request $request)
    {
        try {
            $data = [];
            $data['title']          = \Lang::get($this->index.'meta_title_lbl');                       
            $data['lang']           = $this->index;
            $data['view']           = $this->view;                                
            return \View::make($this->view.'index', $data);            
        } catch (Exception $e) {
            
        }
    }
}
