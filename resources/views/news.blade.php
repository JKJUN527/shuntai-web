@extends('layout.master')
@section('title', '温江顺泰化工|新闻动态')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>3])
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
            padding: 15px;
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
    </style>
@endsection
@section('content')
    <div class="about_banner">
        <div class="container">
            <h2>顺泰化工</h2>
            <span class="breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>新闻动态</span></span>
        </div>
    </div>
<div class="containter">
    <div class="news_info_left info_panel left ">
        <div class="mdl_card_title">
            <h5 class="mdl_card_title_text">最新</h5></div>
        <div class="mdl-card info-card">
            <div class="news-body" data-content="624">
                <div class="news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-19-17-49-42-5aaf87b6e7a83news1.jpg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            LPL周最佳阵容：卡萨领衔RW下路入选</b></h3>
                    <p class="content-body">

                        [图片1][图片2]LPL周最佳阵容更新：　　上路：SNG XiaoAL　　打野：RNG Karsa　　中路：iG Rookie　　下路：R
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:多玩LOL</span>
                        <span>发布时间:2018-03-19</span>
                    </small>
                </div>
            </div>
            <div class="news-body" data-content="615">
                <div class="news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-19-12-19-21-5aaf3a499a76dnews1.jpg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            专访DOTA2世界冠军：辍学打电竞不理性</b></h3>
                    <p class="content-body">

                        原标题：专访DOTA2世界冠军：辍学打电竞不理性，不会让孩子学电竞专业说起王兆辉（游戏ID：Sansheng），所有的DOTA2粉丝应该都不
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:观察者网</span>
                        <span>发布时间:2018-03-19</span>
                    </small>
                </div>
            </div>
            <div class="news-body" data-content="612">
                <div class="news-aside">
                    <img src="http://www.eshunter.com/storage/newspic/2018-03-18-19-59-01-5aae548519c95news1.jpeg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            DOTA2勇士联赛服务器挤爆 V社：给点补偿当没事发生过</b></h3>
                    <p class="content-body">


                        北京时间2018年3月17日晚，DOTA2玩家等待了半年的勇士联赛终于回归。勇士联赛是Valve在游戏内举办的一场全民联赛活动，玩家根据
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:易竞技</span>
                        <span>发布时间:2018-03-18</span>
                    </small>
                </div>
            </div>
            <div class="news-body" data-content="608">
                <div class="news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-18-11-13-29-5aadd95915464news1.jpg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            发售一年，三个吃鸡游戏却走了不同道路</b></h3>
                    <p class="content-body">

                        导语：写在《绝地求生》发售一周年之际。2017年3月23日，一款名为《PLAYERUNKNOWN’S BATTLEGROUNDS》的游戏在s
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:15W要我玩</span>
                        <span>发布时间:2018-03-18</span>
                    </small>
                </div>
            </div>
            <div class="news-body" data-content="606">
                <div class="news-aside">
                    <img src="http://www.eshunter.com/storage/newspic/2018-03-18-10-05-06-5aadc9529c71dnews1.jpeg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            动视暴雪成立新电竞部门 原 NBA 高层加入 将探索更多游戏</b></h3>
                    <p class="content-body">



                        据外媒 esportsobserver 消息，动视暴雪日前成立了新部门 &quot; 动视暴雪电竞联赛部 &quot;，并邀请到来自传统体育联赛（包括
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:17173</span>
                        <span>发布时间:2018-03-18</span>
                    </small>
                </div>
            </div>
            <div class="news-body" data-content="598">
                <div class="news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-16-21-26-58-5aabc6223c240news1.jpg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            速度围观！网易10亿投入电竞，全球奖金最高国际吃鸡手游赛事开</b></h3>
                    <p class="content-body">

                        “玩游戏不再是浪费时间的事情”，这些年，电子竞技行业的发展已经逐渐深入人心！全球各种奖金超过百万的赛事层出不穷。不过，近两年风生水起的手游电
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:百家号</span>
                        <span>发布时间:2018-03-16</span>
                    </small>
                </div>
            </div>
            <div class="news-body" data-content="592">
                <div class="news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-16-12-09-08-5aab436450bffnews1.jpg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            五年时光改变电竞产业 这些年LPL经历了什么？</b></h3>
                    <p class="content-body">

                        3月17日，就是英雄联盟职业联赛（简称：LPL）五周年了，从LPL诞生至今，已经走过了整整五个年头。五年前，《英雄联盟》在中国搭建起电竞职业
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:游戏陀螺</span>
                        <span>发布时间:2018-03-16</span>
                    </small>
                </div>
            </div>
            <div class="news-body" data-content="590">
                <div class="news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-16-11-53-46-5aab3fca8d501news1.jpeg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            多元化发展手游《虚荣》成第三届WESG正式项目</b></h3>
                    <p class="content-body">

                        3月15日下午，阿里体育与游戏开发商Super&nbsp;Evil&nbsp;Megacorp在海口共同举行发布会，宣布将移动游戏《Vain
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:搜狐体育</span>
                        <span>发布时间:2018-03-16</span>
                    </small>
                </div>
            </div>
            <div class="news-body" data-content="587">
                <div class="news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-15-21-10-03-5aaa70ab359ffnews1.jpeg"/>
                </div>
                <div class="news-content">
                    <h3><b>
                            新浪微博成立电竞俱乐部 已有《绝地求生》战队</b></h3>
                    <p class="content-body">

                        昨天晚上，新浪宣布将独家授权上海竞综文化传媒有限公司布局电竞产业，正式成立微博电子竞技俱乐部，战队名称为“微博战队”。目前已经在北京成立《绝
                    </p>
                    <small class="content-appendix">
                        <span>责任编辑: admin</span>
                        <span>新闻来源:驱动之家</span>
                        <span>发布时间:2018-03-15</span>
                    </small>
                </div>
            </div>
            <nav id="page_tools">
                <ul class="pagination">

                    <li class="disabled"><span>&laquo;</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=2">2</a></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=3">3</a></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=4">4</a></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=5">5</a></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=6">6</a></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=7">7</a></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=8">8</a></li>
                    <li class="disabled"><span>...</span></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=19">19</a></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=20">20</a></li>
                    <li><a href="http://eshunter.com/news?newtype=1&amp;page=2" rel="next">&raquo;</a></li>
                </ul>

            </nav>
        </div>
    </div>
    <div class="news_info_right info_panel right  ">
        <div class="mdl_card_title">
            <h5 class="mdl_card_title_text">最热</h5></div>
        <div class="mdl-card info-card">
            <div class="hot-news-body" data-content="550">
                <div class="hot-news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-12-10-32-41-5aa5e6c954f42news1.jpeg" />
                </div>
                <div class="hot-news-content">
                    <h3><b>LPL打野进入年</b></h3>
                    <p class="content-body" style="margin-bottom: 0px;">

                        2018年LPL春季赛EDG对战RNG可谓又是一波“重量级”的比赛，不
                    </p>
                    <small class="content-appendix">
                        <span>发布时间: 2018-03-12</span></small>
                </div>
            </div>
            <div class="hot-news-body" data-content="561">
                <div class="hot-news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-13-17-24-41-5aa798d956f9anews1.png" />
                </div>
                <div class="hot-news-content">
                    <h3><b>阿里巴巴希望电子</b></h3>
                    <p class="content-body" style="margin-bottom: 0px;">

                        [图片1]阿里巴巴希望电子竞技成奥运项目&nbsp;必须按照相关规定遵
                    </p>
                    <small class="content-appendix">
                        <span>发布时间: 2018-03-13</span></small>
                </div>
            </div>
            <div class="hot-news-body" data-content="557">
                <div class="hot-news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2018-03-13-10-20-01-5aa73551295ddnews1.jpg" />
                </div>
                <div class="hot-news-content">
                    <h3><b>进击的电子竞技：</b></h3>
                    <p class="content-body" style="margin-bottom: 0px;">

                        一篇《北大开设电竞课程现场火爆》在近日走红。文章指出，随着电子竞技产业
                    </p>
                    <small class="content-appendix">
                        <span>发布时间: 2018-03-13</span></small>
                </div>
            </div>
            <div class="hot-news-body" data-content="26">
                <div class="hot-news-aside">
                    <img src="http://www.eshunter.com/storage/newspic/2017-10-20-03-07-55-59e9688bb9ba8news1.jpg" />
                </div>
                <div class="hot-news-content">
                    <h3><b>竞技游戏的风靡，</b></h3>
                    <p class="content-body" style="margin-bottom: 0px;">

                        不久前，SuperData发布了2017上半年全球PC游戏收入榜，LO
                    </p>
                    <small class="content-appendix">
                        <span>发布时间: 2017-10-20</span></small>
                </div>
            </div>
            <div class="hot-news-body" data-content="551">
                <div class="hot-news-aside">
                    <img src="http://www.eshunter.com/storage/newspic/2018-03-12-13-15-05-5aa60cd9bc73enews1.jpeg" />
                </div>
                <div class="hot-news-content">
                    <h3><b>LDL开幕式再创</b></h3>
                    <p class="content-body" style="margin-bottom: 0px;">

                        在去年，英雄联盟公布了2018的改革计划，除了LPL联赛扩充和主场化，
                    </p>
                    <small class="content-appendix">
                        <span>发布时间: 2018-03-12</span></small>
                </div>
            </div>
            <div class="hot-news-body" data-content="74">
                <div class="hot-news-aside">
                    <img src="http://116.62.198.110/storage/newspic/2017-11-04-10-43-58-59fd296e31c97news1.jpg" />
                </div>
                <div class="hot-news-content">
                    <h3><b>电竞猎人祝贺重庆</</h3>
                    <p class="content-body" style="margin-bottom: 0px;">

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;nbsp
                    </p>
                    <small class="content-appendix">
                        <span>发布时间: 2017-11-04</span></small>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

@endsection
@section('footer')
    @include('components.myfooter')
@endsection
@section('custom-script')
@endsection