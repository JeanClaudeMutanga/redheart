<?php
use App\Mail\EmployeeInvite;
use Illuminate\Support\Facades\Mail;

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
    return view('welcome');
});

//admin Routes

Route::get('/admin/schools','AdminController@schools');
Route::get('/admin/students','AdminController@students');
Route::get('/admin/school/{id}','AdminController@school');

Route::post('/sub/first/{id}','AdminController@sub');
Route::post('/sub/second/{id}','AdminController@sub2');


//admin Routes End

Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');

Route::view('/asset','animal');

Route::view('/vtech','maptech');

Route::view('/pocketcash','pocketcash');

Route::post('/pocketcash/register','PocketCash@store');

Route::view('/emergency','emergency');

Route::view('/getpocketcash','regpocket');

Route::view('/cooperate','cooperate');

Route::POST('/cooperate/code','CooperateController@code');

//Route::get('/schools/registered','PocketCash@index');

Route::view('/map','map');

/*
Route::get('/email', function () {
    Mail::to('jtmutanga@gmail.com')->send( new EmployeeInvite());
    return new EmployeeInvite();
});
*/
Auth::routes();

Route::get('/confirm/{id}','InviteController@confirm')->name('profile.cooperate.confirm');

Route::POST('/employee/save','EmployeesController@store');

Route::get('/employee/create','EmployeesController@create');

Route::POST('/employee/{id}','InviteController@update')->name('profile.cooperate.employee');

Route::get('/cooperate/invite','InviteController@create');

Route::post('cooperate/store','InviteController@store');

Route::get('/cooperate/confirmed','InviteController@confirmed');

Route::get('/cooperate/pending','InviteController@index');

//Route::resource('cooperate','InviteController');


Route::get('/home', 'HomeController@index')->name('home');

Route::POST('/individual', 'IndividualController@store');

Route::get('/individual/show','IndividualController@show');

Route::get('/student/create','studentController@create');

Route::get('/individual/create','IndividualController@create');

Route::POST('/newstudent', 'studentController@store');

Route::view('/privacy','privacy');

Route::view('/watchdog','watchdog');

Route::get('/downloads','WatchdogController@downloads');


//Payment Routes

Route::get('/application/payment/{id}','PaymentsController@ready');

Route::post('/application/payment/confirm/{id}','PaymentsController@create');

Route::get('/application/payment/proceed/{id}','PaymentsController@proceed');

Route::get('/payment/finish','PaymentsController@success');

Route::get('/payment/terminate','PaymentsController@failed');

Route::get('/payment/redirect','PaymentsController@redirect');

Route::post('/payment/success', function () {
    return redirect('/payment/finish');
});

Route::post('/payment/failed', function () {
    return redirect('/payment/terminate');
});


Route::post('/notify', function () {
    return redirect('/students/payment');
});




//Manual Registration

Route::view('/registration/regular','regular');

Route::post('/regular/create','RegularController@store');

//Account Routes

Route::get('/student/{id}','AccountController@student');

Route::get('/students/payments','AccountController@payments');

Route::get('/students/all','AccountController@index');

Route::get('/students/payment','AccountController@payments');

Route::get('/student/payments/{id}','AccountController@paid');




