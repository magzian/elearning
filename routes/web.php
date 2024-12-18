<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\MyPageComponent;
use App\Livewire\LandingPage\Team;
use App\Livewire\Students\MyCourses;
use Illuminate\Support\Facades\Auth;
use App\Livewire\LandingPage\AboutUs;
use App\Livewire\LandingPage\Contact;
use App\Livewire\LandingPage\Courses;
use App\Livewire\LandingPage\Landing;
use Illuminate\Support\Facades\Route;
use App\Livewire\Students\StudentCoures;

use App\Http\Controllers\AdminController;
use App\Livewire\LandingPage\Testimonial;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

/* Route::get('/', function () {
    return view('landing-page/landing');
}); */

Route::get('/', Landing::class);

Auth::routes();


//landing page routes

Route::get('/about-us', AboutUs::class);
Route::get('/courses', Courses::class);
Route::get('/contacts', Contact::class);
Route::get('/team', Team::class);
Route::get('/testimonial', Testimonial::class);


Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
Route::get('/teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard')->middleware('auth');
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard')->middleware('auth');
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//student dashboard routes
Route::get('/my-courses', MyCourses::class)->name('my-courses');


Route::get('/my-page', MyPageComponent::class)->name('my.page');
