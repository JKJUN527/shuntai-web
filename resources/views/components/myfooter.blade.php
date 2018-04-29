<div class="footer_bottom">
    <div class="container">
        @if($lang == 1)
            <div class="copy">
                <p>Copyright &copy; 2018温州顺泰化工有限公司 All rights reserved.浙ICP备18012553号</p>
                <p>电话:0577-88624378  传真：0577-88620778 邮箱：<a>280722223@qq.com</a></p>
                <p>地址：温州经济技术开发区滨海二十五路422号（温州市金海化学品市场）A504号</p>
                <p>技术支持: Four2Nine.<a>jkjun0527@foxmail.com</a></p>
            </div>
        @else
            <div class="copy">
                <p>Copyright © 2018 Wenzhou Shun Tai Chemical Co., Ltd. All rights reserved. Zhejiang ICP preparation No. 18012553.</p>
                <p>TEL:0577-88624378  FAX：0577-88620778 E-mail：<a>280722223@qq.com</a></p>
                <p>ADDRESS：No. twenty-five Binhai Road, Wenzhou economic and Technological Development Zone, No. 422, Wenzhou Jinhai chemical market, A504</p>
                <p>Technical support: Four2Nine.<a>jkjun0527@foxmail.com</a></p>
            </div>
        @endif
    </div>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">Top </span></a>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
</div>