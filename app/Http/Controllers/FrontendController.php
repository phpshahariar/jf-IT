<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Category;
use App\Courses;
use App\Feedback;
use App\Institute;
use App\Notice;
use App\Seminar;
use App\Slider;
use App\Student;
use App\StudentGallery;
use App\Teacher;
use App\Workplace;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $show_category = Category::where('status', 1)->get();
        $show_courses = Courses::where('status', 1)->orderBy('id', 'asc')->get();
        $show_notice = Notice::where('status', 1)->get();
        $show_slider = Slider::where('status', 1)->get();
        $show_seminar = Seminar::where('status', 1)->orderBy('id', 'desc')->get();
        $show_stu_work = Student::where('status', 1)->orderBy('id', 'desc')->get();
        $show_institute = Institute::where('status', 1)->orderBy('id', 'desc')->take(1)->get();
        $show_achievement = Achievement::where('status', 1)->orderBy('id', 'desc')->take(1)->get();
        $show_workplace = Workplace::where('status', 1)->orderBy('id', 'desc')->take(1)->get();
        $show_feedback = Feedback::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.home.home', compact(
            'show_notice','show_category',
            'show_courses', 'show_slider', 'show_seminar',
            'show_stu_work',
            'show_institute',
            'show_achievement',
            'show_workplace',
            'show_feedback'
        ));
    }

    public function notice(){
        $show_category = Category::where('status', 1)->get();
        $show_courses = Courses::where('status', 1)->orderBy('id', 'asc')->get();
        $show_notice = Notice::where('status', 1)->get();
        return view('front.category.notice', [
            'show_category' => $show_category,
            'show_courses' => $show_courses,
            'show_notice' => $show_notice,
            ]);
    }

    public function academy_info($id){
        $show_academy = Category::where('id', $id)->get();
        $show_category = Category::where('status', 1)->get();
        $show_courses = Courses::where('status', 1)->orderBy('id', 'asc')->get();
        $show_notice = Notice::where('status', 1)->get();
        return view('front.category.academy', [
            'show_category' => $show_category,
            'show_courses' => $show_courses,
            'show_notice' => $show_notice,
            'show_academy' => $show_academy,
        ]);
    }

    public function courses_info($id){
//        $show_academy = Category::where('id', $id)->get();
        $courses_info = Courses::where('id', $id)->get();
        $show_category = Category::where('status', 1)->get();
        $show_courses = Courses::where('status', 1)->orderBy('id', 'asc')->get();
        $show_notice = Notice::where('status', 1)->get();
        $show_slider = Slider::where('status', 1)->get();
        $show_feedback = Feedback::where('status', 1)->orderBy('id', 'desc')->get();
        return view('front.category.courses', [
            'show_category' => $show_category,
            'show_courses' => $show_courses,
            'show_notice' => $show_notice,
//            'show_academy' => $show_academy,
            'show_slider' => $show_slider,
            'show_feedback' => $show_feedback,
            'courses_info'  => $courses_info
        ]);
    }

    public function student_gallery(){
        $show_category = Category::where('status', 1)->get();
        $show_courses = Courses::where('status', 1)->orderBy('id', 'asc')->get();
        $show_notice = Notice::where('status', 1)->get();
        $show_student_gallery = StudentGallery::where('status', 1)->get();
        return view('front.category.stu_gallery', [
            'show_category' => $show_category,
            'show_courses' => $show_courses,
            'show_notice' => $show_notice,
            'show_student_gallery' => $show_student_gallery
        ]);
    }

    public function teacher_gallery(){
        $show_category = Category::where('status', 1)->get();
        $show_courses = Courses::where('status', 1)->orderBy('id', 'asc')->get();
        $show_notice = Notice::where('status', 1)->get();
        $show_student_gallery = StudentGallery::where('status', 1)->get();
        $show_teacher_gallery = Teacher::where('status', 1)->get();
        return view('front.category.teacher-gallery', [
            'show_category' => $show_category,
            'show_courses' => $show_courses,
            'show_notice' => $show_notice,
            'show_student_gallery' => $show_student_gallery,
            'show_teacher_gallery' => $show_teacher_gallery
        ]);
    }

}
