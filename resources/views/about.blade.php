@extends('layout.master')
@section('title', '温江顺泰化工|关于我们')

@section('header-tab')
    @include('components.headerTab')
@endsection

@section('header-nav')
    @include('components.headerNav',['activeIndex'=>2])
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
            margin: 0.2em 0;
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

    <section class="content-wrap">
        <div class="container">
            <div class="row">
                <main class="col-md-8 main-content">
                    <article class="post page">
                        <header class="post-head">
                            <h1 class="post-title">温州市顺泰化工有限公司</h1>
                        </header>
                        <section class="post-content">
                            <blockquote>
                                <p>温州市顺泰化工有限公司（原温州市化学用料厂）坐落在浙江省温州市沿江工业区33#地块，占地面积11301.01m2，建筑面积12386.8m2。本厂创办于1975年，是原化工部第一批定点生产化学试剂的专业生产厂家，从事化学试剂行业已有40多年的历史，在化学试剂行业中有很大的知名度和影响力。</p>
                            </blockquote>

                            <p><img src="http://static.ghostchina.com/image/b/5e/877fa798be75dbe791dba07ac4811.jpg" alt="John O’Nolan 和 Hannah Wolfe" /></p>

                            <p>目前我们单位是中国化学试剂工业协会常务理事单位；浙江省化学试剂工业协会副会长单位；全国化学标准化技术委员会化学试剂分会委员,并单独组织修订了HG/T 2630 -2010 化学试剂 三水合乙酸铅(乙酸铅)标准。 <br />
                                我公司资金实力雄厚，技术装备精良，技术人员占本厂人数20%以上，注重节能减排、科技创新。特别是最近10年间企业在这方面投入了大量的资金并取得了很好的成效，同时我公司也非常重视产品质量、安全生产和环境保护。我公司是国内第一批获得二级质检机构国家认证的企业之一；还先后通过ISO9001：2008质量管理体系认证、ISO14001：2008环境管理体系认证和温州市安全标准化认证;浙江省科技型中小企业；A级纳税信用企业。
                            <br>
                                吉象”牌注册商标已有二十多年历史，产品用户遍布全国，部分产品远销欧美及东南亚等国，赢得了海内外用户的信赖和好评，吉象人将一如继往地为您提供优质的产品和最佳的服务。
                                稳定的产品质量，良好的经营信誉，完善的售后服务是我们对您的承诺。
                                “吉象”人愿与您携手共创美好未来！
                            </p>
                            <hr />

                            {{--<p>如果你也喜欢 Ghost ，可以通过以下方式与我们交流：</p>--}}

                            {{--<ul>--}}
                                {{--<li>微博：<a href="http://weibo.com/ghostchinacom">@ghostchinacom</a></li>--}}
                                {{--<li>QQ群：309172035</li>--}}
                            {{--</ul>--}}
                        </section>

                    </article>

                </main>

                <aside class="col-md-4 sidebar">
                    <!-- start widget -->
                    <!-- end widget -->

                    <!-- start tag cloud widget -->
                    <div class="widget">
                        <h4 class="title">联系我们</h4>
                        <div class="content community">
                            <p>电话：277327792</p>
                            <p>邮箱：277327792</p>
                            <p>传真：277327792</p>
                            <p>公司地址：277327792</p>
                            <p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>
                            <p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>
@endsection
@section('footer')
    @include('components.myfooter')
@endsection
@section('custom-script')
@endsection