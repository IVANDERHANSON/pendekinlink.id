<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomizedLinkController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shorten-in-bulk', [CustomizedLinkController::class, 'getShortenInBulk']);
Route::post('/shorten-in-bulk/store', [CustomizedLinkController::class, 'storeShortenInBulk']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/history', [CustomizedLinkController::class, 'getHistory']);
    Route::get('/history/{categoryId}', [CustomizedLinkController::class, 'getHistoryPage']);
    Route::post('/add-link-category/{linkId}/{categoryId}', [CustomizedLinkController::class, 'addLinkCategory']);
    Route::get('/edit-link/{id}', [CustomizedLinkController::class, 'getEditLink']);
    Route::post('/update-link/{id}', [CustomizedLinkController::class, 'updateLink']);

    Route::get('/add-category', [CategoryController::class, 'getAddCategory']);
    Route::post('/store-category', [CategoryController::class, 'storeCategory']);
    Route::post('/delete-category/{id}', [CategoryController::class, 'deleteCategory']);
});

require __DIR__.'/auth.php';

Route::post('/store', [CustomizedLinkController::class, 'store']);
Route::get('/{link}', [CustomizedLinkController::class, 'redirect']);
Route::post('/generate-random-link', [CustomizedLinkController::class, 'generateRandomLink']);
Route::post('/store-contact-us', [ContactUsController::class, 'store']);