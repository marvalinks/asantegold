<?php

namespace App\Http\Controllers;

use App\Mail\CareerEmail;
use App\Mail\ContactEmail;
use App\Models\DirectorTeam;
use App\Models\Event;
use App\Models\ExecutiveTeam;
use App\Models\FinancialYear;
use App\Models\GovernanceTeam;
use App\Models\ImageGallery;
use App\Models\VideoGallery;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RouteModuleController extends Controller
{
    
    public function home(Request $request)
    {
        $projects = ['Aboduabo', 'kubi', 'keyhole', 'betenase', 'fahiakoba', 'ashanti ii project'];
        $client = new Client();
        $response = $client->get('https://wp.asantegold.com/wp-json/wp/v2/posts?_embed&per_page=6');
        $posts = json_decode($response->getBody(), true);
        // $posts = [];
        return view('pages.home', compact('projects', 'posts'));
    }
    public function contact(Request $request)
    {
        return view('pages.contact');
    }
    public function contactPost(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required', 'subject' => 'required',
            'message' => 'required', 'email' => 'required',
            'timestamp' => 'required|integer|before_or_equal:' . now()->timestamp
        ]);
        Mail::to('info@asantegold.com')->send(new ContactEmail($data));
        return redirect()->route('thankyou');
    }
    public function careers(Request $request)
    {
        return view('pages.careers');
    }
    public function careerPost(Request $request)
    {
        // dd($request->all());
        return redirect()->route('thankyou');
        $data = $request->validate([
            'name' => 'required', 'email' => 'required',
            'timestamp' => 'required|integer|before_or_equal:' . now()->timestamp,
            'cover_letter' => 'required|mimes:pdf|max:10000', 'cv' => 'required|mimes:pdf|max:10000'
        ]);
        Mail::to('bludohric@gmail.com')->send(new CareerEmail($data));
        dd('done');
        return redirect()->route('thankyou');
    }
    public function about(Request $request)
    {
        // dd(Str::slug('Richmong MArtison'));
        // $aa = GovernanceTeam::latest()->get();
        // foreach ($aa as $key => $a) {
        //     $a->slug = Str::slug($a->name);
        //     $a->save();
        // }
        return view('pages.about');
    }
    public function executive(Request $request)
    {
        $teams = ExecutiveTeam::latest()->get();
        return view('pages.executive', compact('teams'));
    }
    public function governance(Request $request)
    {
        $teams = GovernanceTeam::orderBy('id', 'asc')->get();
        return view('pages.governance', compact('teams'));
    }
    public function directors(Request $request)
    {
        $teams = DirectorTeam::latest()->get();
        return view('pages.directors', compact('teams'));
    }
    public function profileDetails(Request $request, $dep, $id)
    {
        if($dep == 'executive') {
            $team = ExecutiveTeam::where('slug', $id)->first();
            return view('pages.profile-details', compact('team'));
        }
        if($dep == 'director') {
            $team = DirectorTeam::where('slug', $id)->first();
            return view('pages.profile-details', compact('team'));
        }
        if($dep == 'governance') {
            $team = GovernanceTeam::where('slug', $id)->first();
            return view('pages.profile-details', compact('team'));
        }
        die('view not found');
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
        $client = new Client();
        $response = $client->get('https://wp.asantegold.com/wp-json/wp/v2/posts?_embed&per_page=3');
        $posts = json_decode($response->getBody(), true);
        return view('pages.operations.bibiani', compact('posts'));
    }
    public function chirano(Request $request)
    {
        $client = new Client();
        $response = $client->get('https://wp.asantegold.com/wp-json/wp/v2/posts?_embed&per_page=3');
        $posts = json_decode($response->getBody(), true);
        return view('pages.operations.chirano', compact('posts'));
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
        $response = $client->get('https://wp.asantegold.com/wp-json/wp/v2/posts?_embed');
        $posts = json_decode($response->getBody(), true);
        // $posts = [];
        return view('pages.news.releases', compact('posts'));
    }
    public function newsReleasesDetails(Request $request, $slug)
    {
        $client = new Client();
        $response = $client->get('https://wp.asantegold.com/wp-json/wp/v2/posts?slug='.$slug.'&_embed');
        $response2 = $client->get('https://wp.asantegold.com/wp-json/wp/v2/posts?_embed');

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
    public function sustainability(Request $request)
    {
        return view('pages.sustainability');
    }
    public function thankyou(Request $request)
    {
        return view('pages.thankyou');
    }
    public function events(Request $request)
    {
        $events = Event::latest()->get();
        return view('pages.events.event', compact('events'));
    }
    public function eventDetail(Request $request, $slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('pages.events.details', compact('event'));
    }
    public function analystCoverage(Request $request)
    {
        return view('pages.analyst-coverage');
    }
    public function imageGallery(Request $request)
    {
        $medias = ImageGallery::latest()->paginate(10);
        return view('pages.media.images', compact('medias'));
    }
    public function videoGallery(Request $request)
    {
        $medias = VideoGallery::orderBy('id', 'desc')->paginate(10);
        return view('pages.media.videos', compact('medias'));
    }
    public function newsCoverage(Request $request)
    {
        return view('pages.news.coverage');
    }
    public function coreValues(Request $request, $slug='safety')
    {
        $page = $slug;
        return view('pages.core-values', compact('page'));
    }
    public function login(Request $request)
    {
        return view('pages.auth.login');
    }
    public function postLogin(Request $request)
    {
        dd($request->all());
        $data = $request->validate([
            'username' => 'required', 'password' => 'required'
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        $request->session()->flash('alert-danger', 'Error logging in');
        return redirect()->route('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
