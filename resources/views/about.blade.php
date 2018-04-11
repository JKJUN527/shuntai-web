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
            background: #e67e22;
            position: absolute;
            left: 0;
            bottom: -1px;
        }
    </style>
@endsection
@section('content')
    <div class="about_banner">
        <div class="container">
            <h2>顺泰化工</h2>
            <span class="breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>关于我们</span></span>
        </div>
    </div>

    {{--<section class="content-wrap">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<main class="col-md-8 main-content">--}}
                    {{--<article class="post page">--}}
                        {{--<header class="post-head">--}}
                            {{--<h1 class="post-title">温州市顺泰化工有限公司</h1>--}}
                        {{--</header>--}}
                        {{--<section class="post-content">--}}
                            {{--<blockquote>--}}
                                {{--<p>{{$data['about']->brief}}</p>--}}
                            {{--</blockquote>--}}
                            {{--<p style="text-align: center;">--}}
                                {{--<img src="{{explode('@',explode(';',$data['about']->picture)[0])[1]}}" alt="{{explode('@',explode(';',$data['about']->picture)[0])[0]}}" />--}}
                            {{--</p>--}}
                            {{--<p>{!! $data['about']->describe !!}</p>--}}
                            {{--<hr />--}}

                            {{--<p>如果你也喜欢 Ghost ，可以通过以下方式与我们交流：</p>--}}

                            {{--<ul>--}}
                                {{--<li>微博：<a href="http://weibo.com/ghostchinacom">@ghostchinacom</a></li>--}}
                                {{--<li>QQ群：309172035</li>--}}
                            {{--</ul>--}}
                        {{--</section>--}}

                    {{--</article>--}}

                {{--</main>--}}

                {{--<aside class="col-md-4 sidebar">--}}
                    {{--<!-- start widget -->--}}
                    {{--<!-- end widget -->--}}

                    {{--<!-- start tag cloud widget -->--}}
                    {{--<div class="widget">--}}
                        {{--<h4 class="title">联系我们</h4>--}}
                        {{--<div class="content community">--}}
                            {{--<p>电话：{{$data['about']->tel}}</p>--}}
                            {{--<p>邮箱：{{$data['about']->email}}</p>--}}
                            {{--<p>传真：{{$data['about']->fax}}</p>--}}
                            {{--<p>公司地址：{{$data['about']->address}}</p>--}}
                            {{--<p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>--}}
                            {{--<p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</aside>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

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
                                    <p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>
                                    <p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 padding-top">
                    <article class="post page">
                        <header class="post-head">
                            <h1 class="post-title">温州市顺泰化工有限公司</h1>
                        </header>
                        <section class="post-content">
                            <blockquote>
                                <p>{{$data['about']->brief}}</p>
                            </blockquote>
                            <p>
                                <img src="{{explode('@',explode(';',$data['about']->picture)[0])[1]}}" alt="{{explode('@',explode(';',$data['about']->picture)[0])[0]}}" />
                                {!! $data['about']->describe !!}
                            </p>
                            <hr />
                        </section>

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
@endsection