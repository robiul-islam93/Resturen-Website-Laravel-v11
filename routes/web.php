<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookTableController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\adminpanel\TestingController;
use App\Http\Controllers\userpanel\UserIndexController;
use App\Http\Controllers\adminpanel\AdminProfileController;
use App\Http\Controllers\adminpanel\AdminDashboardController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    // Admin panel all Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin panel all Routes
    Route::get('/admin/index/page/all/information', [AdminDashboardController::class, 'adminDashboard'])->name('admin-index-page');

    // Testing curd operation routes
    // Route::get('/list/record', [TestingController::class, 'listRecord'])->name('list-record');
    // Route::get('/create/record', [TestingController::class, 'createRecord'])->name('create-record');
    // Route::post('/testing/store', [TestingController::class, 'storeTestingRecord'])->name('testing-store');
    // Route::get('/edit/record/{id}', [TestingController::class, 'updateRecord'])->name('edit-record');
    // Route::post('/update/record/{id}', [TestingController::class, 'updateRecordStore'])->name('update-record');
    // Route::delete('/delete/record/{id}', [TestingController::class, 'deleteRecord'])->name('delete-record');



    // Contact List Route Start

Route::get('/contact-list', [ContactFormController::class, 'contactList'])->name('contact-list');
Route::delete('/delete/record/{id}', [ContactFormController::class, 'ContactdeleteRecord'])->name('delete-contact');

    // Contact List Route End






    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    });

    // admin profile
    Route::get('/admin/profile', [AdminProfileController::class, 'show'])->name('admin.profile');



});



Route::post('home-page', [BookTableController::class, 'BookTableStore'])->name('book.table.store');
Route::post('contact-page', [ContactFormController::class, 'CotactStore'])->name('contact.store');

require __DIR__.'/auth.php';


    // Userpanel all Routes

// Home Page Route
Route::view('/', 'userpanel.home-page');
Route::view('/home-page', 'userpanel.home-page');
Route::view('/contact-page', 'userpanel.contact-page');
Route::view('/kitchen-page', 'userpanel.kitchen-page');
Route::view('/menu-page', 'userpanel.menu-page');
Route::view('/about-page', 'userpanel.about-page');
Route::get('/blog-page', [BlogController::class, 'blogpageData'])->name('blog-page');
Route::get('/single-blog-page/{id}', [BlogController::class, 'SingleblogpageData'])->name('single-blog-page');




// contact consgratulation message Route

Route::view('/consgratulation-message','userpanel.consgratulation-page');


// Dashboard Route Start


Route::get('/list/record', [TestingController::class, 'listRecord'])->name('list-record');
Route::get('/create/record', [TestingController::class, 'createRecord'])->name('create-record');
Route::post('/testing/store', [TestingController::class, 'storeTestingRecord'])->name('testing-store');
Route::get('/edit/record/{id}', [TestingController::class, 'updateRecord'])->name('edit-record');
Route::post('/update/record/{id}', [TestingController::class, 'updateRecordStore'])->name('update-record');
Route::delete('/delete/record/{id}', [TestingController::class, 'deleteRecord'])->name('delete-record');



// Blog Start Route

Route::get('/admin-DaShboard-blog-list', [BlogController::class, 'BlogList'])->name('blog-list');
Route::post('/admin-daShboard-blog-store', [BlogController::class, 'BlogStore'])->name('blog-store');
Route::get('/admin-dashboard-blog-edit/{id}', [BlogController::class, 'BlogIDDataShow'])->name('edit-Item');
Route::post('/admin-dashboard-blog-update/{id}', [BlogController::class, 'BlogUpdate'])->name('update-record');
Route::delete('/admin-dashboard-blog-delete/{id}', [BlogController::class, 'deleteblogRecord'])->name('delete-Item');



Route::view('/admin-Dashboard-blog-create', 'adminpanel.blog.blog-create');
