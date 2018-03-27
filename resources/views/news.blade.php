@extends('layout.master')
@section('title', '温江顺泰化工|新闻动态')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>3,'lang'=>$data['lang']])
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
        .news_tab{
            width: 100%;
            height: 46px;
            z-index: 30;
            margin:0;
            position: inherit;
            background-color: #fff;
        }
        .fixed{
            position: fixed;
            top: 0;
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
            width: 1200px;
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
            <span class="breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>新闻动态</span></span>
        </div>
    </div>
<div class="containter">
    <div class="news_info_left info_panel left ">
        <div class="mdl_card_title">
            <h5 class="mdl_card_title_text">最新</h5>
        </div>
        <div class="mdl-card info-card">

            @foreach($data['newest'] as $news)
                <div class="news-body" data-content="{{$news->nid}}">
                    @if($news->picture != null)
                        <?php
                        $pics = explode(';', $news->picture);
                        $baseurl = explode('@', $pics[0])[0];
                        $baseurl = substr($baseurl, 0, strlen($baseurl) - 1);
                        $imagepath = explode('@', $pics[0])[1];
                        ?>
                        <div class="news-aside">
                            <img src="{{$baseurl}}{{$imagepath}}"/>
                        </div>
                    @else
                        <div class="news-aside">
                            <img src="{{asset('images/news_banner.jpg')}}"/>
                        </div>
                    @endif
                    <div class="news-content">
                        <h3><b>
                                {{mb_substr($news->title, 0, 30)}}</b></h3>
                        <p class="content-body">
                            {{--{{mb_substr(str_replace(array("<br>","<br","<b","&nbsp;", "&nbs"),'', $news->content), 0, 40)}}--}}
                            {{mb_substr(str_replace(array("[图片1]","[图片2]"),"",strip_tags($news->content)), 0, 70)}}
                        </p>
                        <small class="content-appendix">
                            <span>责任编辑: {{$news->subtitle or 'admin'}}</span>
                            <span>新闻来源:{{$news->quote}}</span>
                            <span>发布时间:{{mb_substr($news->created_at,0,10,'utf-8')}}</span>
                        </small>
                    </div>
                </div>
            @endforeach
            <nav id="page_tools">
                {!! $data['newest']->render() !!}
            </nav>
        </div>
    </div>

    <div class="news_info_right info_panel right  ">
        <div class="mdl_card_title">
            <h5 class="mdl_card_title_text">最热</h5></div>
        <div class="mdl-card info-card">

            @foreach($data['hottest'] as $news)
                <div class="hot-news-body" data-content="{{$news->nid}}">
                    @if($news->picture != null)
                        <?php
                        $pics = explode(';', $news->picture);
                        $baseurl = explode('@', $pics[0])[0];
                        $baseurl = substr($baseurl, 0, strlen($baseurl) - 1);
                        $imagepath = explode('@', $pics[0])[1];
                        ?>
                        <div class="hot-news-aside">
                            <img src="{{$baseurl}}{{$imagepath}}" />
                        </div>
                    @else
                        <div class="news-aside">
                            <img src="{{asset('images/news_banner.jpg')}}"/>
                        </div>
                    @endif
                    <div class="hot-news-content">
                        <h3><b>{{mb_substr($news->title, 0, 8)}}</</h3>
                        <p class="content-body" style="margin-bottom: 0px;">
                            {{--{{mb_substr(str_replace(array("<br>","<br","<b","&nbsp;", "&nbs"),'', $news->content), 0, 35)}}--}}
                            {{mb_substr(str_replace(array("[图片1]","[图片2]"),"",strip_tags($news->content)), 0, 35)}}
                        </p>
                        <small class="content-appendix">
                            <span>发布时间: {{mb_substr($news->created_at,0,10,'utf-8')}}</span></small>
                    </div>
                </div>
            @endforeach
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
        $(".news-body").click(function () {
            window.location.href ="/detail?nid=" + $(this).attr('data-content');
        });

        $(".hot-news-body").click(function () {
            window.location.href = "/detail?nid=" + $(this).attr('data-content');
        });
    </script>
@endsection