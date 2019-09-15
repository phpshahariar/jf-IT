@extends('back.adminmaster')

@section('content')
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                            Add Feedback
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Feedback Form</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{url('/save/feedback')}}" method="post">
                                            @csrf
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label>Student Name</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Enter Academy Name..." />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label>Message</label>
                                                            <textarea class="form-control" rows="5" name="message" id="" placeholder="Enter Student Feedback....."></textarea>
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
                                                <button type="submit" class="btn btn-primary">Save Feedback</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>
                            Feedback Table
                        </h2>
                        @if(Session::get('message'))
                            <p class="alert alert-success" style="text-align: center">{{ Session::get('message') }}</p>
                        @endif
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th width="15%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($show_feedback as $key => $feedback)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{$feedback->name}}</td>
                                        <td>{{ substr($feedback->message,0,60) }}</td>
                                        <td>{{$feedback->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td width="15%">
                                            @if($feedback->status == 1)
                                                <a href="{{ url('/active/feedback/'.$feedback->id) }}">
                                                    <i class="material-icons" title="Published" style="color: darkgreen;">thumb_up</i>
                                                </a>
                                            @else
                                                <a href="{{ url('/pending/feedback/'.$feedback->id) }}">
                                                    <i class="material-icons" title="Unpublished" style="color: purple;">thumb_down</i>
                                                </a>
                                            @endif
                                            <a href="{{ url('/delete/feedback/'.$feedback->id) }}">
                                                <i class="material-icons" title="Data Delete" onclick="return confirm('Are You Sure Delete This')" style="color: red;">delete</i>
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

    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
