<?php

namespace App\Http\Controllers;

use App\Models\FinancialYear;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class RouteModuleController extends Controller
{
    
    public function home(Request $request)
    {
        $projects = ['Aboduabo', 'kubi', 'keyhole', 'betenase', 'fahiakoba', 'ashanti ii project'];
        // $client = new Client();
        // $response = $client->get('https://asantegold.com/wp-json/wp/v2/posts?_embed&per_page=6');
        // $posts = json_decode($response->getBody(), true);
        $posts = [];
        return view('pages.home', compact('projects', 'posts'));
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
    public function bibiani(Request $request)
    {
        return view('pages.operations.bibiani');
    }
    public function chirano(Request $request)
    {
        
        return view('pages.operations.chirano');
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
        $data = '';
        if($id == 'bibiani') {
            $name = "Bibiani Gold Mine";
            $data = 'aaa';
        }
        if($id == 'chirano') {
            $name = "Chirano Gold Mine";
            $data = 'skasaks';
        }
        
        return view('pages.projects.kubi', compact('name', 'data'));
    }
    public function annualMeetings(Request $request)
    {
        return view('pages.investors.annual-meetings');
    }
    public function presentation(Request $request)
    {
        return view('pages.investors.presentation');
    }
    public function shareStructure(Request $request)
    {
        return view('pages.share-structure');
    }
    public function financialStatement(Request $request)
    {
        $years = FinancialYear::orderBy('year', 'desc')->get();
        return view('pages.financial-statement', compact('years'));
    }
    public function newsReleases(Request $request)
    {
        $client = new Client();
        // $response = $client->get('https://asantegold.com/wp-json/wp/v2/posts?_embed');
        // $posts = json_decode($response->getBody(), true);
        $posts = [];
        return view('pages.news.releases', compact('posts'));
    }
    public function newsReleasesDetails(Request $request, $slug)
    {
        $client = new Client();
        $response = $client->get('https://asantegold.com/wp-json/wp/v2/posts?slug='.$slug.'&_embed');
        $response2 = $client->get('https://asantegold.com/wp-json/wp/v2/posts?_embed');

        $articles = json_decode($response->getBody(), true);
        $posts = json_decode($response->getBody(), true);
        if (!empty($articles) && is_array($articles)) {
            $post = $articles[0];
            return view('pages.news.details', compact('posts','post'));
        } else {
            abort(404); // Post not found
        }
    }
    public function stockInfo(Request $request)
    {
        return view('pages.stock-info');
    }
}
