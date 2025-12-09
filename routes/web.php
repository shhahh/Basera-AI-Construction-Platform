<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\RazorpayWebhookController;
use App\Http\Controllers\ChatController;
use App\Models\Chat;

    Route::get('/', function () {
        return view('welcome');
    });

    // --- 🔥 YAHAN CHANGE KARO 🔥 ---
    Route::get('/bot', function () {
        // 2. Database se purani chats nikaalo
        $chats = Chat::all();

        // 3. View ko wo chats pass karo
        return view('bot', ['chats' => $chats]);
    });

// 2. JS message receive (AJAX Route)
Route::post('/send-chat', [ChatController::class, 'sendMessage'])->name('send.chat');


Route::post('/razorpay-webhook', [RazorpayWebhookController::class, 'handle']);
Route::get('/pay', [RazorpayController::class, 'pay']);
Route::post('/payment-success', [RazorpayController::class, 'success']);

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Projects Page
Route::get('/projects', function () {
    return view('projects');
})->name('projects');

// Contact Page - GET (Form show)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Contact Page - POST (Form submit)
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// Clear application cache:
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return 'cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

// Optimize cache:
Route::get('/optimize', function () {
    Artisan::call('optimize');
    Artisan::call('config:clear');
    return 'Route and cache have been optimize';
});

//Database migration:
Route::get('/database-migration', function () {
    Artisan::call('migrate');
    return 'Database Migration has been done';
});
