<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\EventsController as AdminEventsController;
use App\Http\Controllers\User\EventsController as UserEventsController;
use App\Http\Controllers\Admin\NetworkingController as AdminNetworkingController;
use App\Http\Controllers\User\NetworkingController as UserNetworkingController;
use App\Http\Controllers\User\UserProfilesController as UseruserProfilesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/admin/events', AdminEventsController::class)->middleware(['auth'])->names('admin.events');
Route::resource('/user/events', UserEventsController::class)->middleware(['auth'])->names('user.events')->only(['index','show', 'create', 'edit']);
Route::resource('/admin/networking', AdminNetworkingController::class)->middleware(['auth'])->names('admin.networkings');
Route::resource('/user/networking', UserNetworkingController::class)->middleware(['auth'])->names('user.networking')->only(['index','show', 'create']);
Route::resource('/user/userProfiles', UseruserProfilesController::class)->middleware(['auth'])->names('user.userProfiles')->except(['create']); // Change 'show' to 'userProfiles'
Route::get('/userProfiles/create', [UseruserProfilesController::class, 'create'])->name('user.userProfiles.create');
Route::post('/user/networking', [UserNetworkingController::class, 'store'])->middleware(['auth'])->name('user.networking.store');


require __DIR__.'/auth.php';
