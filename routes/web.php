<?php

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
 

Route::get('/admin', function () {
     return view('admin');
});

// Route::get('/sample', function () {
//       return view('sample');
//  });


 
Route::get('/speakers', function () {
     return view('speakers');
});
 Route::get('/price', function () {
     return view('price');
});


Route::get('/about', function () {
     return view('about');
});

  Route::get('/terms', function () {
       return view('terms');
   });



 Route::get('/gallery', function () {
     return view('gallery');
});
Auth::routes();


 Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/schedule', function () {
     return view('schedule');
});
Route::get('/admin', function () {
     return view('admin');
});

Route::get('/users','StudViewController@show');
Route::get('/roleupdate','StudViewController@role');
Route::get('/eventregistrations','EventViewController@view');
Route::get('/event_payment','EventViewController@show');


Route::get('/viewfiles','ViewFileController@preview');

Route::get('/viewmsgs','ViewmsgController@preview');

Route::get('/viewmsg2','Viewmsg2Controller@preview');
Route::get('/viewmsg3','Viewmsg3Controller@preview');

Route::get('/view2','ViewtoController@preview');

Route::get('/reuploadfiles','ViewreuploadsController@display');

Route::get('/reuploadfiles2','ReViewtoController@display');

Route::view('/ticket',"ticket");
Route::post('/store',"UploadFileController@store");

Route::get('/eventregister', function () {
    return view('eventregister');
});
Route::get('insert','EventTicketController@ticketpre');
Route::post('create','EventTicketController@insert');

Route::get('callforpapers','PapersubmissionController@uploadpapers');
Route::post('upload','PapersubmissionController@storefile');

Route::get('file','FileController@showuploadform')->name('upload.file');
Route::post('file','FileController@storefile');

Route::get('reupload','ReuploadController@showreupload')->name('reupload.file');
Route::post('reupload','ReuploadController@storereuploadfile');

Route::get('/sendemail','SendMailController@index');
Route::post('/sendemail/send','SendMailController@send');

Route::get('sendmsg','SendmsgController@message');
Route::post('message','SendmsgController@insert');



// Route::get('/reupload', function () {
//      return view('reupload');
// });

Route::get('event-registration', 'OrderController@register');
Route::post('payment', 'OrderController@order');


Route::get('/reviewer', function () {
     return view('reviewer');
});


// Route::group(['middleware'=>'auth'],function(){

// });


// Route::group(['prefix'=>'company','middleware'=>['auth','reviewer']],function(){
//   Route::get('/reviewer','reviewerController@index');
// });
// Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
//   Route::get('/admin','adminController@index');
// });