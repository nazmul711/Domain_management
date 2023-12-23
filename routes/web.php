<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('layout');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    


    Route::resource('/domains', DomainController::class);
    Route::get('/', [DomainController::class, 'index'])->name('index.domain');
    Route::get('/hostings', [HostingController::class, 'index'])->name('index.hosting');   
    Route::get('/create', [DomainController::class, 'create'])->name('create.domain');
    Route::get('/hostings/create', [HostingController::class, 'create'])->name('create.hosting');
    Route::post('/store', [DomainController::class, 'store'])->name('store.domain');
    Route::post('/hostings/store', [HostingController::class, 'store'])->name('store.hosting');
    Route::get('/domain/edit/{id}', [DomainController::class, 'edit'])->name('edit.domain');
    Route::post('/update', [DomainController::class, 'update'])->name('update.domain');

    Route::get('/hostings/edit/{id}', [HostingController::class, 'edit'])->name('edit.hosting');
    Route::post('/hostings/update', [HostingController::class, 'update'])->name('update.hosting');
    Route::get('/delete/{id}', [DomainController::class, 'destroy'])->name('delete.domain');
    Route::get('/hostings/delete/{id}', [HostingController::class, 'destroy'])->name('delete.hosting');

    //Search option 
    Route::post('/search_domain', [DomainController::class, 'DomainSearch']);

    
  
});

//Route::get('/search_domain', [DomainController::class, 'DomainSearch']);

Route::get('/cutome_logout', function (Request $request) {
    $request->session()->flush();
});

require __DIR__ . '/auth.php';



