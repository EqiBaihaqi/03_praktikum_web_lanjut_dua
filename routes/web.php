  <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConctactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
/*
|------------------------------ --------------------------------------------
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
Route::get('/home', function () {
    return view('home');
});

Route::get('/masterview', function () {
    return view('masterview');
});
Route::prefix('/product')->group (function(){
    Route::get('/product-1', [ProductController::class, 'product1']);
    Route::get('/product-2', [ProductController::class, 'product2']);
    Route::get('/product-3', [ProductController::class, 'product3']);
});

Route::get('/news/{title}', [NewsController::class, 'news']);

Route::prefix('/program')->group (function(){
    Route::get('/program-1', [ProgramController::class, 'program1']);
    Route::get('/program-2', [ProgramController::class, 'program2']);
    Route::get('/program-3', [ProgramController::class, 'program3']);
});

Route::get('/about', function(){
    return view('about-us');
});

Route::resource('/contact', ContactUsController::class);
