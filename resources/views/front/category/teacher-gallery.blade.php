@extends('front.frontmaster')

@section('slider')
    <section>
        <div class="full" id="courseBanner" style="background-image: url({{ asset('/assets/front/') }}/slider2.jpg);">
            <div class="container">
                <h1 class="bnrHdr" id="link">Teacher Gallery Information</h1>
                <p class="bnrTxt">It all about Teacher Gallery information</p>
            </div>
            <div class="container pd0">
                <div class="bnrBdr"></div>
            </div>
        </div>
    </section>
@endsection


@section('content')
    <section>
        <div class="container">

            <div class="row">
                @foreach($show_teacher_gallery as $teacher_gallery)
                <div class="col-md-6">
                    <div class="techer-info">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive" src="{{ asset('tgallery-images/'.$teacher_gallery->images) }}" alt="Irin">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="teacher-allinfo">
                                    <h4>{{ $teacher_gallery->name }}</h4>
                                    <h5>{{ $teacher_gallery->dept }}</h5>
                                    <ul class="techworklist">
                                        <li>- {{ $teacher_gallery->course_info }}</li>
                                    </ul>
                                </div>
                            </div> <!--.jnn_tcGd end-->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                @endforeach<!-- end of teacher col -->
            </div>
        </div>
    </section>
    @endsection
