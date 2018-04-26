<nav class="navbar nav_bottom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <li @if($activeIndex ==1) class="current_page" @endif>
                    <a href="/">
                        @if($lang == 1)
                            主页
                        @else
                            Home
                        @endif
                    </a>
                </li>
                <li @if($activeIndex ==2) class="current_page" @endif>
                    <a href="/about">
                        @if($lang == 1)
                            关于我们
                        @else
                            About
                        @endif
                    </a>
                </li>
                <li @if($activeIndex ==3) class="current_page" @endif>
                    <a href="/news">
                        @if($lang == 1)
                            新闻中心
                        @else
                            News
                        @endif
                    </a>
                </li>
                <li @if($activeIndex ==4) class="current_page" @endif>
                    <a href="/products">
                        @if($lang == 1)
                            产品中心
                        @else
                            Products
                        @endif
                    </a>
                </li>
                <li @if($activeIndex ==5) class="current_page" @endif>
                    <a href="/advantage">
                        @if($lang == 1)
                            优势产品
                        @else
                            Advantage
                        @endif
                    </a>
                </li>
                <li @if($activeIndex ==7) class="current_page" @endif>
                    <a href="/market">
                        @if($lang == 1)
                            营销网络
                        @else
                            Marketing
                        @endif
                    </a>
                </li>
                <li @if($activeIndex ==6) class="current_page" @endif>
                    <a href="/contact">
                        @if($lang == 1)
                            联系我们
                        @else
                            contact
                        @endif
                    </a>
                </li>
            </ul>
            {{--<div class="help_line">--}}
                {{--<div id="txtblnk"><p>--}}
                        {{--@if($lang == 1)--}}
                            {{--热线电话--}}
                        {{--@else--}}
                            {{--Help Line--}}
                        {{--@endif : (+86)-13738713800</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="help_line">
                <form action="/products" method="post">
                    <input class="search-product" type="text" id="product_name" name="product_name" onfocus="if (value =='@if($lang == 1) 请输入产品名称 @else Please enter the name @endif '){value =''}" onblur="if (value ==''){value='@if($lang == 1) 请输入产品名称 @else Please enter the name @endif'}" value="@if($lang == 1) 请输入产品名称 @else Please enter the name @endif">
                    <input class="search-product" type="submit" id="go_search" value="@if($lang == 1) 搜索 @else Search @endif">
                </form>
            </div>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<script type="text/javascript">
    $(function() {
        blinkeffect('#txtblnk');
    })
    function blinkeffect(selector) {
        $(selector).fadeOut('slow', function() {
            $(this).fadeIn('slow', function() {
                blinkeffect(this);
            });
        });
    }
</script>