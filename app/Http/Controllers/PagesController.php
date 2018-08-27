<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'This is the home page';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title = 'This is the about page';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'This is the services page',
            'services' => ['design', 'programming', 'a11y']
        ); 
        return view('pages.services')->with($data);
    }
}
