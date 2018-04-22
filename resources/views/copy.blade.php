@extends('layout.master')
@section('title', '温江顺泰化工|关于我们')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>2,'lang'=>$data['lang']])
@endsection

@section('custom-style')
    <style>
        .post{
            padding: 35px;
            background: #ffffff;
            margin-bottom: 35px;
            position: relative;
            overflow: hidden;
        }
        .post .post-head {
            text-align: center;
        }
        .post .post-head .post-title {
            margin: 0;
            font-size: 2.5em;
            line-height: 1em;
        }
        .post .post-content {
            margin: 30px 0;
        }
        .post-content blockquote {
            margin-left: -24px;
            padding-left: 20px;
            border-width: 4px;
        }
        .post-content blockquote {
            margin: 0 0 1.64em 0;
            margin-left: 0px;
            border-left: 3px solid #e67e22;
            border-left-width: 3px;
            padding-left: 12px;
            color: #666664;
        }
        blockquote {
            padding: 10px 20px;
            padding-left: 20px;
            margin: 0 0 20px;
            font-size: 17.5px;
            border-left: 5px solid #eee;
        }
        .post-content p {
            margin-top: 0;
            margin-bottom: 1.46em;
        }
        .post-content a img {
            border: none;
        }
        .post-content img {
            max-width: 100%;
            height: auto;
            margin: 0.2em 2rem 0 2rem;
            float: right;
        }
        .content-wrap{
            margin-top: 5rem;
        }
        .sidebar .widget {
            background: #ffffff;
            padding: 21px 30px;
        }
        .widget {
            margin-bottom: 35px;
        }
        .widget .title {
            margin-top: 0;
            padding-bottom: 7px;
            border-bottom: 1px solid #ebebeb;
            margin-bottom: 21px;
            position: relative;
        }
        .widget a{
            color: #0f0f0f;
        }
        h4 {
            font-size: 1.5em;
        }
        p {
            margin: 0 0 10px;
        }
        .widget .title::after {
            content: "";
            width: 90px;
            height: 1px;
            background: #00adb5;
            position: absolute;
            left: 0;
            bottom: -1px;
        }
    </style>
@endsection
@section('content')
    {{--//备份代码  轮播图--}}
    {{--工厂环境轮播图--}}
    {{--<div id="example1">--}}
    {{--<section id="team">--}}
    {{--<div class="container">--}}
    {{--<div class="row product_index">--}}
    {{--<h1 class="title text-center wow fadeInDown product_title" data-wow-duration="500ms" data-wow-delay="300ms">企业展示</h1>--}}
    {{--<p class="text-center wow fadeInDown product_subtitle" data-wow-duration="400ms" data-wow-delay="400ms">--}}
    {{--本公司占地500亩，拥有全套生产设备，标准化流水线，专业员工。--}}
    {{--</p>--}}
    {{--<div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">--}}
    {{--<!-- Indicators -->--}}
    {{--<ol class="carousel-indicators visible-xs">--}}
    {{--<li data-target="#team-carousel" data-slide-to="0" class="active"></li>--}}
    {{--<li data-target="#team-carousel" data-slide-to="1"></li>--}}
    {{--</ol>--}}
    {{--<!-- Wrapper for slides -->--}}
    {{--<div class="carousel-inner">--}}
    {{--<div class="item active">--}}
    {{--@if($data['about']->picture != null)--}}
    {{--<?php--}}
    {{--$pics = explode(';', $data['about']->picture);--}}
    {{--?>--}}
    {{--@foreach($pics as $pic)--}}
    {{--<?php $temp = explode('@', $pic);?>--}}
    {{--<div class="col-sm-3 col-xs-6">--}}
    {{--<div class="team-single-wrapper">--}}
    {{--<div class="team-single">--}}
    {{--<div class="person-thumb">--}}
    {{--<img src="{{$temp[1]}}" class="img-responsive" alt="">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="person-info">--}}
    {{--<h3>{{$temp[0]}}</h3>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</section>--}}
    {{--</div>--}}
@endsection
@section('footer')
    @include('components.myfooter')
@endsection
@section('custom-script')
@endsection