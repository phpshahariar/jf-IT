@extends('front.frontmaster')

@section('slider')
    <section>
        <div class="full" id="courseBanner" style="background-image: url({{ asset('/assets/front/') }}/slider2.jpg);">
            <div class="container">
                <h1 class="bnrHdr" id="link">Academy Information</h1>
                <p class="bnrTxt">It all about Academy information</p>
            </div>
            <div class="container pd0">
                <div class="bnrBdr"></div>
            </div>
        </div>
    </section>

@endsection

@section('content')
    <div class="about-bottom inner-padding">
        <div class="container">
            @foreach($show_academy as $academy)
                <h2>{{ $academy->name }}</h2>
                <div class="about-bott-right">
                    <p>{!! $academy->information !!}</p>
                </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
