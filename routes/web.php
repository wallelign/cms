<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\about;
// use App\Http\Controllers\usercontroller;
// use App\Http\Controllers\formcontroller;
// use App\Http\Controllers\fdb;
// use App\Http\Controllers\toModel;
// use App\Http\Controllers\fromOtherSite;
// use App\Http\Controllers\sessioncontroller;
// use App\Http\Controllers\flashsessioncontroller;
use App\Http\Controllers\uploadcontroller;
// use App\Http\Controllers\loadalldblist;
// use App\Http\Controllers\registercontroller;
// use App\Http\Controllers\deletcontroller;
// use App\Http\Controllers\dboperation;
// use App\Http\Controllers\aggregate;
use App\Http\Controllers\join;
use App\Http\Controllers\accessor;
use App\Http\Controllers\mutatocontriller;
use App\Http\Controllers\relation;
use Illuminate\Support\Str;
use App\Http\Controllers\routebinding;
use App\mail\samplemail;

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

// Route::get('/{name}', function ($name) {            //display value in the view
//     return view('welcome',['name'=>$name]);
// });

Route::get('/contact', function () {         // route::view("contact","contact");
       //return redirect("hello");
     return view('contact'); 
});
//  route:: view("hello","hello");
route::get('/hello/{name}',function($name){
    return view('hello',['name'=>$name]);
    
});
// route::get("users/{user}",[users::class,'index']);   //faches data from controller and display in the view
 
route::get("about",[about::class,'loadview']);

route::view("users","users");  
route::view("pro","pro");

route::get("user",[usercontroller::class,"viewload1"]);

route::post("form",[formcontroller::class,'getData']);
//route::view("login","form");
     //global middleware
// route::view("access","useraccess");
// route::view("home","home");
// route::view("noaccess","notaccess");
   ///group middleware
// route::view("groupmdone","groupmdone");
// route::view("groupmdthree","groupmdthree"); 
// route::group(['middleware'=>['protectedPage']],function(){
//        route::view("groupmdtwo","groupmdtwo");
// });
              //route middleware
// route::view("u","u")->middleware('prtectedPage');
// route::view("h","h");
// route::view("n","n");
        
                     //to wayes of acces data form DB;using model and using controller onlly;
// route::get("feachfromdb",[fdb::class,"index"]);
// route::get("feachfromdb2",[toModel::class,'getData']);

// route::get("feachfromothersite",[fromOtherSite::class,'feachdata']);

Route::view("sessionlogin","sessionlogin");
route::post("ab",[sessioncontroller::class,'userlogin']);
route::view("profile","profile");

route::get('/login',function(){
    if(session()->has('user')){
         return redirect('profile');
    }
 return view('sessionlogin');
});

route::get('/logout',function(){
    if(session()->has('user')){
         session()->put('user');
    }
 return redirect('sessionlogin');
});


route::view("flashsession","flashform");
route::post("fs",[flashsessioncontroller::class,'addmember']);

route::view("upload","uploadfile");
route::post("fileupload",[uploadcontroller::class,'upload']);

//route::view("localisation", "localisation");
Route::get('/localisation/{lang}', function ($lang) {  
     App::setlocale($lang);
   return view('localisation'); 
});
route::get("ll",[loadalldblist::class,'lists']);

route::view("regform","regest");
route::post("rgform",[registercontroller::class,'regster']);


//delete and update
route::get("listt",[deletcontroller::class,'liss']);
route::get("delete/{id}",[deletcontroller::class,'delete']);
route::get("edit/{id}",[deletcontroller::class,'show']);
route::post("edit",[deletcontroller::class,'update']);
//operation
route::get("operation",[dboperation::class,'operations']);
//aggregate
route::get("agg",[aggregate::class,'agg']);
    //join
route::get("join",[join::class,'joint']);
               ///////////accessor
route::get("acc",[accessor::class,'access']);
                 ////////mutator
route::get("mu",[mutatocontriller::class,'mutator']);
             //////////relation
route::get("relation",[relation::class,'relation']);

 //$data="hi,well come to laravel 8";
// echo $data;
// $data=str::ucfirst($data);
// echo $data;
// $data=Str::replacefirst('hi',"hello", $data);
// echo $data;
////////fulent string
// $data=Str::of($data)
// ->ucfirst($data)
// ->replacefirst("Hi","hello walle",$data);
// echo $data;
route::get("routeb/{key}",[routebinding::class,'rout']);

route::get('/abe',function(){
        return new samplemail();
});