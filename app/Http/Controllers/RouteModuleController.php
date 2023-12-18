<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteModuleController extends Controller
{
    
    public function home(Request $request)
    {
        return view('pages.home');
    }
    public function contact(Request $request)
    {
        return view('pages.contact');
    }
    public function careers(Request $request)
    {
        return view('pages.careers');
    }
    public function about(Request $request)
    {
        return view('pages.about');
    }
    public function executive(Request $request)
    {
        return view('pages.executive');
    }
    public function governance(Request $request)
    {
        return view('pages.governance');
    }
    public function estmaReports(Request $request)
    {
        return view('pages.estmaReports');
    }
}
