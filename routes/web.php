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


/*
Route::get('/', function () {
    $data=['name'=>"Zoubir","Age"=>24,'date'=>'12/01/1997'];
    return view('welcome')->with($data);
});


Route::get('/test', function () {
    return "Welcome";
});
//routes parameters
//1 required parameters


Route::get('/Show-number/{id}', function ($id) {return $id;})->name("A");//<-Routes name

//2 optional parameters

Route::get('/Show-String/{id?}', function (){
   return "Welcome to Test2 page ";
})->name("B");//<-Routes name

//namespace

Route::namespace('Front')->group(function (){
    //all route only access controller or methode in folder name Front
   Route::get('users',"UsersController@ShowUserName");
});

/*Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
    //set of routes
    Route::get('/',function()
    {
     return 'work';
    });
    route::get('Show','usercontroller@ShowUsers');
    route::delete('delete','usercontroller@deleteUsers');
    route::get('edit','usercontroller@editUsers');
    route::put('Update','usercontroller@UpdateUsers');
});

Route::get('check',function(){
    return 'middleware';
})->middleware('auth');

Route::get('First','Front\FirstController@ShowName');//->middleware('auth');
Route::get('First1','Front\FirstController@ShowName1');//->middleware('auth');

Route::get('login',function()
{
    return 'must dr login fo access this route';
})->name('login');

Route::resource('news','NewsController');//=>


Route::get('news','NewsController@index');
Route::post('news','NewsController@store');
Route::get('news/create','NewsController@create');
Route::get('edit/{id}/edit','NewsController@edit');
Route::get('update/{id}','NewsController@update');
Route::delete('news/{id}','NewsController@delete');


Route::get('index','Front\FirstController@getIndex');


Route::get('landing',function ()
{
  return  view('landing');
});


Route::get('about',function(){
    return view('about');
});


*/

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
//user must be authenticated and verify email

Route::get('/',function(){
 return "home";
 });
Route::get("/redirect/{service}","SocialController@Redirect");
Route::get("/callback/{service}","SocialController@Callback");


Route::get("fillable",'CrudeController@GetOffers');
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],
    function()
    {
Route::group(['prefix'=>'offers'],function (){
//Route::get('store','CrudeController@Store');
        Route::get('create','CrudeController@Create');
    Route::POST('store','CrudeController@Store')->name('offers.store');
    Route::get('all','CrudeController@GetAllOffer');

  }
    );



});



