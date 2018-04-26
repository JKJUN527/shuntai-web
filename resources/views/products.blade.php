@extends('layout.master')
@section('title', '温江顺泰化工|产品中心')

@section('header-tab')
    @include('components.headerTab',['lang'=>$data['lang']])
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>4,'lang'=>$data['lang']])
@endsection

@section('custom-style')
    <style>
        .padding-top-right {
            padding-top: 30px;
        }
        .padding-top-left {
            padding-top: 70px;
        }
        .sidebar-item {
            margin-bottom: 48px;
            /*border: solid 1px #00adb5;*/
            /*padding: 10px;*/
        }
        .sidebar h3 {
            color: #404040;
            margin-top: 0;
            border-bottom: 3px solid #56CFCA;
            margin-bottom: 6px;
            padding-bottom: 8px;
        }
        .categories .navbar-stacked li {
            border-bottom: 1px solid #BFC9C9;
        }
        .categories .navbar-stacked li.active a {
            color: #0099AE;
            padding-left: 20px;
        }
        .categories .navbar-stacked li a {
            font-size: 16px;
            padding: 8px 0;
            color: #6a6a6a;
            padding-left: 0;
        }
        .categories .navbar-stacked li a:hover{
            background: none;
            margin-left: 20px;
            color: #0099AE;
            opacity: 1;
        }
        .categories .navbar-stacked li.active a:before{
            position: absolute;
            content: "";
            border-color: transparent transparent transparent #0099AE;
            border-width: 8px;
            border-style: solid;
            left: 0;
            top: 13px;
            margin-top: 0;
            z-index: 0;
            transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
        }

        .categories .navbar-stacked li.active a:after {
            position: absolute;
            content: "";
            border-color: transparent transparent transparent #fff;
            border-width: 6px;
            border-style: solid;
            left: 0px;
            top: 15px;
            margin-top: 0;
            z-index: 1;
            transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
        }
        .sidebar-item .media{
            border-bottom: 1px solid #ececec;
            padding-bottom: 10px;
            padding-top: 21px;
            margin-top: 0;
            transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
        }

        .sidebar-item .media:last-child{
            border-bottom: 0px solid #ececec;
            padding-bottom: 0;
        }

        .sidebar-item .media:hover{
            border-left: 2px solid #0099AE;
            padding-left: 5px;
            transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
        }

        .sidebar-item .media:hover.media .media-body h4 a{
            color: #0099AE;
            transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -webkit-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
        }

        .sidebar-item .media .media-body h4 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .sidebar-item .media .media-body h4 a{
            color: #7d7d7d;
            font-size: 16px;
        }

        .sidebar-item .media .media-body p {
            color: #b4b4b4;
            font-size: 12px;
        }
        .portfolio-pagination{
            text-align: center;
        }
        .row h4{
            text-align: center;
            margin-bottom: 2rem;
        }
        .media img{
            width: 52px;
            height: 52px;
        }
    </style>
@endsection
@section('content')
    <div class="about_banner">
        <div class="container">
            <h2>顺泰化工</h2>
            <span class="breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>产品中心</span></span>
        </div>
    </div>
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 padding-top-left">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <div class="widget">
                                <h3>@if($data['lang'] == 1) 产品分类 @else Product Type @endif</h3>
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
                <div class="col-md-9 col-sm-8 padding-top-right">
                    <div class="row">
                        <h4><b>@if($data['lang'] == 1) 产品详情介绍 @else Product Detail @endif</b></h4>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>@if($data['lang'] == 1) 产品ID @else ID @endif</th>
                                <th>@if($data['lang'] == 1) 中文品名 @else ch_name @endif</th>
                                <th>@if($data['lang'] == 1) 英文品名 @else en_name @endif</th>
                                <th>@if($data['lang'] == 1) CAS编号 @else CAS_Code @endif</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['products'] as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->ch_name}}</td>
                                    <td>{{$product->en_name}}</td>
                                    <td>{{$product->cas_code}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="portfolio-pagination">
                            <nav>
                                {!! $data['products']->render() !!}
                            </nav>
                        </div>
                    </div>
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
        $(".media").click(function () {
            window.location.href ="/detail?nid=" + $(this).attr('data-content');
        });
    </script>
@endsection