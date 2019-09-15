@extends('front.frontmaster')

@section('slider')
    <section>
        <div class="full" id="courseBanner" style="background-image: url({{ asset('/assets/front/') }}/slider2.jpg);">
            <div class="container">
                <h1 class="bnrHdr" id="link">Student Gallery Information</h1>
                <p class="bnrTxt">It all about Student Gallery information</p>
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
            <div id="port" class="gallery">
                @foreach($show_student_gallery as $student_gallery)
                <a class="col-md-3 col-sm-4 col-xs-6 pd0" href="{{ asset('sgallery-images/'.$student_gallery->images) }}">
                    <img class="img-responsive" src="{{ asset('sgallery-images/'.$student_gallery->images) }}" />
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
