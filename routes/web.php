<?php

use App\Http\Controllers\RouteModuleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RouteModuleController::class, 'home'])->name('home');
Route::get('contact', [RouteModuleController::class, 'contact'])->name('contactus');
Route::post('contact', [RouteModuleController::class, 'contactPost'])->name('contactus');
Route::get('careers', [RouteModuleController::class, 'careers'])->name('careers');
Route::post('careers', [RouteModuleController::class, 'careerPost'])->name('careers');
Route::get('about', [RouteModuleController::class, 'about'])->name('about');
Route::get('about/executive-team', [RouteModuleController::class, 'executive'])->name('about.executive');
Route::get('about/governance', [RouteModuleController::class, 'governance'])->name('about.governance');
Route::get('about/directors', [RouteModuleController::class, 'directors'])->name('about.directors');
Route::get('estma-reports', [RouteModuleController::class, 'estmaReports'])->name('estma.reports');
Route::get('operations/bibiani', [RouteModuleController::class, 'bibiani'])->name('operations.bibiani');
Route::get('operations/chirano', [RouteModuleController::class, 'chirano'])->name('operations.chirano');
Route::get('projects', [RouteModuleController::class, 'projects'])->name('projects');
Route::get('projects/{id}', [RouteModuleController::class, 'projectSingle'])->name('projects.details');
Route::get('annual-meetings', [RouteModuleController::class, 'annualMeetings'])->name('annual.meetings');
Route::get('presentation', [RouteModuleController::class, 'presentation'])->name('presentation');
Route::get('share-structure', [RouteModuleController::class, 'shareStructure'])->name('share.structure');
Route::get('financial-statement', [RouteModuleController::class, 'financialStatement'])->name('financial.statement');
Route::get('news-releases', [RouteModuleController::class, 'newsReleases'])->name('news.releases');
Route::get('news-releases/{id}', [RouteModuleController::class, 'newsReleasesDetails'])->name('news.releases.details');
Route::get('stock-information', [RouteModuleController::class, 'stockInfo'])->name('stock.information');
Route::get('sustainability', [RouteModuleController::class, 'sustainability'])->name('sustainability');
Route::get('about/{dep}/{id}', [RouteModuleController::class, 'profileDetails'])->name('profile.details');
Route::get('events', [RouteModuleController::class, 'events'])->name('events');
Route::get('events/{slug}', [RouteModuleController::class, 'eventDetail'])->name('event.details');
Route::get('analyst-coverage', [RouteModuleController::class, 'analystCoverage'])->name('analyst.coverage');
Route::get('image-gallery', [RouteModuleController::class, 'imageGallery'])->name('gallery.image');
Route::get('video-gallery', [RouteModuleController::class, 'videoGallery'])->name('gallery.video');
Route::get('core-values/{id?}', [RouteModuleController::class, 'coreValues'])->name('core.values');

Route::get('news-coverage', [RouteModuleController::class, 'newsCoverage'])->name('news.coverage');

Route::get('thankyou/notification', [RouteModuleController::class, 'thankyou'])->name('thankyou');

Route::get('login', [RouteModuleController::class, 'login'])->name('login');
Route::post('login', [RouteModuleController::class, 'postLogin'])->name('login');
Route::get('logout', [RouteModuleController::class, 'logout'])->name('logout');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth']], function () {
    // Route::get('dashboard', [AdminModuleController::class, 'dashboard'])->name('dashboard');
});