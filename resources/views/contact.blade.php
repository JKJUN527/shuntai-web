@extends('layout.master')
@section('title', '温江顺泰化工|联系我们')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>6,'lang'=>$data['lang']])
@endsection

@section('custom-style')
    <link href="css/animate.min.css" type="text/css" rel="stylesheet">
    <style>
        .padding {
            padding: 65px 0 0 0;
        }
        #company-information p {
            /*padding-top: 172px;*/
            font-size: 1.8rem;
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
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/aboutus/icon1.png" alt="">
                        </div>
                        <h2>优势服务介绍1</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/aboutus/icon2.png" alt="">
                        </div>
                        <h2>优势服务介绍2</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/aboutus/icon3.png" alt="">
                        </div>
                        <h2>优势服务介绍3</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->
    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="{{explode('@',explode(';',$data['about']->picture)[0])[1]}}" class="img-responsive" alt="" width="200" height="200">
                </div>
                <div class="col-sm-9 padding-top">
                    <p>{{$data['about']->brief}}</p>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">公司环境</h1>
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
                            @if($data['about']->picture != null)
                                <?php
                                $pics = explode(';', $data['about']->picture);
                                ?>
                                @foreach($pics as $pic)
                                    <?php $temp = explode('@', $pic);?>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="team-single-wrapper">
                                            <div class="team-single">
                                                <div class="person-thumb">
                                                    <img src="{{$temp[1]}}" class="img-responsive" alt="">
                                                </div>
                                            </div>
                                            <div class="person-info">
                                                <h3>{{$temp[0]}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
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
                    <h2>@if($data['lang'] == 1) 联系方式 @else Contacts @endif</h2>
                    <address>
                        <p> @if($data['lang'] == 1) 邮箱 @else E-mail @endif: <a href="mailto:{{$data['about']->email}}">{{$data['about']->email}}</a></p>
                        <p> @if($data['lang'] == 1) 电话 @else Phone  @endif: {{$data['about']->tel}}</p>
                        <p> @if($data['lang'] == 1) 传真 @else Fax    @endif: {{$data['about']->fax}}</p>
                    </address>

                    <h2>@if($data['lang'] == 1) 公司地址 @else Address @endif</h2>
                    <address>
                       <p>{{$data['about']->address}}</p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="contact-form bottom">
                    {{--<h2>联系我们</h2>--}}
                    <form id="main-contact-form" name="contact-form" method="post">
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
    <script>
        $('#main-contact-form').submit(function (event) {
            event.preventDefault();
            var name = $('input[name="name"]').val();
            var email = $('input[name="email"]').val();
            var message = $('textarea[name="message"]').val();
            var formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('message', message);
            $.ajax({
                url: "/message/add",
                type: "post",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function (data) {
                    var result = JSON.parse(data);
//                    console.log(result);
                        alert(result.msg);
                        return;
                }
            })
        });
    </script>
@endsection