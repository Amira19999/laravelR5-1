<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentsController;                                           //Student
Route::get('test20',[MyController::class,'my_data']);
Route::get('addStudent',[StudentController::class,'create'])->name('addStudent');     //Student
Route::get('Students',[StudentController::class,'index'])->name('Students');
Route::post('insertStudent',[StudentController::class,'store'])->name('insertStudent');
Route::get('editStudent/{id}',[StudentController::class,'edit'])->name('editStudent');
Route::put('updateStudent/{id}',[StudentController::class,'update'])->name('updateStudent');
Route::get('showStudent/{id}',[StudentController::class,'show'])->name('showStudent');
Route::delete('delStudent',[ StudentController::class,'destroy'])->name('delStudent'); 


Route::post('insertClient',[ClientController::class,'store'])->name('insertClient');
Route::get('addClient',[ClientController::class,'create'])->name('addClient');
Route::get('clients',[ClientController::class,'index'])->name('clients');
<<<<<<< HEAD
Route::get('editClient/{id}',[ClientController::class,'edit'])->name('editClient');
Route::put('updateClient/{id}',[ClientController::class,'update'])->name('updateClient');
Route::get('showClient/{id}',[ClientController::class,'show'])->name('showClient');
Route::delete('delClient',[ClientController::class,'destroy'])->name('delClient');
//Route::delete('delClient/{id}',[ClientController::class,'destroy'])->name('delClient');
=======
Route::get('editClients/{id}',[ClientController::class,'edit'])->name('editClients');
Route::put('updateClients/{id}',[ClientController::class,'update'])->name('updateClients');
Route::get('showClient/{id}',[ClientController::class,'show'])->name('showClient');
Route::delete('delClient',[ClientController::class,'destroy'])->name('delClient');

>>>>>>> 4e7be649a13bcf26637459ffb86bb44d65f21c6a
Route::get('/', function () {
    return view('welcome');
});

Route::get('peter/{id?}', function($id = 0){
    return 'Welcome to my first web site ' . $id;
})->whereNumber('id');

Route::get('course/{name}', function($name){
    return 'My name is: ' . $name;
})->whereIn('name',['Peter', 'Tony','Ahmed']);

Route::prefix('cars')->group(function(){
    Route::get('bmw', function(){
        return 'Category is BMW';
    });

    Route::get('mercedes',function(){
        return 'Category is Mercedes';
    });
});

Route::get('form1',function(){
    return view('form1');
});

Route::post('recForm1', [MyController::class,'receiveData'])->name('receiveForm1');

// Route::fallback(function(){
//     // return 'The required is not found';
//     return redirect('/');
// });