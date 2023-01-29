<?php
use App\Http\Controllers\ReportController;

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('Login.Homepage');
});

Route::get('/locals/Homepage', function () {
    return view('/locals/Homepage');
})->middleware(['auth:local'])->name('/locals/Homepage');
require __DIR__.'/auth.php';

Route::get('/admin/AdminHomepage', function () {
    return view('/admin/AdminHomepage');
})->middleware(['auth:admin'])->name('/admin/AdminHomepage');
require __DIR__.'/adminauth.php';

Route::get('/volunteer/EventMain', function () {
    return view('/volunteer/EventMain');
})->middleware(['auth:volunteer'])->name('/volunteer/EventMain');
require __DIR__.'/volunteerauth.php';


// Hotspot

Route::get('hot', function () {
    return view('Hotspot.HotspotMain');
});

Route::post('addhot/create','App\Http\Controllers\HotspotController@create');

Route::get('hot','App\Http\Controllers\HotspotController@viewHotspot');

Route::get('managehot','App\Http\Controllers\HotspotController@manageHotspot');

Route::get('Hotspot/{id}/hotspotDetail','App\Http\Controllers\HotspotController@hotspotDetail');

Route::get('hotspot/{id}/delete','App\Http\Controllers\HotspotController@delete');

Route::get('Hotspot/{id}/viewEdit','App\Http\Controllers\HotspotController@viewEdit');

Route::get('displayhot','App\Http\Controllers\HotspotController@DisplayHotspot');

Route::post('hotspotupdate/{id}/update','App\Http\Controllers\HotspotController@update');



//Application

Route::get('app', function () {
    return view('Application.AddApplication');
});

Route::get('apl', function () {
    return view('Application.ApplicantDetail');
});

Route::get('list/{id}/overview','App\Http\Controllers\ApplicationController@viewapply');

Route::get('addApply/{id}/overview','App\Http\Controllers\ApplicationController@overview');

Route::post('addApply/create','App\Http\Controllers\ApplicationController@create');


Route::get('update/{donationID}/{id}', 'App\Http\Controllers\ApplicationController@subBalance')->name('subBalance');


Route::get('vwapply', function () {
    return view('locals.ListApplicant');
});

//Donation


Route::post('donation/create','App\Http\Controllers\DonationController@create');

Route::get('donatefilter','App\Http\Controllers\DonationController@filter');


Route::get('donation/{id}/details','App\Http\Controllers\DonationController@viewDetail');

Route::get('donation/{id}/delete','App\Http\Controllers\DonationController@delete');

Route::get('/locals/Profile','App\Http\Controllers\LocalController@donateProfile');



Route::get('viewedit/{id}/view','App\Http\Controllers\DonationController@viewEdit');

Route::post('donationupdate/{id}/update','App\Http\Controllers\DonationController@update');

Route::get('list/{donationState}/overview','App\Http\Controllers\DonationController@viewState');



//Support

Route::post('support/create','App\Http\Controllers\SupportController@create');

Route::get('/locals/req','App\Http\Controllers\SupportController@viewSupport');

Route::get('support/{id}/details','App\Http\Controllers\SupportController@supportDetail');

Route::get('support/{id}/delete','App\Http\Controllers\SupportController@delete');

Route::get('us','App\Http\Controllers\SupportController@supportProfile');


Route::get('supportedit/{id}/view','App\Http\Controllers\SupportController@viewEdit');

Route::post('supportupdate/{id}/update','App\Http\Controllers\SupportController@update');

//Event

Route::post('event/create','App\Http\Controllers\EventController@create');

Route::get('event','App\Http\Controllers\EventController@viewEvent');

Route::get('admin/event','App\Http\Controllers\EventController@viewEvent');

Route::get('display','App\Http\Controllers\EventController@DisplayEvent');

Route::get('proevt','App\Http\Controllers\EventController@manageEvent');

Route::get('orgevt','App\Http\Controllers\EventController@OrganizeEvent');

Route::get('event/{id}/delete','App\Http\Controllers\EventController@delete');

Route::get('display/{id}/view','App\Http\Controllers\EventController@viewEdit');

Route::post('eventupdate/{id}/update','App\Http\Controllers\EventController@update');

Route::get('status/{id}/change','App\Http\Controllers\EventController@status');

//Locals

Route::get('/locals/Profile', function () {
    return view('/locals/Profile');
});
// Route::get('/locals/Profile','App\Http\Controllers\LocalController@viewDonates');
Route::get('/local/{id}/viewDonates','App\Http\Controllers\LocalController@viewDonates');
Route::get('/local/{id}/viewSupports','App\Http\Controllers\LocalController@viewSupports');
Route::get('/locals/event','App\Http\Controllers\LocalController@viewEvent');
Route::get('/locals/hot','App\Http\Controllers\LocalController@viewHotspot');
Route::get('/locals/Profile','App\Http\Controllers\LocalController@noti');
Route::get('/locals/donate','App\Http\Controllers\DonationController@viewDonation');
Route::get('/locals/{id}/eventdetail','App\Http\Controllers\EventController@viewDetail');


//Admin
Route::post('donation/Admincreate','App\Http\Controllers\DonationController@Admincreate');
Route::get('/admin/donate','App\Http\Controllers\DonationController@AdminviewDonation');
Route::get('donation/{id}/Admindetails','App\Http\Controllers\DonationController@AdminviewDetail');
Route::get('/admin/{id}/AdminviewDonates','App\Http\Controllers\DonationController@AdminviewEdit');
Route::post('donationupdate/{id}/Adminupdate','App\Http\Controllers\DonationController@Adminupdate');
Route::get('/donation/{id}/Admindelete','App\Http\Controllers\DonationController@Admindelete');
Route::get('/admin/Profile','App\Http\Controllers\DonationController@AdminDonate');


Route::get('/admin/req','App\Http\Controllers\SupportController@AdminviewSupport');
Route::get('support/{id}/Admindetails','App\Http\Controllers\SupportController@AdminsupportDetail');
Route::get('/support/{id}/Admindelete','App\Http\Controllers\SupportController@Admindelete');
Route::get('/admin/Profile','App\Http\Controllers\SupportController@AdminsupportProfile');
Route::get('/supportedit/{id}/AdminviewDonates','App\Http\Controllers\SupportController@AdminviewEdit');
Route::post('supportupdate/{id}/Adminupdate','App\Http\Controllers\SupportController@Adminupdate');


Route::post('event/create','App\Http\Controllers\EventController@Admincreate');
Route::get('admin/event','App\Http\Controllers\EventController@AdminviewEvent');
Route::get('/proevt','App\Http\Controllers\EventController@AdminmanageEvent');
Route::get('event/{id}/Admindelete','App\Http\Controllers\EventController@Admindelete');
Route::get('display/{id}/Adminview','App\Http\Controllers\EventController@AdminviewEdit');
Route::post('eventupdate/{id}/Adminupdate','App\Http\Controllers\EventController@Adminupdate');
Route::get('status/{id}/change','App\Http\Controllers\EventController@status');


Route::post('addhot/create','App\Http\Controllers\HotspotController@create');
Route::get('/admin/hot','App\Http\Controllers\HotspotController@Adminview');
Route::get('/managehot','App\Http\Controllers\HotspotController@manageHotspot');
Route::get('hotspot/{id}/hotspotDetail','App\Http\Controllers\HotspotController@Admindetail');
Route::get('hotspot/{id}/delete','App\Http\Controllers\HotspotController@delete');
Route::get('Hotspot/{id}/viewEdit','App\Http\Controllers\HotspotController@viewEdit');
Route::post('hotspotupdate/{id}/update','App\Http\Controllers\HotspotController@update');



//Event Organizer
Route::post('event/Orgcreate','App\Http\Controllers\EventController@create');

Route::get('event/Orgevent','App\Http\Controllers\EventController@viewEvent');

Route::get('/org/{id}/eventdetail','App\Http\Controllers\EventController@OrgviewDetail');

Route::get('event/{id}/orgevt','App\Http\Controllers\EventController@OrganizeEvent');

Route::get('event/{id}/Orgdelete','App\Http\Controllers\EventController@delete');

Route::get('display/{id}/Orgview','App\Http\Controllers\EventController@OrgviewEdit');

Route::post('eventupdate/{id}/OrgUpdate','App\Http\Controllers\EventController@update');










 