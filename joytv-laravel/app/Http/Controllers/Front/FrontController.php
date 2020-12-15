<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $url = "active";
        $events = Event::orderBy('created_at','desc')->take(1)->get();
        $projects = Project::orderBy('created_at','desc')->take(3)->get();
        $news = News::orderBy('created_at','desc')->take(3)->get();
        return view('front.general.index', compact('url','events','projects','news'));
    }

    public function about()
    {
        $url1 = "active";
        $events = Event::orderBy('created_at','desc')->take(1)->get();
        return view('front.general.about', compact('url1','events'));
    }

    public function services()
    {
        $url2 = "active";
        $events = Event::orderBy('created_at','desc')->take(1)->get();
        return view('front.general.services', compact('url2','events'));
    }
}
