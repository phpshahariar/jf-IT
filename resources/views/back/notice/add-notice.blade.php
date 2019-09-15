@extends('back.adminmaster')

@section('content')
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                            Add Notice
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Notice Form</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{url('/save/notice')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label>Notice</label>
                                                            <textarea class="form-control" id="editor1" name="notice" placeholder="Enter Courses Description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <label>Notice Images</label>
                                                            <input type="file" name="images" accept="image/*">
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
                                                <button type="submit" class="btn btn-primary">Save Notice</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>
                            Notice Table
                        </h2>
                        @if(Session::get('message'))
                            <p class="alert alert-success" style="text-align: center" id="xyz">{{ Session::get('message') }}</p>
                        @endif
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Images</th>
                                    <th>Notice</th>
                                    <th>Status</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($show_notice as $key => $notice)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                @if(isset($notice->images))
                                                    <img src="{{ asset('notice-images/'.$notice->images) }}" height="70" width="140">
                                                @else
                                                    <img src="{{ asset ('/assets/back/') }}/images/default.png }}" height="70" width="140">
                                                @endif
                                            </td>
                                            <td>{!! substr($notice->notice,0,100) !!} [...]</td>
                                            <td>{{ $notice->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                            <td>
                                                @if($notice->status == 1)
                                                    <a href="{{ url('/active/notice/'.$notice->id) }}" class="btn btn-success">
                                                        Active
                                                    </a>
                                                @else
                                                    <a href="{{ url('/pending/notice/'.$notice->id) }}" class="btn btn-primary">
                                                        Pending
                                                    </a>
                                                @endif
                                                <a href="{{ url('/delete/notice/'.$notice->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure Delete This')">
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
    <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection