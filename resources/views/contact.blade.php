@extends('layout.master')
@section('title', '温江顺泰化工|联系我们')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>6])
@endsection

@section('custom-style')
    <link href="css/animate.min.css" type="text/css" rel="stylesheet">
    <style>
        .padding {
            padding: 65px 0;
        }
        #company-information .padding-top {
            padding-top: 172px;
        }
        #team {
            padding: 85px 0;
        }
        .title {
            color: #404040;
            font-weight: 300;
        }
        .single-service img {
            height: 85px;
        }
        .single-service img {
            margin-bottom: 35px;
        }
        #team-carousel {
            margin-top: 80px;
        }
        .contact-info{
            background: #ffffff;
            padding: 21px 30px;
        }
        .contact-info h2{
            margin-top: 0;
            padding-bottom: 7px;
            border-bottom: 1px solid #ebebeb;
            margin-bottom: 21px;
            position: relative;
        }
        .contact-info p{
            margin: 0 0 10px;
        }
        .contact-info h2::after {
            content: "";
            width: 90px;
            height: 1px;
            background: #e67e22;
            position: absolute;
            left: 0;
            bottom: -1px;
        }
        .btn-submit {
            width: 100%;
            background-color: #4fcccd;
            color: #fff;
            font-size: 14px;
            font-weight: 300;
            letter-spacing: 5px;
            text-transform: uppercase;
            border-radius: 3px;
            margin-top: 5px;
            border-bottom: 3px solid #2f9697;
            box-shadow: none;
            padding: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="about_banner">
        <div class="container">
            <h2>顺泰化工</h2>
            <span class="breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>联系我们</span></span>
        </div>
    </div>
    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/aboutus/1.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top">
                    <p>Shoulder bresaola sausage consequat ground round duis excepteur exercitation landjaeger sunt. Duis officia sed frankfurter dolore pastrami tenderloin.</p>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/aboutus/icon1.png" alt="">
                        </div>
                        <h2>Incredibly Responsive</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/aboutus/icon2.png" alt="">
                        </div>
                        <h2>Superior Typography</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/aboutus/icon3.png" alt="">
                        </div>
                        <h2>Swift Page Builder</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Meet the Team</h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                    Ut enim ad minim veniam, quis nostrud </p>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Doe</h2>
                                        <p>CEO &amp; Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/2.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Doe</h2>
                                        <p>CEO &amp; Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/3.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Doe</h2>
                                        <p>CEO &amp; Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Doe</h2>
                                        <p>CEO &amp; Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/4.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Doe</h2>
                                        <p>CEO &amp; Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/3.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Doe</h2>
                                        <p>CEO &amp; Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/2.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Doe</h2>
                                        <p>CEO &amp; Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Doe</h2>
                                        <p>CEO &amp; Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="raw">
            <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">联系我们</h1>
            <p class="text-center wow fadeInDown" style="margin-bottom: 80px;" data-wow-duration="400ms" data-wow-delay="400ms">
                欢迎您光临本公司网站，请您填写以下信息，我们将会与您保持联系，谢谢!
            </p>
            <div class="col-md-4 col-sm-6">
                <div class="contact-info bottom">
                    <h2>Contacts</h2>
                    <address>
                        <p> E-mail: <a href="mailto:someone@example.com">email@email.com</a></p>
                        <p> Phone: +1 (123) 456 7890 </p>
                        <p> Fax: +1 (123) 456 7891 </p>
                    </address>

                    <h2>Address</h2>
                    <address>
                       <p> Unit C2, St.Vincent's Trading Est.,
                        Feeder Road,
                        Bristol, BS2 0UY
                        United Kingdom </p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="contact-form bottom">
                    {{--<h2>联系我们</h2>--}}
                    <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Your text here"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>

@endsection
@section('footer')
    @include('components.myfooter')
@endsection
@section('custom-script')
@endsection