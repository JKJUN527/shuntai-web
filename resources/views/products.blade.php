@extends('layout.master')
@section('title', '温江顺泰化工|产品中心')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>4])
@endsection

@section('custom-style')
    <style>
        .padding-top {
            padding-top: 90px;
        }
        .sidebar-item {
            margin-bottom: 48px;
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
            margin-left: 25%;
        }
        .row h4{
            text-align: center;
            margin-bottom: 2rem;
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
                <div class="col-md-3 col-sm-4 padding-top">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3>产品分类</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Branded<span class="pull-right">(1)</span></a></li>
                                <li class="active"><a href="#">Design<span class="pull-right">(8)</span></a></li>
                                <li><a href="#">Folio<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Logos<span class="pull-right">(9)</span></a></li>
                                <li><a href="#">Mobile<span class="pull-right">(3)</span></a></li>
                                <li><a href="#">Mockup<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Php<span class="pull-right">(2)</span></a></li>
                                <li><a href="#">Wordpress<span class="pull-right">(8)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item  recent">
                            <h3>最新新闻</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/project3.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                    <p>posted on  07 March 2014</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item popular">
                            <h3>Popular Projects</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 padding-top">
                    <div class="row">
                        <h4>产品详情介绍</h4>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>产品ID</th>
                                <th>中文品名</th>
                                <th>英文品名</th>
                                <th>CAS编号</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>001</td>
                                <td>Rammohan </td>
                                <td>Reddy</td>
                                <td>A+</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Smita</td>
                                <td>Pallod</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Rabindranath</td>
                                <td>Sen</td>
                                <td>A+</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="portfolio-pagination">
                            <ul class="pagination">
                                <li><a href="#">left</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">right</a></li>
                            </ul>
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
@endsection