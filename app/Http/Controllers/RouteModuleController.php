<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteModuleController extends Controller
{
    
    public function home(Request $request)
    {
        $projects = ['Aboduabo', 'kubi', 'keyhole', 'betenase', 'fahiakoba', 'ashanti ii project'];
        return view('pages.home', compact('projects'));
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
    public function directors(Request $request)
    {
        return view('pages.directors');
    }
    public function estmaReports(Request $request)
    {
        return view('pages.estmaReports');
    }
    public function test(Request $request)
    {
        return view('pages.test');
    }
    public function operations(Request $request, $id)
    {
        $name = '';
        if($id == 'bibiani') {
            $name = "Bibiani Gold Mine";
        }
        if($id == 'chirano') {
            $name = "Chirano Gold Mine";
        }
        
        return view('pages.operations.bibiani', compact('name'));
    }
    public function projects(Request $request)
    {
        $projects = ['Aboduabo', 'kubi', 'keyhole', 'betenase', 'fahiakoba', 'ashanti ii project'];
        // $projects = [
        //     ['name' => 'Aboduabo', 'image' => '/assets/images/projects/'.strtolower()]
        // ]
        return view('pages.projects', compact('projects'));
    }
    public function projectSingle(Request $request, $id)
    {
        $projects = ['aboduabo', 'kubi', 'keyhole', 'betenase', 'fahiakoba', 'ashanti ii project'];
        $name = str_replace('-', ' ', strtolower($id));
        if (in_array($name, $projects)) {
            return view('pages.projects.kubi', compact('name'));
        }
        die('not found');
        $name = '';
        if($id == 'bibiani') {
            $name = "Bibiani Gold Mine";
        }
        if($id == 'chirano') {
            $name = "Chirano Gold Mine";
        }
        
        return view('pages.projects.kubi', compact('name'));
    }
    public function annualMeetings(Request $request)
    {
        return view('pages.investors.annual-meetings');
    }
    public function presentation(Request $request)
    {
        return view('pages.investors.presentation');
    }
}
