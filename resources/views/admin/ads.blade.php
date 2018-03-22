@extends('layout.admin')
@section('title', '企业展示列表')

@section('custom-style')
    <style>
        ul.mdl-menu,
        li.mdl-menu__item {
            padding: 0;
        }

        li.mdl-menu__item a {
            cursor: pointer;
            display: block;
            padding: 0 16px;
        }

        i.material-icons {
            cursor: pointer;
        }
    </style>
@endsection

@section('sidebar')
    @include('components.adminAside', ['title' => 'ad', 'subtitle'=>'adList', 'username' => $data['username']])
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 operate-btn big-image--btn">
                        <img src="{{asset('images/c1.jpg')}}"/>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 operate-btn big-image--btn">
                        <img src="{{asset('images/c2.jpg')}}"/>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 operate-btn big-image--btn">
                        <img src="{{asset('images/c3.jpg')}}"/>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 operate-btn big-image--btn">
                        <img src="{{asset('images/c4.jpg')}}"/>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <script type="text/javascript">
        $(".delete").click(function () {
            var element = $(this);

            swal({
                title: "确认",
                text: "确认该广告吗?",
                type: "warning",
                confirmButtonText: "删除",
                cancelButtonText: "取消",
                showCancelButton: true,
                closeOnConfirm: true
            }, function () {
                $.ajax({
                    url: "/admin/ads/del?id=" + element.attr('data-content'),
                    type: "get",
                    success: function (data) {
                        checkResult(data['status'], "删除成功", data['msg'], null);

                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                })
            });
        })
    </script>
@show
