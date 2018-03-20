@extends('layout.master')
@section('title', '新闻详情|温江顺泰化工')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>3])
@endsection

@section('custom-style')
    <link media="all" href="css/news.css" type="text/css" rel="stylesheet">
    <style>
        .news_tab ul li {
            float: left;
            margin-bottom: 0;
            width: 100px;
            height: 46px;
            line-height: 46px;
            text-align: center;
            font-size: 16px;
            color: #08c;
            cursor: pointer;
        }
        .news_tab ul{
            background-color: #fff;
            /*padding-left: 10%;*/
        }
        .news_tab .active  a{
            color: #fff!important;
        }
        .news_tab .active {
            background-color: #08c!important;
        }
        nav#page_tools ul li:hover,nav#page_tools ul li.active{
            background-color: #03A9F4;
            color: #fff!important;
        }
        nav#page_tools ul li:hover a{
            color: #fff!important;
        }
        nav#page_tools ul li a,nav#page_tools ul li span{
            display: inline-block;
            padding: 15px;
        }
        nav#page_tools ul li {
            display:inline-block;
            margin-bottom: 0px;
            cursor: pointer;
        }
        nav#page_tools{
            margin: 20px auto;
            text-align: center;
        }
        #page_tools li{
            padding: 0;
        }
        .containter {
            width: 1000px;
            margin: 0 auto;
            padding-bottom: 15px;
            margin-top: 20px;
            min-height: 560px;
        }
    </style>
@endsection
@section('content')
    <div class="about_banner">
        <div class="container">
            <h2>顺泰化工</h2>
            <span class="breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>新闻动态</span> / <span>新闻详情</span></span>
        </div>
    </div>
    <div class="containter" style="margin-top: 20px;">
        <div class="info-panel">
            <div class="mdl-card mdl-shadow--2dp info-card news-detail">
                <div class="mdl-card__title">
                    <h5 class="mdl-card__title-text" data-content="624">
                        LPL周最佳阵容：卡萨领衔RW下路入选
                    </h5>
                </div>

                <div class="mdl-card__actions mdl-card--border base-info--panel">

                    <label><span>责任编辑: admin</span></label>
                    <label><span>发布时间: 2018-03-19</span></label>

                    <label><i class="material-icons">comment</i> <span>0</span></label>
                </div>

                <div class="mdl-card__supporting-text">

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