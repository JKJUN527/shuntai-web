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
            /*padding: 15px;*/
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

        .lm_t{
            line-height: 40px;
            font-size: 15px;
            font-weight: bold;
            border-top: 3px solid #00adb5;
            border-bottom: 1px solid #e5e5e5;
        }
        .box{
            line-height: 28px;
            padding: 25px 12px 0;
            font-size: 14px;
        }
        .fl {
            float: left;
        }
        .fl a{
            color: #333333;
            text-decoration: none;
        }
        .fr {
            float: right;
        }
        .cle {
            clear: both;
        }
        .news_ul{
            list-style-type:none;
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
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 padding-top">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <div class="widget">
                                <h3 class="title">@if($data['lang'] == 1) 产品分类 @else Product Type @endif</h3>
                                <ul class="nav navbar-stacked">
                                    @foreach($data['type'] as $type)
                                        <li @if($data['ptype'] == $type->id) class="active" @endif>
                                            <a href="/products?ptype={{$type->id}}">
                                                @if($data['lang'] == 1)
                                                    {{$type->ch_name}}
                                                @else
                                                    {{$type->en_name}}
                                                @endif
                                                {{--<span class="pull-right">(1)</span>--}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item  recent">
                            <div class="widget">
                                <h3 class="title">联系我们</h3>
                                <div class="content community">
                                    <p>电话：{{$data['about']->tel}}</p>
                                    <p>邮箱：{{$data['about']->email}}</p>
                                    <p>传真：{{$data['about']->fax}}</p>
                                    <p>公司地址：{{$data['about']->address}}</p>
                                    {{--<p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>--}}
                                    {{--<p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 padding-top">
                    <article class="post page">
                        <div class="lm_t">新闻中心</div>
                        <div class="box">
                            <ul class="news_ul">
                                @foreach($data['newest'] as $news)
                                    <li class="news-body" data-content="{{$news->nid}}">
                                        <div class="fl">
                                            <p>{{mb_substr($news->title, 0, 16)}}</p>
                                        </div>
                                        <div class="fr">
                                            <span style="color: #cacaca">发布时间: {{mb_substr($news->created_at,0,10,'utf-8')}}</span>
                                        </div>
                                        <div class="cle"></div>
                                    </li>
                                @endforeach
                            </ul>
                            <nav id="page_tools">
                                {!! $data['newest']->render() !!}
                            </nav>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </section>

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