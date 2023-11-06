<?php

use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\Details1Component;
use App\Http\Livewire\Details2Component;
use App\Http\Livewire\Details3Component;
use App\Http\Livewire\Details4Component;
use App\Http\Livewire\Details5Component;
use App\Http\Livewire\Details6Component;
use App\Http\Livewire\Details7Component;
use App\Http\Livewire\HomeComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('home.index');

Route::get('/home',HomeComponent::class)->name('home.index');

Route::get('/about',AboutComponent::class)->name('about');

Route::get('/detail',DetailsComponent::class)->name('detail');

Route::get('/detail1',Details1Component::class)->name('detail1');

Route::get('/detail2',Details2Component::class)->name('detail2');

Route::get('/detail3',Details3Component::class)->name('detail3');

Route::get('/detail4',Details4Component::class)->name('detail4');

Route::get('/detail5',Details5Component::class)->name('detail5');

Route::get('/detail6',Details6Component::class)->name('detail6');

Route::get('/detail7',Details7Component::class)->name('detail7');

Route::get('/contact',ContactComponent::class)->name('contact');