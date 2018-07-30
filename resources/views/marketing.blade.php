@extends('layout.master')
@section('title', '温州市顺泰化工有限公司|营销网络')

@section('header-tab')
    @include('components.headerTab',['lang'=>$data['lang']])
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>7,'lang'=>$data['lang']])
@endsection

@section('custom-style')
    <link media="all" href="css/news.css" type="text/css" rel="stylesheet">
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
        .news_ul span{
            font-size: 1.5rem;
            font-weight: bold;
            color: #00adb5;
        }
        .box img{
            /*text-align: center;*/
            width: 100%;
        }
        .about_banner{
            background:url({{asset('images/head3.jpg')}})no-repeat center top;
            background-size:cover;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
        }
    </style>
@endsection
@section('content')
    <div class="about_banner">
        <div class="container">
            {{--<h2>顺泰化工</h2>--}}
            {{--<span class="breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>营销网络</span></span>--}}
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
                                <h3 class="title">@if($data['lang']==1) 联系我们 @else Contact Us @endif</h3>
                                <div class="content community">
                                    <p>@if($data['lang']==1) 电话 @else Phone @endif：{{$data['about']->tel}}</p>
                                    <p>@if($data['lang']==1) 邮箱 @else E-mail @endif：{{$data['about']->email}}</p>
                                    <p>@if($data['lang']==1) 传真 @else Fax @endif：{{$data['about']->fax}}</p>
                                    <p>@if($data['lang']==1) 公司地址：{{$data['about']->address}} @else Address ：{{$data['about']->address_en}}@endif</p>
                                    {{--<p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>--}}
                                    {{--<p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 padding-top">
                    <article class="post page">
                        @if($data['lang']==1)
                            <div class="lm_t">营销网络</div>
                            <div class="box">
                                <ul class="news_ul">
                                    <li class="news-body">
                                        <span>国内网络：</span>{{$data['about']->market_in}}
                                    </li>
                                    <li class="news-body">
                                        <span>国外网络：</span>{{$data['about']->market_out}}
                                    </li>
                                </ul>
                                <img src="">
                            </div>
                        @else
                            <div class="lm_t">Marketing Network</div>
                            <div class="box">
                                <ul class="news_ul">
                                    <li class="news-body">
                                        <span>Domestic：</span>{{$data['about']->market_in_en}}
                                    </li>
                                    <li class="news-body">
                                        <span>Foreign：</span>{{$data['about']->market_out_en}}
                                    </li>
                                </ul>
                                <img src="">
                            </div>
                        @endif

                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer')
    @include('components.myfooter',['lang'=>$data['lang']])
@endsection
@section('custom-script')
    <script>

    </script>
@endsection