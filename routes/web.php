<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfolioController;

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

Route::get('/template', function () {
    return view('template');
});


//Route::get('/bio-data', function () {
   // return view('bio-data');
//});
Route::get('/bio-data',[portfolioController::class,'get_profile']);

Route::get('/viewPortfolio',[portfolioController::class,'viewPortfolio']);

Route::get('/editPortfolio/{id}',[portfolioController::class,'editPortfolio'])->name('edit');

Route::post('/save-profile',[portfolioController::class,'save_profile']); 

Route::post('/updatePortfolio',[portfolioController::class,'updatePortfolio'])->name('update');

Route::post('/delete-profile/',[portfolioController::class,'delete_profile'])->name('delete_profile'); 

Route::get('/portfolio',[portfolioController::class,'index']);

Route::get('/myPortfolio',[portfolioController::class,'myPortfolio']);

Route::get('/admi',[portfolioController::class,'admin']);

Route::get('/personal_info',[portfolioController::class,'personal_info']);

Route::post('/save_personal_info',[portfolioController::class,'save_personal_info']); 

Route::post('/save_contact',[portfolioController::class,'save_contact']); 

Route::get('/skill',[portfolioController::class,'skill']);

Route::post('/save_skill',[portfolioController::class,'save_skill']); 






