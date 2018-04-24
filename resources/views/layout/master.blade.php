<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!--webfont-->
    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
    <!-- Owl Stylesheets -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!----drop down----->
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');
                    }
            );
        });
    </script>
    <!----font-Awesome----->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!----font-Awesome----->
    <!--light-box-files -->
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.gallery a').Chocolat();
        });
    </script>
    <style>
        .lang:hover {
            color: #fff;
            background-color: #56CFCA !important;
            border-color: #56CFCA;
            border-radius: 0;
        }
        #go_search{
            background-color: #00adb5;
            color: white;
            width: 5rem;
            margin-left: -0.5rem;
            border: 1px;
        }
        .search-product{
            height: 3rem;
            width: 23rem;
        }
        .logo-left{
            height: 6rem;
        }
    </style>
    @section('custom-style')
        @show
</head>
<body>
@section('header-tab')
    @show
@section('header-nav')
    @show
@section('content')
    @show
@section('footer')
    @show

</body>
</html>
<!----language selector----->
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
    $( document ).ready( function() {
        $( '.uls-trigger' ).uls( {
            onSelect : function( language ) {
                var languageName = $.uls.data.getAutonym( language );
                $( '.uls-trigger' ).text( languageName );
            },
            quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
        } );
    } );
    $('.logo img').click(function () {
        // window.href ="/";
        window.location.href="/";
        // alert(123);
    });
</script>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "solid", //动画效果
            animationLoop: true, //是否循环播放
            controlNav: true,
            directionNav: false,
            startAt: 0, // Integer: 开始播放的 slide，从 0 开始计数
            slideshow: true, // Boolean: 是否自动播放
            direction: "horizontal", // String: 滚动方向 ["horizontal"|"vertical"]
            prevText: ' <img src="{{asset('images/left1.png')}}">',           // String: 上一个按钮文字（），
            nextText: '<img src="{{asset('images/left2.png')}}">',           // String: 下一个按钮文字
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
        {{--$('#slider').flexslider({--}}
            {{--animation: "solid", //动画效果--}}
            {{--animationLoop: true, //是否循环播放--}}
            {{--controlNav: true,--}}
            {{--directionNav: false,--}}
            {{--startAt: 0, // Integer: 开始播放的 slide，从 0 开始计数--}}
            {{--slideshow: true, // Boolean: 是否自动播放--}}
            {{--slideshowSpeed: 3000, // Integer: ms 滚动间隔时间--}}
            {{--animationSpeed: 600, // Integer: ms 动画滚动速度--}}
            {{--direction: "horizontal", // String: 滚动方向 ["horizontal"|"vertical"]--}}
            {{--prevText: ' <img src="{{asset('images/left1.png')}}">',           // String: 上一个按钮文字（），--}}
            {{--nextText: '<img src="{{asset('images/left2.png')}}">',           // String: 下一个按钮文字--}}
            {{--after: function (slider) {//加载完成后回调函数--}}
                {{--console.log(slider)--}}
            {{--}--}}
        {{--});--}}
    });
</script>
<!-- FlexSlider -->
@section('custom-script')
    @show