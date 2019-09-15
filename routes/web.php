<?php

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

Route::get('/', 'FrontendController@index');
Route::get('/notice', 'FrontendController@notice');
Route::get('/academy/info/{id}', 'FrontendController@academy_info');
Route::get('/course-page/{id}', 'FrontendController@courses_info');
Route::get('/student/gallery', 'FrontendController@student_gallery');
Route::get('/teacher/gallery', 'FrontendController@teacher_gallery');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Category work

Route::get('/add/category', 'CategoryController@add_category');
Route::post('/save/category', 'CategoryController@save_category');
Route::get('/active/category/{id}', 'CategoryController@active_category');
Route::get('/pending/category/{id}', 'CategoryController@pending_category');
Route::get('/delete/category/{id}', 'CategoryController@delete_category');


// Courses Information

Route::get('/add/courses', 'CategoryController@add_courses');
Route::post('/save/description', 'CategoryController@save_courses');
Route::get('/active/courses/{id}', 'CategoryController@active_courses');
Route::get('/pending/courses/{id}', 'CategoryController@pending_courses');
Route::get('/edit/courses/{id}', 'CategoryController@edit_courses');
Route::post('/update/courses', 'CategoryController@update_courses');
Route::get('/delete/courses/{id}', 'CategoryController@delete_courses');

//Slider Information

Route::get('/add/slider', 'CategoryController@add_slider');
Route::post('/save/education/tag', 'CategoryController@save_education_tag');
Route::get('/active/slider/{id}', 'CategoryController@active_slider');
Route::get('/pending/slider/{id}', 'CategoryController@pending_slider');
Route::get('/delete/slider/{id}', 'CategoryController@delete_slider');

//Notice information

Route::get('/add/notice', 'CategoryController@add_notice');
Route::post('/save/notice', 'CategoryController@save_notice');
Route::get('/active/notice/{id}', 'CategoryController@active_notice');
Route::get('/pending/notice/{id}', 'CategoryController@pending_notice');
Route::get('/delete/notice/{id}', 'CategoryController@delete_notice');

//Seminar Information

Route::get('/add/seminar', 'CategoryController@add_seminar');
Route::post('/save/seminar', 'CategoryController@save_seminar');
Route::get('/active/seminar/{id}', 'CategoryController@active_seminar');
Route::get('/pending/seminar/{id}', 'CategoryController@pending_seminar');
Route::get('/delete/seminar/{id}', 'CategoryController@delete_seminar');

//Student Work Information

Route::get('/add/student/work', 'CategoryController@add_student_work');
Route::post('/save/student/work', 'CategoryController@save_student_work');
Route::get('/active/student/work/{id}', 'CategoryController@active_student_work');
Route::get('/pending/student/work/{id}', 'CategoryController@pending_student_work');
Route::get('/delete/student/work/{id}', 'CategoryController@delete_student_work');


//Institute Information

Route::get('/add/institute/work', 'CategoryController@add_institute_work');
Route::post('/save/institute/work', 'CategoryController@save_institute_work');
Route::get('/active/institute/work/{id}', 'CategoryController@active_institute_work');
Route::get('/pending/institute/work/{id}', 'CategoryController@pending_institute_work');
Route::get('/delete/institute/work/{id}', 'CategoryController@delete_institute_work');

// Achievement Information

Route::get('/add/achievements', 'CategoryController@add_achievements');
Route::post('/save/achievements', 'CategoryController@save_achievements');
Route::get('/active/achievements/{id}', 'CategoryController@active_achievements');
Route::get('/pending/achievements/{id}', 'CategoryController@pending_achievements');
Route::get('/delete/achievements/{id}', 'CategoryController@delete_achievements');


// WorkPlace

Route::get('/add/workplace', 'CategoryController@add_workplace');
Route::post('/save/workplace', 'CategoryController@save_workplace');
Route::get('/active/workplace/{id}', 'CategoryController@active_workplace');
Route::get('/pending/workplace/{id}', 'CategoryController@pending_workplace');
Route::get('/delete/workplace/{id}', 'CategoryController@delete_workplace');


//Student Feedback

Route::get('/add/feedback', 'CategoryController@add_feedback');
Route::post('/save/feedback', 'CategoryController@save_feedback');
Route::get('/active/feedback/{id}', 'CategoryController@active_feedback');
Route::get('/pending/feedback/{id}', 'CategoryController@pending_feedback');
Route::get('/delete/feedback/{id}', 'CategoryController@delete_feedback');


//Student Gallery

Route::get('/add/gallery', 'CategoryController@add_gallery');
Route::post('/save/gallery', 'CategoryController@save_gallery');
Route::get('/active/gallery/{id}', 'CategoryController@active_gallery');
Route::get('/pending/gallery/{id}', 'CategoryController@pending_gallery');
Route::get('/delete/gallery/{id}', 'CategoryController@delete_gallery');


//Teacher Gallery

Route::get('/add/teacher', 'CategoryController@add_teacher');
Route::post('/save/teacher', 'CategoryController@save_teacher');
Route::get('/active/teacher/{id}', 'CategoryController@active_teacher');
Route::get('/pending/teacher/{id}', 'CategoryController@pending_teacher');
Route::get('/delete/teacher/{id}', 'CategoryController@delete_teacher');
