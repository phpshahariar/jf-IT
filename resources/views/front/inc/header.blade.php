<header>
    <section class="header-top full" style="background-color: #0D47A1;">
        <div class="container">
            <div class="col-md-12 pd0">
                <div class="lattest-news">
                    <b class="col-md-2 pd0">LATEST NEWS <span class="fa fa-caret-right"></span></b>
                    <marquee class="col-md-10 pd0" scrolldelay="10" scrollamount="3">
                        <!--Join Creative IT Institute Free Seminar: Graphics Design, Web Design, Web Development, APPS Development, CCNA, SEO.-->
                        Friday Free Seminars 02.08.19 &gt;&gt; Web Design &amp; Development @ 11.00 AM &gt;&gt; Graphic Design @ 4.00 PM &gt;&gt; 3D Animation @ 4.00 PM &gt;&gt; App Development @ 4.00 PM                                </marquee>
                </div><!--lattest-news ends-->
            </div><!--col-md-6 ends-->
            <!--col-md-3 ends-->
        </div><!--container end-->
    </section><!--header-top end-->
    <section class="header">
        <div class="container">
            <div class="col-md-9 col-sm-9 pd0" style="border: 0px solid #0f0f0f;">
                <div class="row">
                    <div class="logo col-md-2">
                        <a class="navbar-brand" href="{{ url('/') }}" style="margin-bottom: 50px;">
                            <img src="{{asset('logo.jpg')}}" height="70" width="120">
                        </a>
                    </div>
                    <div class="col-md-10" style="border: 0px solid #0D47A1;">
                        <h1 style="font-size: 45px; margin-left: 100px; margin-top: 50px; color: red;">Jasim & Feroze IT Institute</h1>
                    </div>
                </div><!--logo ends-->
            </div>
            <div class="col-md-3 col-sm-3 header-menu pd0">
                <ul class="list-inline">
                    <li><img src="{{ asset('/assets/front/') }}/images/dot.png" alt=""><a href="#">ABOUT US</a></li>
                    <li><img src="{{ asset('/assets/front/') }}/images/dot.png" alt=""><a href="#">FRANCHISE</a></li>
                    <li><img src="{{ asset('/assets/front/') }}/images/dot.png" alt=""><a href="#">BLOG</a></li>
                </ul>
                <!--<a href="https://play.google.com/store/apps/details?id=cit.institute.psajm" target="_blank">-->
                <!--    <img class="img-responsive" src="images/download-app.png" alt="">-->
                <!--</a>-->
                <a style="color:#fff;font-family: roboto;background: #bd070e;border-radius:6px;font-size:14px; padding: 5px 10px;font-weight:700;margin:20px 0;" href="https://www.facebook.com/JFTraders247/" target="_blank">
                    JOIN FACEBOOK CLUB
                </a>
            </div><!--col-md-4 end-->
        </div><!--container end-->
    </section><!--header ends-->
</header><!--header part ends here-->
<div id="nav-n-slider">
    <nav class="navbar navBg" role="navigation">
        <div class="container pd0">
            <div class="col-md-10 col-sm-10 pd0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nahianNav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--navbar-header end-->
                <div class="collapse navbar-collapse" id="nahianNav">
                    <ul class="navbar-nav">
                        <li><a href="index.php" class="active" style="background-color: #0D47A1;">home</a>
                        </li>
                        <li class="dropdown">
                            <a href="courses.php#link" >COURSES</a>
                            <ul class="megaMenu dropdown-menu">
                                <div class="nmMenu">
                                    @foreach($show_courses as $courses)
                                    <li class="nm01">
                                        <a href="{{ url('/course-page/'.$courses->id) }}" target="_blank">
                                            <div class="icon text-center">
                                                @if(isset($courses->images))
                                                    <img src="{{ asset('courses-images/'.$courses->images) }}" height="40" width="40">
                                                @else
                                                    No Course Image Found
                                                @endif
                                            </div>
                                            <div class="text">
                                                <h4>{{ $courses->name }}</h4>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                    <!--/.nm01-->
                                    <!--nm01-->
                                </div>
                                <!--nmMenu-->
                            </ul>
                            <!--megaMenu-->
                        </li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" >Academy Info</a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($show_category as $category)
                                    <li><a href="{{ url('/academy/info/'.$category->id) }}" target="_blank">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        </li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" >GALLERIES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/student/gallery') }}">Student Gallery </a></li>
                                <li><a href="{{ url('/teacher/gallery') }}">Teachers Gallery</a></li>
                            </ul>
                        </li>
                        </li>
                        <li><a href="{{ url('/notice') }}" target="_blank">NOTICE</a></li>
                        <li><a href="#contact" >CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <!--col-md-10 end-->
            <div class="col-md-2 col-sm-2 apply text-right">
{{--                <a class="wow fadeInRight" data-nahian-delay=".5s" href="#" data-toggle="modal" data-target="#myModal1">Apply Now</a>--}}
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4>Registration Form</h4>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Full Name....">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email....">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone Number</label>
                                        <input type="number" name="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Phone Number....">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Registration</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container end-->
    </nav>
    <!--navbar end-->
    <style media="screen">
        #modalOverlay {
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99999;
            height: 100%;
            width: 100%;
        }
        .modalPopup {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
        }
        @media (min-width: 320px) and (max-width: 575px) {
            .modalPopup {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: #fff;
            }
            .modalPopup a img{
                height: 170px !important;
            }
        }
        .modalContent {padding: 0 2em;}
        .headerBar {
            width: 100%;
            background: #5E2396;
            margin: 0;
            text-align: center;
        }
        .headerBar img {
            margin: 1em .7em;
        }
        h1 {
            margin-bottom: .2em;
            font-size: 26px;
            text-transform: capitalize;
        }
        p {margin: .75em 0 1.5em;}
        .buttonStyle {
            border: transparent;
            border-radius: 0;
            background: #6d6d6d;
            color: #eee !important;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
            text-transform: uppercase;
            padding: 6px 25px;
            text-decoration: none;
            background: -moz-linear-gradient(top, #6d6d6d 0%, #1e1e1e 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6d6d6d), color-stop(100%,#1e1e1e));
            background: -webkit-linear-gradient(top, #6d6d6d 0%,#1e1e1e 100%);
            background: -o-linear-gradient(top, #6d6d6d 0%,#1e1e1e 100%);
            background: -ms-linear-gradient(top, #6d6d6d 0%,#1e1e1e 100%);
            background: linear-gradient(to bottom, #6d6d6d 0%,#1e1e1e 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6d6d6d', endColorstr='#1e1e1e',GradientType=0 );
            /*	-webkit-box-shadow: 0 2px 4px 0 #999;
              box-shadow: 0 2px 4px 0 #999; */
            -webkit-transition: all 1s ease;
            -moz-transition: all 1s ease;
            -ms-transition: all 1s ease;
            -o-transition: all 1s ease;
            transition: all 1s ease;
        }
        .buttonStyle:hover {
            background: #1e1e1e;
            color: #fff;
            background: -moz-linear-gradient(top, #1e1e1e 0%, #6d6d6d 100%, #6d6d6d 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e1e1e), color-stop(100%,#6d6d6d), color-stop(100%,#6d6d6d));
            background: -webkit-linear-gradient(top, #1e1e1e 0%,#6d6d6d 100%,#6d6d6d 100%);
            background: -o-linear-gradient(top, #1e1e1e 0%,#6d6d6d 100%,#6d6d6d 100%);
            background: -ms-linear-gradient(top, #1e1e1e 0%,#6d6d6d 100%,#6d6d6d 100%);
            background: linear-gradient(to bottom, #1e1e1e 0%,#6d6d6d 100%,#6d6d6d 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e1e1e', endColorstr='#6d6d6d',GradientType=0 );
        }
        .returnToProfile {text-align: center; margin:3em;}
        .returnToProfile a, .returnToProfile a:visited {color: #ddd;}
        .returnToProfile a:hover {color: #fff;}
    </style>

    <!-- <div id="modalOverlay">
      <div class="modalPopup">
        <a href="https://pdksevent.com" target="_blank">
          <img src="https://www.creativeit-inst.com/images/pdks_popup.png" alt="popup not found" height="300">
        </a>
      </div>
    </div> -->
    <!-- <script type="text/javascript">
    window.onload = function() {
      document.getElementById('button').onclick = function() {
        document.getElementById('modalOverlay').style.display = 'none'
      };
    };
    document.onmouseup = function() {
      var container = document.getElementById('modalOverlay');

      // If the target of the click isn't the container
      if(!container.is(e.target) && container.has(e.target).length === 0){
          document.getElementById('modalOverlay').style.display = 'none'
      }
    };

    window.addEventListener('click', function(e){
      if (document.getElementById('modalOverlay').contains(e.target)){
        // Clicked in box
      } else{
              document.getElementById('modalOverlay').style.display = 'none'
      }
    });

    </script> -->
    <script>
        window.onload = function(){
            var hideMe = document.getElementById('modalOverlay');
            document.onclick = function(e){
                if(e.target.id !== 'hideMe'){
                    modalOverlay.style.display = 'none';
                }
            };
        };
    </script>
