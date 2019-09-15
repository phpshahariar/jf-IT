@extends('back.adminmaster')

@section('content')
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                            Add Teacher
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h5 class="modal-title" id="exampleModalLabel">Teacher Work</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{url('/save/teacher')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row clearfix">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="name" placeholder="Enter Teacher Name....">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="dept" placeholder="Enter Department Name....">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea class="form-control" name="course_info" rows="5" placeholder="Short Description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="file" name="images">
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
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Gallery</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>
                            Teacher Gallery Table
                        </h2>
                        @if(Session::get('message'))
                            <p class="alert alert-success" style="text-align: center" id="xyz">{{ Session::get('message') }}</p>
                        @endif
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr style="text-align: center;">
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Dept</th>
                                    <th>Course Info</th>
                                    <th width="30%">Images</th>
                                    <th>Status</th>
                                    <th width="15%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($show_tec_gallery as $key => $tec_gallery)
                                    <tr style="text-align: center;">
                                        <td width="5%">{{ $key+1 }}</td>
                                        <td>{{ $tec_gallery->name }}</td>
                                        <td>{{ $tec_gallery->dept }}</td>
                                        <td>{{ substr($tec_gallery->course_info,0,50) }}</td>
                                        <td>
                                            @if(isset($tec_gallery->images))
                                                <img src="{{ asset('tgallery-images/'.$tec_gallery->images) }}" height="70" width="200">
                                            @else
                                                No Data Found
                                            @endif
                                        </td>
                                        <td width="10%">{{ $tec_gallery->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            @if($tec_gallery->status == 1)
                                                <a href="{{ url('/active/teacher/'.$tec_gallery->id) }}" class="btn btn-success">
                                                    Active
                                                </a>
                                            @else
                                                <a href="{{ url('/pending/teacher/'.$tec_gallery->id) }}" class="btn btn-primary">
                                                    Pending
                                                </a>
                                            @endif
                                            <a href="{{ url('/delete/teacher/'.$tec_gallery->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure Delete This')">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>--}}
    {{--    <script>--}}
    {{--        CKEDITOR.replace( 'editor1' );--}}
    {{--    </script>--}}
@endsection
