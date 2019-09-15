@extends('front.frontmaster')

@section('slider')
    <section id="r_slider">

        <div class="tp-banner-container">
            <div class="tp-banner" id="cit-home-banner">
                <ul>
                    @foreach($show_slider as $slider)
                        <li data-transition="slotfade-hor" data-slotamount="15" data-masterspeed="500" >
                            <img src="{{ asset('slider-images/'.$slider->image) }}" alt="" data-bgposition="center center" data-bgrepeat="no-repeat">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>

@endsection

@section('content')
    <section >
        <div class="container pd0 marT20 hmCrs" >
            <div class="col-md-6 pd0 citCourse wow fadeInLeft" data-nahian-offset="200">
                <div class="col-md-12 pd0 citTitle" style="background-color: #0D47A1;">our courses</div>
                <div class="col-md-12 pd0" id="crsBody">
                    @foreach($show_courses as $courses)
                    <div class="col-sm-3 col-xs-3 pd0">
                        <div class="">
                            <a href="">
                                <img class="img-responsive" src="{{ asset('courses-images/'.$courses->images) }}" alt="">

                            </a>
                        </div>
                        <!--crsBody end-->
                    </div>
                    @endforeach
                </div><!--#crsBody end-->
            </div><!--creative courses end-->
            <div class="col-md-6 pd0 citCourse wow fadeInRight" data-nahian-offset="200">
                <div class="col-md-12 pd0 citTitle" style="background-color: #0D47A1;">UPCOMING SEMINAR</div>
                <div class="col-md-12 pd0 upcoming">
                    <div id="seminar_n" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#seminar_n" data-slide-to="0" class="active"></li>
                            <li data-target="#seminar_n" data-slide-to="1"></li>
                            <li data-target="#seminar_n" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="{{ asset('/assets/front/') }}/images/seminar-p.jpg" alt="stu-high">
                            </div>
                            @foreach($show_seminar as $seminar)
                            <div class="item">
                                <img src="{{ asset('seminar-images/'.$seminar->images) }}" alt="stu-high">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!--UPCOMING event end-->
            <div class="col-md-6 pd0 citCourse wow fadeInLeft" data-nahian-offset="200">
                <div class="col-md-12 pd0 citTitle" style="background-color: #0D47A1;">STUDENT HIGHLIGHT</div>
                <div class="col-md-12 pd0">
                    <div id="nahian_stuHightLight" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#nahian_stuHightLight" data-slide-to="0" class="active"></li>
                            <li data-target="#nahian_stuHightLight" data-slide-to="1"></li>
                            <li data-target="#nahian_stuHightLight" data-slide-to="2"></li>
                            <li data-target="#nahian_stuHightLight" data-slide-to="3"></li>
                            <li data-target="#nahian_stuHightLight" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="#" target="_blank" title="Click Here"><img src="{{ asset('/assets/front/') }}/images/gallery-1.jpg" alt="stu-high"></a>
                            </div>
                            @foreach($show_stu_work as $stu_work)
                            <div class="item">
                                <a href="#" target="_blank" title="Click Here"><img src="{{ asset('student-images/'.$stu_work->images) }}" alt="stu-high"></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div><!--STUDENT HIGHLIGHT end-->
            <div class="col-md-6 pd0 citCourse wow fadeInRight" data-nahian-offset="200">
                @foreach($show_institute as $institute)
                <div class="col-md-12 pd0 spotLight">
                    <a target="_blank" href="#">
                        <img class="img-responsive" src="{{ asset('institute-images/'.$institute->images) }}" alt="">
                        <div class="spotLightTxt">
                            <p><span>INSTITUTE</span><br>SPOTLIGHT</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div><!--Spotlight part end-->
            <div class="col-md-12 pd0">
                <div class="col-md-6 pd0 citCourse wow fadeInLeft" data-nahian-offset="200">
                    @foreach($show_achievement as $achievement)
                    <div class="col-md-12 pd0 citMedia">
                        <img class="img-resopnsive" src="{{ asset('achievements-images/'.$achievement->images) }}" alt="cit-media-bg">
                        <div class="citMediaTxt">
                            <p><span>JF IT</span>
                                <br>media</p>
                            <br>
                            <i>10 Best women’s freelancers Achievement in outsourcing ... </i>
                        </div>
                    </div>
                    @endforeach
                </div><!--Media part end-->
                <div class="col-md-6 pd0 citCourse wow fadeInRight" data-nahian-offset="200">
                    <div class="col-md-12 pd0 citTitle" style="background-color: #0D47A1;">STUDENT workplaces</div>
                    @foreach($show_workplace as $workplace)
                    <div class="col-md-12 pd0 upcoming">
                        <img class="img-resopnsive" src="{{ asset('work-images/'.$workplace->images) }}" alt="stu-wp-bg">
                    </div>
                    @endforeach
                </div><!--UPCOMING event end-->
            </div>
        </div><!--container end-->
    </section>
    <div class="modal video">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="background-color: #0D47A1;">Students Achivement</h4>
                </div>
                <img class="img-resopnsive" src="{{ asset('/assets/front/') }}/images/stu-wp-bg.jpg" alt="stu-wp-bg">
            </div>
        </div>
    </div>
    <section>
        <div class="container pd0 marB20">
            <div class="col-md-4 col-sm-6 stuAchivments wow fadeInLeft" data-nahian-offset="200">
                <p>student</p>
                <h3>achievements <a href="stu_achivments.php" class="pull-right" style="background-color: #0D47A1;">all achievements</a></h3>
                <a id="video" href="" data-src="HzxPO14PfOU">
                    <img class="img-responsive" src="{{ asset('/assets/front/') }}/images/stu-achv.png" alt="">
                </a>
            </div><!--student achivments end-->
            <div class="col-md-4 col-sm-6 stuAchivments wow fadeInUp" data-nahian-offset="200">
                <p>student</p>
                <h3>feedback <a href="stu-feedback.php" class="pull-right" style="background-color: #0D47A1;">all feedback</a></h3>
                <div id="stuFeeds" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#stuFeeds" data-slide-to="0" class="active"></li>
                        <li data-target="#stuFeeds" data-slide-to="1"></li>
                        <li data-target="#stuFeeds" data-slide-to="2"></li>
                        <li data-target="#stuFeeds" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <p>
                                Best IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment.
                                so i rate it ★★★★★ recommended.</p>
                            <span class="fa fa-quote-left"></span>
                            <br>
                            <b><em>Admin</em></b>
                            <br>
                        </div>
                        @foreach($show_feedback as $feedback)
                        <div class="item">
                            <p>{!! $feedback->message !!}</p>

                            <br>
                            <b><em>{!! $feedback->name !!}</em></b>
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div><!--student feedback end-->
            <div class="col-md-4 stuAchivments bdr0 wow fadeInRight" data-nahian-offset="200">
                <b><u>For registration</u></b>
                <form class="cConu" action="#" method="post">
                    <label>Enter Your Full Name</label>
                    <input class="form-control" type="text" required name="fname" placeholder="Full Name">
                    <label>Enter Your Phone</label>
                    <input class="form-control" type="text" required name="phone" placeholder="Phone">
                    <label>Enter Your Email</label>
                    <input class="form-control" type="email" required name="email" placeholder="Email">
                    <label>Select Your Course</label>
                    <select class="form-control" name="course" required>
                        @foreach($show_courses as $courses)
                            <option></option>
                            <option value="{{ $courses->id }}">{{ $courses->name }}</option>
                        @endforeach
                    </select>
                    <br/>
                    <input class="form-control cCsubmit" type="submit" value="SUBMIT">
                </form>
            </div><!--career counselling end-->
        </div><!--container end-->


    </section>
    <section>
        <div class="full marT20 marB20">
            <a href="http://www.bteb.gov.bd/" target="_blank">
                <img class="ps1 img-responsive" src="{{ asset('/assets/front/') }}/images/banner_2.png" alt="">
                <img class="ps2 img-responsive" src="{{ asset('/assets/front/') }}/images/banner_mobile.png" alt="">
            </a>
        </div>
    </section>
@endsection
