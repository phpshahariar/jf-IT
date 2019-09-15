@extends('front.frontmaster')
@section('slider')
    <section>
        <div class="full" id="courseBanner" style="background-image: url({{ asset('/assets/front/') }}/slider2.jpg);">
            <div class="container">
                <h1 class="bnrHdr" id="link">Notice</h1>
                <p class="bnrTxt">It all about JF IT Institute Notice Board</p>
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
            <h3 class="heading-agileinfo"><span>Notice Board</span></h3>
            @foreach($show_notice as $notice)
                @if(isset($notice->images))
                    <img src="{{ asset('notice-images/'.$notice->images) }}" height=100% width=100%>
                @else
                    <img src="{{ asset ('/assets/back/') }}/images/default.png }}" height=100% width=100%>
                @endif
            <div class="about-bott-right">
                <h5>Why This Notice</h5>
                    <p>{!! $notice->notice !!}</p>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
