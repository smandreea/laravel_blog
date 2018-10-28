<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Laravel tutorial!";
        /*return view('pages/index', compact(
            ('title')
        ));*/
        return view('pages/index')->with('title', $title);
    }
    public function about() {
        $title = "The about page";
        return view('pages/about')->with('title', $title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'subtitle' => 'This is the services page',
            'services' => ['Web dev', 'Design', 'Branding']
        );
        return view('pages/services')->with($data);
    }
}
