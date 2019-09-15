@extends('front.frontmaster')

@section('slider')
    <section>
        <div class="full" id="courseBanner" style="background-image: url({{ asset('/assets/front/') }}/slider2.jpg);">
            <div class="container">
                <h1 class="bnrHdr" id="link">Our Courses Information</h1>
                <p class="bnrTxt">It all about Individual Courses information</p>
            </div>
            <div class="container pd0">
                <div class="bnrBdr"></div>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <section>
        <div class="container pd0 courseDet">
            <div class="col-md-12 pd0">
                <div class="col-md-4 col-sm-3 pd0">
                    <div class="naCrs">
                        <div class="courseBdr">courses</div>
                        <div class="allCrs">
                            <ul>
                                @foreach($show_courses as $courses)
                                <li><span>=></span><a href="#">{{ $courses->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 pd0 crsHead">
                    @foreach($courses_info as $info)
                        <p class="col-md-10">{{ $info->name }}</p>
                        <img src="{{ asset('courses-images/'.$info->images) }}" alt="img" class="img-responsive" style="height: 350px;"/>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container pd0">
            <div class="col-md-4 crsall col-sm-4 pd0">
                <h2>student's feedback</h2>
                <div class="crsfb">
                    <div id="jnn_stfbka" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <p class="fa fa-quote-left"></p>
                                <p>
                                    It was a great opportunity for the student to work together on some common goals. The training was a valuable first step toward becoming a growth generation.
                                </p>
                                <p class="cdt01">IQBAL AHMED</p>
                            </div>
                            @foreach($show_feedback as $feedback)
                            <div class="item">
                                <p>
                                    {!! $feedback->message !!}
                                </p>
                                <p class="cdt01">{!! $feedback->name !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="crsfb01">
                    <img class="img-responsive" src="{{ asset('/assets/front/') }}/images/phn_c.png" alt="">
                    <p class="crsMi">
                        MORE INFORMATION?
                    </p>
                    <p class="crsCu">
                        Call us
                        <br><span>+8801839099240, +8801712131550</span>
                    </p>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 crsDes">
                <h4>Overview</h4>
                @foreach($courses_info as $info)
                <p>
                    {!! $info->description !!}
                </p>
                @endforeach
            </div>
        </div>
        </section>
@endsection
