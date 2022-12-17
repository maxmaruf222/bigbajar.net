<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use Illuminate\Routing\Route as RoutingRoute;

Route::prefix('admin')->group(function(){
    Route::get('/', App\Http\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('profile', App\Http\Livewire\Admin\Profile::class)->name('admin.profile');
    Route::get('category', App\Http\Livewire\Admin\Category::class)->name('category.view');
    Route::get('products', App\Http\Livewire\Admin\Products::class)->name('products.view');
    Route::get('order', App\Http\Livewire\Admin\Order::class)->name('order.view');
    Route::get('wishlist', App\Http\Livewire\Admin\Wishlist::class)->name('wishlist.view');
    Route::get('cart', App\Http\Livewire\Admin\Cart::class)->name('cart.view');
    Route::get('blog', App\Http\Livewire\Admin\Blog::class)->name('blog.view');
    Route::get('setting', App\Http\Livewire\Admin\Setting::class)->name('setting.view');
    
});

// Route::get('admin/login', function(){ return view('admin.login');})->name('admin.login');
// Route::get('admin/register', function(){ return view('admin.register');})->name('admin.register');




