<div class="header">
    <div class="container">
        <div class="col-sm-3 logo">
            <img class="logo-left" src="{{asset('images/logo.png')}}">
            {{--<h1><a href="/"><span class="highlight">顺泰</span>化工</a></h1>--}}
        </div>
        <div class="col-sm-9 logo_right">
            {{--<div class="social">--}}
                {{--<a href="" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>--}}
                {{--<a href="" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>--}}
                {{--<a href="" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>--}}
                {{--<a href="" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>--}}
                {{--<a href="" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>--}}
            {{--</div>--}}
            <!-- script for menu -->
            <span class="menu"></span>
            <div class="top-menu">
                <ul>
                    {{--<li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal">Login</a></li>--}}
                    {{--<li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Register</a></li>--}}
                    <li><a href="/index?lang=ch" class="lang @if($lang == 1) active @endif">中文版</a></li>
                    <li><a href="/index?lang=en" class="lang @if($lang == 2) active @endif">English</a></li>
                </ul>
                <br>
                <p style="margin: 0;">@if($lang == 1) 咨询热线 @else  Hot-Line @endif：李先生13738713800</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>