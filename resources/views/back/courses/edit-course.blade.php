@extends('back.adminmaster')

@section('content')
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <form action="{{url('/update/courses')}}" method="post" name="editCoursesForm" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id" id="id" value="{{ $edit_course->id }}">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Courses Name</label>
                                            <input type="text" value="{{ $edit_course->name }}" class="form-control" name="name" placeholder="Courses Name..." />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Description</label>
                                            <textarea class="form-control" id="editor1" name="description" placeholder="Enter Courses Description">{{ $edit_course->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Courses Images</label>
                                            <input type="file" name="images" accept="image/*">
                                            <img src="{{asset('courses-images/'.$edit_course->images)}}" height="60" width="120"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Publication Status</label>
                                            <select class="form-control" name="status">
                                                <option>Select Status</option>
                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{url('/add/courses')}}" class="btn btn-danger">Back</a>
                                <button type="submit" name="btn" class="btn btn-primary">Update Courses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.forms['editCoursesForm'].elements['status'].value="{{ $edit_course->status }}";
    </script>
    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection