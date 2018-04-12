@extends('layout.master')
@section('title', '温江顺泰化工|首页')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>1,'lang'=>$data['lang']])
@endsection

@section('custom-style')
    <style>
        .product_center{
            width: 80%;
            text-align: center;
            margin-left: 10%;
            margin-bottom: 2rem;
        }
        .index_title{
            text-align: center;
            margin-top: 5rem;
        }
        .product_index .product_title{
            font-size: 25px;
            color: #747474;
            font-family: "microsoft yahei";
            font-weight: bold;
        }
        .product_index .product_subtitle{
            font-size: 14px;
            font-family: "microsoft yahei";
            line-height: 24px;
            color: #626262;
        }
        #example1{
            /*background-color: #56CFCA;*/
            padding-top: 0.5rem;
            height: auto;
            width: 90%;
            margin-left: 5%;
        }
        .address-map{
            /*background-color: #56CFCA;*/
            padding-top: 0.5rem;
            height: 600px;
            /*margin-bottom: 2rem;*/
            width: 90%;
            margin-left: 5%;
            /*margin-bottom: 5rem;*/
        }
        .company_title{
            margin-top: 2rem;
        }
        .text-center{
            /*margin-left: 15%;*/
            margin-top: 2rem;
        }
        .about{
            background-color: white;
            height: 500px;
        }
        .about_top{
            padding-top: 0;
        }
        #team-carousel{
            margin-top: 4rem;
        }

        .about-content{
            margin-top: 4rem;
            margin-bottom: 4rem;
            width: 80%;
            margin-left: 10%;
        }
        .about-content p{
            line-height: 28px;
            font-size: 1.5rem;
        }
        .about-content img{
            float: right;
        }
    </style>

@endsection
@section('content')
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                @if($data['about']->carousel != null)
                    <?php
                    $pics = explode('@', $data['about']->carousel);
                    $baseurl = $pics[0];
                    $imagepath = array_shift($pics);
                    ?>
                    @foreach($imagepath as $item)
                            <li clearfix>
                                <div class="col-sm-6">
                                    <img src="{{$baseurl}}{{$item}}" alt=""/>
                                </div>
                            </li>
                    @endforeach
                @else
                <li clearfix>
                    <div class="col-sm-6 slider_right">
                        <div class="col-sm-12 slider_caption">
                            <h3>Socialnetwork</h3>
                            <h4>Lorem Ipsum</h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/4.png" alt=""/>
                    </div>
                </li>
                <li clearfix>
                    <div class="col-sm-6">
                        <img src="images/9.png" alt=""/>
                    </div>
                    <div class="col-sm-6 slider_left">
                        <div class="col-sm-12 slider_caption1">
                            <h3>Entrepreneurs</h3>
                            <h4>Lorem Ipsum</h4>
                        </div>
                    </div>
                </li>
                @endif
            </ul>
        </div>
        <div class="clearfix"> </div>
    </section>
    <div class="product_center">
        <div class="product_index index_title">
            <p class="product_title">产品中心
            <span>Product</span>
            </p>
            <p class="product_subtitle">主营化学试剂、塑料助剂、食品添加剂、医药中间体、化工原料等。</p>
        </div>
        <div class="icons_box1">
            <div class="col-sm-6 box_1">
                <div class="feature-box">
                    <i class="fa fa-meh-o face"></i>
                    <h4>化学试剂</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="col-sm-6 box_3">
                <div class="feature-box">
                    <i class="fa fa-bullseye face"></i>
                    <h4>食品添加剂</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="icons_box2">
            <div class="col-sm-6 box_1">
                <div class="feature-box">
                    <i class="fa fa-html5 face"></i>
                    <h4>化工原料</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="col-sm-6 box_3">
                <div class="feature-box">
                    <i class="fa fa-thumbs-o-up face"></i>
                    <h4>塑料助剂</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="about">
        <div class="product_index index_title" style="padding-top: 3rem">
            <p class="product_title">关于我们
                <span>About Us</span>
            </p>
            <p class="product_subtitle">{{$data['about']->brief}}</p>
        </div>
        <div class="about-content">
            <img src="{{asset('images/pic9.jpg')}}">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;{!! $data['about']->describe !!}</p>
        </div>
    </div>
    <div id="example1">
        <section id="team">
            <div class="container">
                <div class="row product_index">
                    <h1 class="title text-center wow fadeInDown product_title" data-wow-duration="500ms" data-wow-delay="300ms">企业展示</h1>
                    <p class="text-center wow fadeInDown product_subtitle" data-wow-duration="400ms" data-wow-delay="400ms">
                        本公司占地500亩，拥有全套生产设备，标准化流水线，专业员工。
                    </p>
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
    </div>
@endsection
@section('footer')
    @include('components.myfooter')
@endsection
@section('custom-script')
@endsection