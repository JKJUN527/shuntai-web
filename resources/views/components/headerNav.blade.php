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
                <li @if($activeIndex ==1) class="current_page" @endif><a href="/">主页</a></li>
                <li @if($activeIndex ==2) class="current_page" @endif><a href="/about">关于我们</a></li>
                <li @if($activeIndex ==3) class="current_page" @endif><a href="/news">新闻中心</a></li>
                <li @if($activeIndex ==4) class="current_page" @endif><a href="/products">产品中心</a></li>
                <li @if($activeIndex ==5) class="current_page" @endif><a href="/advantage">优势产品</a></li>
                <li @if($activeIndex ==6) class="current_page" @endif><a href="/contact">联系我们</a></li>
            </ul>
            <div class="help_line"><div id="txtblnk"><p>HELP LINE : (+91)-2548713984</p></div></div>
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