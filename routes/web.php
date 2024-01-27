<?php
use App\Http\Controllers\ViewPagesControlle;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactformController;
// use App\Models\Newsletter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

// start route nav pages
Route::get('/', function(){
    return view('/home');
});
Route::get('/about', function(){
    return view('/about');
});
Route::get('/services', function(){
    return view('/services');
});
Route::get('/services/digitalmarketing', function(){
    return view('/pages.digitalmarketing');
});
Route::get('/services/webdevelopment', function(){
    return view('/pages.webdevelopment');
});
Route::get('/services/dataanalysis', function(){
    return view('/pages.dataanalysis');
});
Route::get('/services/collaboration', function(){
    return view('/pages.collaboration');
});
Route::get('/services/hardwareservices', function(){
    return view('/pages.hardwareservices');
});
Route::get('/services/eventsmanagement', function(){
    return view('/pages.eventsmanagement');
});
Route::get('/contact', function(){
    return view('/contact');
});
// end route nav pages

// start post form data route
// Route::resource('/newsletter_create', function(){
//     // return '123';
//     Newsletter::create([
//         'id'=> 12,
//         'email'=> 'usa 1'
//     ]);

//     return "success";
// });
Route::resource('/newsletter', NewsletterController::class);
Route::resource('/contactform', ContactformController::class);
// end post form data route

// assign pages using controller
// Route::get('/', [ViewPagesControlle::class, 'home']);
// Route::get('/about', [ViewPagesControlle::class, 'about']);
// Route::get('/services', [ViewPagesControlle::class, 'services']);
// Route::get('/services/digitalmarketing', [ViewPagesControlle::class, 'digitalmarketing']);
// Route::get('/services/webdevelopment', [ViewPagesControlle::class, 'webdevelopment']);
// Route::get('/services/dataanalysis', [ViewPagesControlle::class, 'dataanalysis']);
// Route::get('/services/collaboration', [ViewPagesControlle::class, 'collaboration']);
// Route::get('/services/hardwareservices', [ViewPagesControlle::class, 'hardwareservices']);
// Route::get('/services/eventsmanagement', [ViewPagesControlle::class, 'eventsmanagement']);
// Route::get('/contact', [ViewPagesControlle::class, 'contact']);

// Route::get('/test', [ViewPagesControlle::class, 'test']);
// Route::get('/test', [ViewPagesControlle::class, 'home'])->name('ViewPagesControlle.home');


// test check insert query


// using normal controller
// Route::get('/newsletter/store', [NewsletterController::class, 'store']); // create
// Route::get('/newsletter/show', [NewsletterController::class, 'show']); // view

// using resource controller
// Route::resource('newsletter', NewsletterController::class);

// test url vs route
// Route::get('/testUrlVsRoute', function(){
//     return "test url vs route";
// })->name('testUrlVsRoute.12');

// Route::get('/testUrlVsRoute', function(){
//     return "test url vs route";
// })->name('testUrlVsRoute.12');

// established DB connection
// Route::get('/connect', function(){
//     try{
//         DB::connection()->getPdo();
//         return 'suu';
//     }
//     catch(\Exception $ex){
//         return $ex->getMessage();
//         // return 'no';
//     }
// });