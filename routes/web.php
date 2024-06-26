<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AreyController;
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
    return view('front.login');
});
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home');
        }
    })->name('admin');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth']);
    Route::get('/add_cards', function () {
        return view('back.add_cards');
    });
    Route::get('/add_news', function () {
        return view('back.add_news');
    });
    // Route::get('/card', function () {
    //     return view('back.card');
    // });
    Route::get('/card', [AreyController::class, 'show'])->name('card.show');
    Route::get('/news', [NewsController::class, 'show']);
    Route::get('/edit_cards', function () {
        return view('back.edit_cards');
    });
    // Route::get('/edit_news', function () {
    //     return view('back.edit_news');
    // });
})->middleware(['auth']);
// --------------------------------Route front-------------------
Route::get('/login', function () {
    return view('front.login');
});
Route::get('/register', function () {
    return view('front.sign_up');
})->name('register');
Route::get('/home', function () {
    return view('front.index_master');
})->name('home');
Route::get('/form', function () {
    return view('front.form');
});
Route::get('/card', [AreyController::class, 'home'])->name('card.home');
Route::get('/map', function () {
    return view('front.map');
});
Route::get('/about', function () {
    return view('front.about');
});

Route::resource('users', UserController::class);
Route::post('login', [UserController::class, 'authenticate'])->name('login');
Route::post('register', [UserController::class, 'store'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::post('orders', [OrderController::class, 'store'])->name('orders.store');
Route::put('orders/{order}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::post('news', [NewsController::class, 'store'])->name('news.store');

Route::get('test', function () {
    return view('test');
});

Route::get('news/{news}', [NewsController::class, 'edit'])->name('news.edit');
Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.delete');
Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
Route::post('cards', [AreyController::class, 'store'])->name('cards.store');

Route::get('cards/{card}', [AreyController::class, 'edit'])->name('cards.edit');
Route::put('cards/{card}', [AreyController::class, 'update'])->name('cards.update');
Route::delete('cards/{card}', [AreyController::class, 'destroy'])->name('cards.delete');

