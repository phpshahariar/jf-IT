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
use Image;
class CategoryController extends Controller
{
    public function add_category(){
        $show_category = Category::all();
        return view('back.category.add-category', compact('show_category'));
    }

    public function save_category(Request $request){
        $this->validate($request,[
            'name'  => 'required|unique:categories',
            'information' => 'required|unique:categories',
            'status'  => 'required',
        ]);

        $categories = new Category();
        $categories->name = $request->name;
        $categories->information = $request->information;
        $categories->status = $request->status;
        $categories->save();
        return redirect()->back()->with('message', 'Academy info Save Successfully');
    }

    public function active_category($id){
        $active_category = Category::find($id);
        $active_category->status = 0;
        $active_category->save();
        return redirect()->back()->with('message', 'Academy info Unpublished');
    }

    public function pending_category($id){
        $active_category = Category::find($id);
        $active_category->status = 1;
        $active_category->save();
        return redirect()->back()->with('message', 'Academy info Published');
    }

    public function delete_category($id){
        $delete_category = Category::find($id);
        $delete_category->delete();
        return redirect()->back()->with('message', 'Academy info Deleted');
    }

    //Courses Information

    public function add_courses(){
        $show_courses = Courses::get();
        return view('back.courses.add-courses', compact('show_courses'));
    }

    public function save_courses(Request $request){
        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
            'images' => 'required'
        ]);

        $add_courses = new Courses();

        if ($request->hasFile('images')){
            $coursesImage = $request->file('images');
            $imageName = $coursesImage->getClientOriginalName();
            $fileName = time().'_course_image_'.$imageName;
            $directory = public_path('/courses-images/');
            $coursesImgUrl = $directory.$fileName;
            Image::make($coursesImage)->save($coursesImgUrl);
            $add_courses->images = $fileName;
        }

        $add_courses->name = $request->name;
        $add_courses->description = $request->description;
        $add_courses->status = $request->status;
        $add_courses->save();
        return redirect()->back()->with('message', 'Courses Added Successfully');
    }

    public function active_courses($id){
        $active_course = Courses::find($id);
        $active_course->status = 0;
        $active_course->save();
        return redirect()->back()->with('message', 'Corses has been Unpublished');
    }

    public function pending_courses($id){
        $pending_course = Courses::find($id);
        $pending_course->status = 1;
        $pending_course->save();
        return redirect()->back()->with('message', 'Corses has been Published');
    }

    public function edit_courses($id){
        $edit_course = Courses::find($id);
        return view('back.courses.edit-course', compact('edit_course'));
    }

    public function update_courses(Request $request){
        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
            'images' => 'required'
        ]);

        $update_courses = Courses::find($request->id);
        if ($request->hasFile('images')){
            if ($request->image){
                unlink(public_path('courses-images/'.$update_courses->images));
            }
        }
        if ($request->hasFile('images')){
            $coursesImage = $request->file('images');
            $imageName = $coursesImage->getClientOriginalName();
            $fileName = time().'_course_image_'.$imageName;
            $directory = public_path('/courses-images/');
            $coursesImgUrl = $directory.$fileName;
            Image::make($coursesImage)->save($coursesImgUrl);
            $update_courses->images = $fileName;
        }

        $update_courses->name = $request->name;
        $update_courses->description = $request->description;
        $update_courses->status = $request->status;
        $update_courses->save();
        return redirect('/add/courses')->with('message', 'Courses has been Updated');
    }

    public function delete_courses($id){
        $delete_courses = Courses::find($id);
        $delete_courses->delete();
        return redirect()->back()->with('message', 'Courses has been Deleted');
    }


    // Slider Information

    public function add_slider(){
        $show_tag = Slider::all();
        return view('back.slider.add-slider', compact('show_tag'));
    }

    public function save_education_tag(Request $request){
        $this->validate($request,[
            'image' => 'required',
            'status' => 'required'
        ]);

        $add_slider = new Slider();
        if ($request->hasFile('image')){
            $coursesImage = $request->file('image');
            $imageName = $coursesImage->getClientOriginalName();
            $fileName = time().'_slider_image_'.$imageName;
            $directory = public_path('/slider-images/');
            $coursesImgUrl = $directory.$fileName;
            Image::make($coursesImage)->save($coursesImgUrl);
            $add_slider->image = $fileName;
        }
        $add_slider->status = $request->status;
        $add_slider->save();
        return redirect()->back()->with('message', 'Slider has been added');
    }

    public function active_slider($id){
        $active_slider = Slider::find($id);
        $active_slider->status = 0;
        $active_slider->save();
        return redirect()->back()->with('message', 'Slider has been Pending');
    }

    public function pending_slider($id){
        $pending_slider = Slider::find($id);
        $pending_slider->status = 1;
        $pending_slider->save();
        return redirect()->back()->with('message', 'Slider has been Active');
    }

    public function delete_slider($id){
        $delete_slider = Slider::find($id);
        $delete_slider->delete();
        return redirect()->back()->with('message', 'Slider has been Deleted');
    }

    //Notice Information

    public function add_notice(){
        $show_notice = Notice::all();
        return view('back.notice.add-notice', compact('show_notice'));
    }

    public function save_notice(Request $request){
        $this->validate($request,[
            'notice' => 'required',
            'images' => 'required',
            'status' => 'required'
        ]);

        $add_notice = new Notice();

        if ($request->hasFile('images')){
            $noticeImage = $request->file('images');
            $imageName = $noticeImage->getClientOriginalName();
            $fileName = time().'_course_image_'.$imageName;
            $directory = public_path('/notice-images/');
            $noticeImgUrl = $directory.$fileName;
            Image::make($noticeImage)->save($noticeImgUrl);
            $add_notice->images = $fileName;
        }

        $add_notice->notice = $request->notice;
        $add_notice->status = $request->status;
        $add_notice->save();
        return redirect()->back()->with('message', 'Notice has been Successfully Added');
    }

    public function active_notice($id){
        $active_notice = Notice::find($id);
        $active_notice->status = 0;
        $active_notice->save();
        return redirect()->back()->with('message', 'Notice has been Unpublished');
    }

    public function pending_notice($id){
        $active_notice = Notice::find($id);
        $active_notice->status = 1;
        $active_notice->save();
        return redirect()->back()->with('message', 'Notice has been Published');
    }

    public function delete_notice($id){
        $delete_notice = Notice::find($id);
        $delete_notice->delete();
        return redirect()->back()->with('message', 'Notice Deleted Successfully');
    }

    //Seminar Information

    public function add_seminar(){
        $save_seminar = Seminar::all();
        return view('back.seminar.add-seminar', compact('save_seminar'));
    }

    public function save_seminar(Request $request){
        $this->validate($request,[
            'images' => 'required',
            'status' => 'required'
        ]);
        $add_seminar = new Seminar();
        if ($request->hasFile('images')){
            $imageSeminar = $request->file('images');
            $imgName = $imageSeminar->getClientOriginalName();
            $fileName = time().'_seminar_'.$imgName;
            $directory = public_path('/seminar-images/');
            $imgUrl = $directory.$fileName;
            Image::make($imageSeminar)->save($imgUrl);
            $add_seminar->images = $fileName;
        }
        $add_seminar->status = $request->status;
        $add_seminar->save();
        return redirect()->back()->with('message', 'Seminar Add Successfully');
    }

    public function active_seminar($id){
        $active_seminar = Seminar::find($id);
        $active_seminar->status = 0;
        $active_seminar->save();
        return redirect()->back()->with('message', 'Seminar Pending Successfully');
    }

    public function pending_seminar($id){
        $pending_seminar = Seminar::find($id);
        $pending_seminar->status = 1;
        $pending_seminar->save();
        return redirect()->back()->with('message', 'Seminar Active Successfully');
    }

    public function delete_seminar($id){
        $delete_seminar = Seminar::find($id);
        $delete_seminar->delete();
        return redirect()->back()->with('message', 'Seminar Delete Successfully');
    }


    //Student Work

    public function add_student_work(){
        $show_student_work = Student::all();
        return view('back.student.add-student-work', compact('show_student_work'));
    }

    public function save_student_work(Request $request){
        $this->validate($request,[
            'images' => 'required',
            'status' => 'required'
        ]);
        $add_student_work = new Student();
        if ($request->hasFile('images')){
            $imageSeminar = $request->file('images');
            $imgName = $imageSeminar->getClientOriginalName();
            $fileName = time().'_stu_work_'.$imgName;
            $directory = public_path('/student-images/');
            $imgUrl = $directory.$fileName;
            Image::make($imageSeminar)->save($imgUrl);
            $add_student_work->images = $fileName;
        }
        $add_student_work->status = $request->status;
        $add_student_work->save();
        return redirect()->back()->with('message', 'Student Work Add Successfully');
    }

    public function active_student_work($id){
        $active_student_work = Student::find($id);
        $active_student_work->status = 0;
        $active_student_work->save();
        return redirect()->back()->with('message', 'Student Work Pending Successfully');
    }

    public function pending_student_work($id){
        $pending_student_work = Student::find($id);
        $pending_student_work->status = 1;
        $pending_student_work->save();
        return redirect()->back()->with('message', 'Student Work Active Successfully');
    }

    public function delete_student_work($id){
        $delete_student_work = Student::find($id);
        $delete_student_work->delete();
        return redirect()->back()->with('message', 'Student Work Delete Successfully');
    }


    //Institute Information

    public function add_institute_work(){
        $show_institute_work = Institute::all();
        return view('back.institute.institute', compact('show_institute_work'));
    }

    public function save_institute_work(Request $request){
        $this->validate($request,[
            'images' => 'required',
            'status' => 'required'
        ]);
        $add_institute_work = new Institute();
        if ($request->hasFile('images')){
            $imageSeminar = $request->file('images');
            $imgName = $imageSeminar->getClientOriginalName();
            $fileName = time().'_ins_work_'.$imgName;
            $directory = public_path('/institute-images/');
            $imgUrl = $directory.$fileName;
            Image::make($imageSeminar)->save($imgUrl);
            $add_institute_work->images = $fileName;
        }
        $add_institute_work->status = $request->status;
        $add_institute_work->save();
        return redirect()->back()->with('message', 'Institute Work Add Successfully');
    }

    public function active_institute_work($id){
        $active_institute_work = Institute::find($id);
        $active_institute_work->status = 0;
        $active_institute_work->save();
        return redirect()->back()->with('message', 'Institute Work Pending Successfully');
    }

    public function pending_institute_work($id){
        $pending_institute_work = Institute::find($id);
        $pending_institute_work->status = 1;
        $pending_institute_work->save();
        return redirect()->back()->with('message', 'Institute Work Active Successfully');
    }

    public function delete_institute_work($id){
        $delete_institute_work = Institute::find($id);
        $delete_institute_work->delete();
        return redirect()->back()->with('message', 'Institute Work Delete Successfully');
    }

    //Achievement Information

    public function add_achievements(){
        $show_achievements = Achievement::all();
        return view('back.achievements.achievements', compact('show_achievements'));
    }

    public function save_achievements(Request $request){
        $this->validate($request,[
            'images' => 'required',
            'status' => 'required'
        ]);
        $add_achievements = new Achievement();
        if ($request->hasFile('images')){
            $imageSeminar = $request->file('images');
            $imgName = $imageSeminar->getClientOriginalName();
            $fileName = time().'_achievements_'.$imgName;
            $directory = public_path('/achievements-images/');
            $imgUrl = $directory.$fileName;
            Image::make($imageSeminar)->save($imgUrl);
            $add_achievements->images = $fileName;
        }
        $add_achievements->status = $request->status;
        $add_achievements->save();
        return redirect()->back()->with('message', 'Achievements Add Successfully');
    }

    public function active_achievements($id){
        $active_institute_work = Achievement::find($id);
        $active_institute_work->status = 0;
        $active_institute_work->save();
        return redirect()->back()->with('message', 'Achievements Pending Successfully');
    }

    public function pending_achievements($id){
        $pending_institute_work = Achievement::find($id);
        $pending_institute_work->status = 1;
        $pending_institute_work->save();
        return redirect()->back()->with('message', 'Achievements Active Successfully');
    }

    public function delete_achievements($id){
        $delete_institute_work = Achievement::find($id);
        $delete_institute_work->delete();
        return redirect()->back()->with('message', 'Achievements Delete Successfully');
    }

    //Workplace Information

    public function add_workplace(){
        $show_workplace = Workplace::all();
        return view('back.workplace.workplace', compact('show_workplace'));
    }

    public function save_workplace(Request $request){
        $this->validate($request,[
            'images' => 'required',
            'status' => 'required'
        ]);
        $add_achievements = new Workplace();
        if ($request->hasFile('images')){
            $imageSeminar = $request->file('images');
            $imgName = $imageSeminar->getClientOriginalName();
            $fileName = time().'_work_'.$imgName;
            $directory = public_path('/work-images/');
            $imgUrl = $directory.$fileName;
            Image::make($imageSeminar)->save($imgUrl);
            $add_achievements->images = $fileName;
        }
        $add_achievements->status = $request->status;
        $add_achievements->save();
        return redirect()->back()->with('message', 'Workplace Add Successfully');
    }

    public function active_workplace($id){
        $active_institute_work = Workplace::find($id);
        $active_institute_work->status = 0;
        $active_institute_work->save();
        return redirect()->back()->with('message', 'Workplace Pending Successfully');
    }

    public function pending_workplace($id){
        $pending_institute_work = Workplace::find($id);
        $pending_institute_work->status = 1;
        $pending_institute_work->save();
        return redirect()->back()->with('message', 'Workplace Active Successfully');
    }

    public function delete_workplace($id){
        $delete_institute_work = Workplace::find($id);
        $delete_institute_work->delete();
        return redirect()->back()->with('message', 'Workplace Delete Successfully');
    }

    //Workplace Information

    public function add_feedback(){
        $show_feedback = Feedback::all();
        return view('back.feedback.feedback', compact('show_feedback'));
    }

    public function save_feedback(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'message' => 'required',
            'status' => 'required'
        ]);
        $save_feedback = new Feedback();
        $save_feedback->name = $request->name;
        $save_feedback->message = $request->message;
        $save_feedback->status = $request->status;
        $save_feedback->save();
        return redirect()->back()->with('message', 'Feedback Add Successfully');
    }

    public function active_feedback($id){
        $active_feedback = Feedback::find($id);
        $active_feedback->status = 0;
        $active_feedback->save();
        return redirect()->back()->with('message', 'Feedback Pending Successfully');
    }

    public function pending_feedback($id){
        $pending_feedback = Feedback::find($id);
        $pending_feedback->status = 1;
        $pending_feedback->save();
        return redirect()->back()->with('message', 'Feedback Active Successfully');
    }

    public function delete_feedback($id){
        $delete_feedback = Feedback::find($id);
        $delete_feedback->delete();
        return redirect()->back()->with('message', 'Feedback Delete Successfully');
    }


    //Student Gallery Information

    public function add_gallery(){
        $show_stu_gallery = StudentGallery::all();
        return view('back.stu-gallery.stu_gallery', compact('show_stu_gallery'));
    }

    public function save_gallery(Request $request){
        $this->validate($request,[
            'images' => 'required',
            'status' => 'required'
        ]);
        $save_stu_gallery = new StudentGallery();
        if ($request->hasFile('images')){
            $imageSeminar = $request->file('images');
            $imgName = $imageSeminar->getClientOriginalName();
            $fileName = time().'_stu-gallery_'.$imgName;
            $directory = public_path('/sgallery-images/');
            $imgUrl = $directory.$fileName;
            Image::make($imageSeminar)->save($imgUrl);
            $save_stu_gallery->images = $fileName;
        }
        $save_stu_gallery->status = $request->status;
        $save_stu_gallery->save();
        return redirect()->back()->with('message', 'Student Gallery Add Successfully');
    }

    public function active_gallery($id){
        $active_stu_gallery = StudentGallery::find($id);
        $active_stu_gallery->status = 0;
        $active_stu_gallery->save();
        return redirect()->back()->with('message', 'Student Gallery Pending Successfully');
    }

    public function pending_gallery($id){
        $pending_stu_gallery = StudentGallery::find($id);
        $pending_stu_gallery->status = 1;
        $pending_stu_gallery->save();
        return redirect()->back()->with('message', 'Student Gallery Active Successfully');
    }

    public function delete_gallery($id){
        $delete_stu_gallery = StudentGallery::find($id);
        $delete_stu_gallery->delete();
        return redirect()->back()->with('message', 'Student Gallery Delete Successfully');
    }

    //Teacher Gallery Information

    public function add_teacher(){
        $show_tec_gallery = Teacher::all();
        return view('back.teacher-gallery.teacher-gallery', compact('show_tec_gallery'));
    }

    public function save_teacher(Request $request){
        $this->validate($request,[
            'images' => 'required',
            'name' => 'required',
            'dept' => 'required',
            'course_info' => 'required',
            'status' => 'required'
        ]);
        $save_tec_gallery = new Teacher();
        if ($request->hasFile('images')){
            $imageSeminar = $request->file('images');
            $imgName = $imageSeminar->getClientOriginalName();
            $fileName = time().'_tec-gallery_'.$imgName;
            $directory = public_path('/tgallery-images/');
            $imgUrl = $directory.$fileName;
            Image::make($imageSeminar)->save($imgUrl);
            $save_tec_gallery->images = $fileName;
        }
        $save_tec_gallery->name = $request->name;
        $save_tec_gallery->dept = $request->dept;
        $save_tec_gallery->course_info = $request->course_info;
        $save_tec_gallery->status = $request->status;
        $save_tec_gallery->save();
        return redirect()->back()->with('message', 'Teacher Gallery Add Successfully');
    }

    public function active_teacher($id){
        $active_stu_gallery = Teacher::find($id);
        $active_stu_gallery->status = 0;
        $active_stu_gallery->save();
        return redirect()->back()->with('message', 'Teacher Gallery Pending Successfully');
    }

    public function pending_teacher($id){
        $pending_stu_gallery = Teacher::find($id);
        $pending_stu_gallery->status = 1;
        $pending_stu_gallery->save();
        return redirect()->back()->with('message', 'Teacher Gallery Active Successfully');
    }

    public function delete_teacher($id){
        $delete_stu_gallery = Teacher::find($id);
        $delete_stu_gallery->delete();
        return redirect()->back()->with('message', 'Teacher Gallery Delete Successfully');
    }
}
