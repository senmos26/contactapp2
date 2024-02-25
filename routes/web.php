<?php use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/contacts', [\App\Http\Controllers\ContactController::class,'index']
)->name('contacts.index');

Route::get('/contacts/create', function () {
return view('contacts.create');
})->name('contacts.create');
Route::post('/contacts/add',[\App\Http\Controllers\ContactController::class,'add'])->name('contacts.add');
Route::get('/contacts/{id}', [\App\Http\Controllers\ContactController::class,'show']
)->name('contacts.show');

Route::get('/contacts/modify/{id}',[\App\Http\Controllers\ContactController::class,'modify'])->name('contacts.modify');
Route::post('/contacts/update/{id}',[\App\Http\Controllers\ContactController::class,'update'])->name('contacts.update');
function getContacts(Request $request)
{}


Route::get('/Companies',[\App\Http\Controllers\CompanyController::class,'index']
)->name('companies.index');
Route::delete('/contacts/{id}', [\App\Http\Controllers\ContactController::class, 'destroy'])->name('contacts.destroy');
