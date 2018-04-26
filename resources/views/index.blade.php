@extends('layout.master')
@section('title', '温江顺泰化工|首页')

@section('header-tab')
    @include('components.headerTab',['lang'=>$data['lang']])
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>1,'lang'=>$data['lang']])
@endsection

@section('custom-style')
    <link href="css/index.css" rel='stylesheet' type='text/css' />
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
        .about{
            background-color: white;
            /*height: 500px;*/
            padding-bottom: 5rem;
        }
        .about .product_title{
            color: white;
        }
        .about .product_subtitle{
            color: white;
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
        .feature-box img{
            width: 15rem;
            height: 15rem;
        }
        .flex-control-nav{
            bottom: 0px !important;
        }
        .qingfusuan_xsygg2 {
            background: url({{asset('images/dtz.jpg')}}) no-repeat center 0;
            height: 930px;
            display: block;
            width: 80%;
            margin-left: 10%;
        }
    </style>

@endsection
@section('content')
    <section class="slider">
        <div id="slider" class="flexslider">
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
                        <div class="images">
                            <img src="images/banner_1.jpg" alt=""/>
                        </div>
                    </li>
                    <li clearfix>
                        <div class="images">
                            <img src="images/banner_3.png" alt=""/>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
        <div class="clearfix"> </div>
    </section>
    <div class="module">
        <div class="center index-center">
            <div class="kwicks">
                <div class="kwick first" style="width: 655px;">
                    <div> <span class="icon icon01" style="background-color: #00adb5;"></span>
                        <div class="kwick-nr"> <a href="/advantage">
                                <p><img src="{{asset('images/20140216214449602.jpg')}}" alt=""></p>
                                <h3>{{$data['about']->advantage}}</h3>
                            </a> </div>
                    </div>
                </div>
                {{--<div class="kwick " style="width: 115px;">--}}
                    {{--<div> <span class="icon icon03" style="background-color: transparent;"></span>--}}
                        {{--<div class="kwick-nr"> <a href="/cn/yxwl/">--}}
                                {{--<p><img src="/cn/templets/web/images/20140216214514346.jpg" alt=""></p>--}}
                                {{--<h3>国内业务：云南、四川、重庆、贵州、广西、广东、福建、河南、湖南、湖北、河南、陕西、山东、江苏、上海、辽宁、黑龙江、乌鲁木齐、青海、北京、河北等<br>国外业务：欧洲，北美，南美，日本，东南亚等</h3>--}}
                            {{--</a> </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="kwick " style="width: 115px;">--}}
                    {{--<div> <span class="icon icon02" style="background-color: transparent;"></span>--}}
                        {{--<div class="kwick-nr"> <a href="/cn/lxwm/">--}}
                                {{--<p><img src="/cn/templets/web/images/20140216214544822.jpg" alt=""></p>--}}
                                {{--<h3>--}}
                                    {{--秦先生：13987616689<br>--}}
                                    {{--张小姐：13708886247    15752896870<br>--}}
                                {{--</h3>--}}
                            {{--</a> </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="con_01">
        <div class="product_index index_title">
            <p class="product_title">产品中心
                {{--<span>Product</span>--}}
            </p>
            <p class="product_subtitle">Product</p>
            <p class="product_subtitle">主营酸类、碱类、盐类、化学试剂等</p>
        </div>
        <div class="box">
            <ul>
                <li>
                    <dl>
                        <dt>
                            <div class="fl span01">酸类</div>
                            <div class="fr pt5"><a href="/products?ptype=3" style="color:#5fa4e9;font-family:Arial;font-size:10px;">MORE&gt;</a></div>
                            <div class="cle"></div>
                        </dt>
                        <dd><img src="{{asset('images/type1.jpg')}}"></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <div class="fl span01">碱类</div>
                            <div class="fr pt5"><a href="/products?ptype=5" style="color:#5fa4e9;font-family:Arial;font-size:10px;">MORE&gt;</a></div>
                            <div class="cle"></div>
                        </dt>
                        <dd><img src="{{asset('images/type2.jpg')}}"></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <div class="fl span01">盐类</div>
                            <div class="fr pt5"><a href="/products?ptype=6" style="color:#5fa4e9;font-family:Arial;font-size:10px;">MORE&gt;</a></div>
                            <div class="cle"></div>
                        </dt>
                        <dd><img src="{{asset('images/type3.jpg')}}"></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <div class="fl span01">化学试剂</div>
                            <div class="fr pt5"><a href="/products?ptype=7" style="color:#5fa4e9;font-family:Arial;font-size:10px;">MORE&gt;</a></div>
                            <div class="cle"></div>
                        </dt>
                        <dd><img src="{{asset('images/type4.jpg')}}"></dd>
                    </dl>
                </li>
            </ul>
            <div class="cle"></div>
        </div>
    </div>
    {{--<div class="product_center">--}}
        {{--<div class="product_index index_title">--}}
            {{--<p class="product_title">产品中心--}}
            {{--<span>Product</span>--}}
            {{--</p>--}}
            {{--<p class="product_subtitle">主营化学试剂、塑料助剂、食品添加剂、医药中间体、化工原料等。</p>--}}
        {{--</div>--}}
        {{--<div class="icons_box1">--}}
            {{--<div class="col-sm-6 box_1">--}}
                {{--<div class="feature-box">--}}
                    {{--<i class="fa fa-meh-o face"></i>--}}
                    {{--<img src="{{asset('images/type1.jpg')}}"/>--}}
                    {{--<h4>酸类</h4>--}}
                    {{--<p>acid</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 box_3">--}}
                {{--<div class="feature-box">--}}
                    {{--<i class="fa fa-bullseye face"></i>--}}
                    {{--<img src="{{asset('images/type2.jpg')}}"/>--}}
                    {{--<h4>碱类</h4>--}}
                    {{--<p>alkali</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
        {{--<div class="icons_box2">--}}
            {{--<div class="col-sm-6 box_1">--}}
                {{--<div class="feature-box">--}}
                    {{--<i class="fa fa-html5 face"></i>--}}
                    {{--<img src="{{asset('images/type3.jpg')}}"/>--}}
                    {{--<h4>盐类</h4>--}}
                    {{--<p>salt</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 box_3">--}}
                {{--<div class="feature-box">--}}
                    {{--<i class="fa fa-thumbs-o-up face"></i>--}}
                    {{--<img src="{{asset('images/type4.jpg')}}"/>--}}
                    {{--<h4>化学试剂</h4>--}}
                    {{--<p>Chemical Reagents</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="about">
        <div class="product_index index_title" style="padding-top: 1.5rem; padding-bottom:1.5rem;background-color: #00adb5">
            <p class="product_title">关于我们
                {{--<span></span>--}}
            </p>
            {{--<p class="product_subtitle">{{$data['about']->brief}}</p>--}}
            <p class="product_subtitle">About Us</p>
        </div>
        <div class="about-content">
            {{--<img src="{{asset('images/pic9.jpg')}}">--}}
            <p>&nbsp;&nbsp;&nbsp;&nbsp;{!! $data['about']->describe !!}</p>
        </div>
        <div class="qingfusuan_xsygg2"></div>
    </div>
@endsection
@section('footer')
    @include('components.myfooter')
@endsection
@section('custom-script')
    <script>

    </script>
@endsection