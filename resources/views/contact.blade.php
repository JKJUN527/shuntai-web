@extends('layout.master')
@section('title', '温江顺泰化工|联系我们')

@section('header-tab')
    @include('components.headerTab',['lang'=>$data['lang']])
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>6,'lang'=>$data['lang']])
@endsection

@section('custom-style')
    <link href="css/animate.min.css" type="text/css" rel="stylesheet">
    <style>
        .padding {
            padding: 65px 0 0 0;
        }
        #company-information p {
            /*padding-top: 172px;*/
            font-size: 1.8rem;
        }
        #team {
            padding: 85px 0;
        }
        .title {
            color: #404040;
            /*font-weight: 300;*/
        }
        .single-service img {
            height: 85px;
        }
        .single-service img {
            margin-bottom: 35px;
        }
        #team-carousel {
            margin-top: 80px;
        }
        .contact-info{
            background: #ffffff;
            /*padding: 21px 30px;*/
        }
        .contact-info a{
            color: black;
            /*padding: 21px 30px;*/
        }
        .contact-info h2{
            margin-top: 0;
            padding-bottom: 7px;
            border-bottom: 1px solid #ebebeb;
            margin-bottom: 21px;
            position: relative;
        }
        .contact-info p{
            margin: 0 0 10px;
        }
        .contact-info h2::after {
            content: "";
            width: 90px;
            height: 1px;
            background: #00adb5;
            position: absolute;
            left: 0;
            bottom: -1px;
        }
        .btn-submit {
            width: 100%;
            background-color: #4fcccd;
            color: #fff;
            font-size: 14px;
            font-weight: 300;
            letter-spacing: 5px;
            text-transform: uppercase;
            border-radius: 3px;
            margin-top: 5px;
            border-bottom: 3px solid #2f9697;
            box-shadow: none;
            padding: 10px;
        }

        .post{
            /*padding: 35px;*/
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
        #map{
            height: 300px;
        }
    </style>
@endsection
@section('content')
    <div class="about_banner">
        <div class="container">
            <h2>顺泰化工</h2>
            <span class="breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>联系我们</span></span>
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
                        {{--<div class="sidebar-item  recent">--}}
                            {{--<div class="widget">--}}
                                {{--<h3 class="title">联系我们</h3>--}}
                                {{--<div class="content community">--}}
                                    {{--<p>电话：{{$data['about']->tel}}</p>--}}
                                    {{--<p>邮箱：{{$data['about']->email}}</p>--}}
                                    {{--<p>传真：{{$data['about']->fax}}</p>--}}
                                    {{--<p>公司地址：{{$data['about']->address}}</p>--}}
                                    {{--<p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>--}}
                                    {{--<p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 padding-top">
                    <article class="post page">
                        <div class="lm_t"> @if($data['lang'] == 1) 联系我们 @else Contact Us @endif</div>
                        <div class="box">
                            <p>
                                @if($data['lang'] == 1) 地址 @else Address @endif：{{$data['about']->address}}
                                <br>
                                    @if($data['lang'] == 1) 邮编 @else Postcode @endif：{{$data['about']->postcodes}}
                                <br>
                                    @if($data['lang'] == 1) 电话 @else Phone @endif：{{$data['about']->tel}}
                                <br>
                                    @if($data['lang'] == 1) 传真 @else Fax @endif：{{$data['about']->fax}}
                                <br>
                                    @if($data['lang'] == 1) 邮箱 @else E-mail @endif：{{$data['about']->email}}
                                <br>
                                    @if($data['lang'] == 1) 网址 @else Website @endif：http://www.wzshuntaichem.com
                                <br>
                            </p>
                            <p id="map"></p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="raw">
            <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">@if($data['lang'] == 1) 给我留言 @else Leaving a message @endif</h1>
            <p class="text-center wow fadeInDown" style="margin-bottom: 20px;" data-wow-duration="400ms" data-wow-delay="400ms">
                @if($data['lang'] == 1) 欢迎您光临本公司网站，请您填写以下信息，我们将会与您保持联系，谢谢! @else

                    Welcome to our website. Please fill in the following information. We will keep in touch with you. Thank you!
                @endif
            </p>
            <div class="col-md-4 col-sm-6">
                <div class="contact-info bottom">
                    <h2>@if($data['lang'] == 1) 联系方式 @else Contacts @endif</h2>
                    <address>
                        <p> @if($data['lang'] == 1) 邮箱 @else E-mail @endif: <a href="mailto:{{$data['about']->email}}">{{$data['about']->email}}</a></p>
                        <p> @if($data['lang'] == 1) 电话 @else Phone  @endif: {{$data['about']->tel}}</p>
                        <p> @if($data['lang'] == 1) 传真 @else Fax    @endif: {{$data['about']->fax}}</p>
                    </address>

                    <h2>@if($data['lang'] == 1) 公司地址 @else Address @endif</h2>
                    <address>
                       <p>{{$data['about']->address}}</p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="contact-form bottom">
                    {{--<h2>联系我们</h2>--}}
                    <form id="main-contact-form" name="contact-form" method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="@if($data['lang'] == 1) 您的姓名 @else Name @endif">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="@if($data['lang'] == 1) 您的邮箱 @else E-mail @endif">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="@if($data['lang'] == 1) 留言 @else Leaving a message @endif"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-submit" value="@if($data['lang'] == 1) 提交 @else Submit @endif">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>

@endsection
@section('footer')
    @include('components.myfooter')
@endsection
@section('custom-script')
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=e143b33668668e4b9be611be3584b0e7"></script>
    <script>
        map = new AMap.Map('map', {
            resizeEnable: true,
            zoom: 13,
            center: [120.783616,27.805866]
        });

        AMap.plugin(['AMap.ToolBar', 'AMap.Scale'],
                function () {
                    map.addControl(new AMap.ToolBar());

                    map.addControl(new AMap.Scale());

                    map.setStatus({scrollWheel: false});
                });

        marker = new AMap.Marker({
            position: [120.783616,27.805866],
            title: "温州市金海化学品市场有限公司",
            map: map
        });
    </script>
    <script>
        $('#main-contact-form').submit(function (event) {
            event.preventDefault();
            var name = $('input[name="name"]').val();
            var email = $('input[name="email"]').val();
            var message = $('textarea[name="message"]').val();
            var formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('message', message);
            $.ajax({
                url: "/message/add",
                type: "post",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function (data) {
                    var result = JSON.parse(data);
//                    console.log(result);
                        alert(result.msg);
                        return;
                }
            })
        });
    </script>
@endsection