<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllersntroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatogeryController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebControlle;
use App\Mail\Testmail;
use App\Models\Catogery;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
require __DIR__.'/auth.php';
Route::get('/send',function () {
    Mail::to('d4a3bd7aa2@boxmail.lol')->send(new Testmail);

    return response('seeeeend');
});
//  Route::get('/login', function () {
//      return view('auth\login');
//  })->name('login');

// Route::get('/dashboard', function () {
//     return view('realest.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/about', function () {
    $catogerys = Catogery::all();
 
    return view('realest.about',['catogerys' => $catogerys]);
})->name('about');
Route::get('/conactUs', function () {
    $catogerys = Catogery::all();
 
    return view('realest.conactUs',['catogerys' => $catogerys]);
})->name('conactUs');


Route::controller(BlogController::class)->group(function () {
Route::get('/blogview',  'index')->name('blogview');
Route::get('/blogscreate',  'create')->name('blogscreate');
Route::post('/blogs.store', 'store')->name('blogs.store');;
Route::get('/blogs/{id}/edit',  'edit')->name('blogs.edit');;
Route::post('/blogs.update', 'update')->name('blogs.update');;
Route::post('/blogs.destroy', 'destroy')->name('blogs.destroy');;
Route::get('/blogs/{id}', 'show')->name('showblog');
});






Route::controller(WebControlle::class)->group(function () {     
Route::get('/search', 'search')->name('search');
Route::get('/','index')->name('home');
Route::get('/home','index')->name('home');
Route::get('/newProperty','newProperty')->name('newProperty');
Route::get('/topView','topView')->name('topView');
Route::post('/addenqueris','addenqueris')->name('addenqueris');
Route::post('/addreport', 'addreport')->name('addreport');
Route::get('/detelisscreen/{id}', 'detalisscreen')->name('detelisscreen');
Route::get('/moreproperty/{country}', 'moreproperty')->name('moreproperty');
Route::get('/aboutpage', 'aboutpage')->name('aboutpage');
Route::get('/terms', 'terms')->name('terms');
Route::get('/morepropertyCato/{catogery}', 'morepropertyCato')->name('morepropertyCato');
Route::get('/filterweb',[PropertyController::class,'filterweb'] )->name('filterweb');
});



   



Route::middleware(['auth'])->group(function () {
        Route::get('/propertyinsertweb', [PropertyController::class,'indexinsertweb'])->name('propertyinsertweb');
        Route::post('/property.store',[PropertyController::class,'store'])->name('property.store');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 Route::middleware(['auth','admin'])->group(function () {

  Route::controller(PropertyController::class)->group(function () {
        Route::get('/dashboard', 'dashboarddata')->name('dashboard');
       
        Route::get('/showparoperty', 'show')->name('showparoperty');
        Route::get('/showparoperty', 'show')->name('showparoperty');
        Route::get('/propertys', 'index')->name('propertys');
        Route::get('/propertyinsertview', 'indexinsert')->name('propertyinsertview');
     

        Route::post('/property.recommended', 'recommended')->name('property.recommended');
        Route::post('/property.edit', 'edit')->name('property.edit');
        Route::post('/property.destroy', 'destroy')->name('property.destroy');
        Route::get('/adsproperty', 'ads')->name('adsproperty');
    });
    
    Route::controller(CatogeryController::class)->group(function () {
       // Route::get('/catogery', 'index')->name('catogery');
        Route::get('/catogeryview', 'index')->name('catogeryview');
        Route::post('/catogerystore', 'store')->name('catogery.store');
        Route::post('/catogeryupdate', 'update')->name('catogery.update');
        Route::post('/catogerydestroy', 'destroy')->name('catogery.destroy');
    });
    Route::controller(CountryController::class)->group(function () {
        // Route::get('/catogery', 'index')->name('catogery');
         Route::get('/countryview', 'index')->name('countryview');
         Route::post('/countrystore', 'store')->name('country.store');
         Route::post('/countryupdate', 'update')->name('country.update');
         Route::post('/countrydestroy', 'destroy')->name('country.destroy');
     });
    
     Route::controller(CityController::class)->group(function () {
        // Route::get('/catogery', 'index')->name('catogery'); 
         Route::get('/cityview', 'index')->name('cityview');
         Route::post('/citystore', 'store')->name('city.store');
         Route::post('/cityupdate', 'update')->name('city.update');
         Route::post('/citydestroy', 'destroy')->name('city.destroy');
     });

    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'index')->name('setting');
        Route::post('/setting.store', 'store')->name('setting.store');
        Route::post('/setting.update', 'update')->name('setting.update');
        Route::post('/setting.destroy', 'destroy')->name('setting.destroy');
    });

    Route::controller(ReportController::class)->group(function () {
        Route::get('/report', 'index')->name('report');
        Route::post('/report.store', 'store')->name('report.store');
        Route::post('/report.update', 'update')->name('report.update');
        Route::post('/report.destroy', 'destroy')->name('report.destroy');
    });
    Route::controller(EnquiryController::class)->group(function () {
        Route::get('/enquiry', 'index')->name('enquiry');
        Route::post('/enquiry.store', 'store')->name('enquiry.store');
        Route::post('/enquiry.update', 'update')->name('enquiry.update');
        Route::post('/enquiry.destroy', 'destroy')->name('enquiry.destroy');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user');
        Route::post('/user.store', 'store')->name('user.store');
        Route::post('/user.edit', 'edit')->name('user.edit');
        Route::post('/user.update', 'update')->name('user.update');
        Route::post('/user.destroy', 'destroy')->name('user.destroy');
    });



    
 });

//Route::get('/{page}', ntroller@index');

// Route::get('/{page}', ntroller::class,'index');