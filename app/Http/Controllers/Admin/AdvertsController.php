<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */

namespace App\Http\Controllers\Admin;

use App\About;
use App\Adverts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertsController extends Controller {
    //显示企业展示图
    public function index(Request $request) {
        $uid = AdminAuthController::getUid();
        if ($uid == 0)
            return view('admin.login');

        $data = DashboardController::getLoginInfo();
        $data['picture'] = About::first();
        //return $data;
        return view('admin.ads', ['data' => $data]);
    }
    //发布广告、以及修改广告
    //如果传入广告id，则修改对应广告
    //广告信息域用adsinfo  \ 广告图片域adpic
    public function addAds(Request $request) {
        $data = array();
        $uid = AdminAuthController::getUid();
        if ($uid == 0) {
            return redirect('admin/login');
        }
        $webinfo = About::first();
        if ($request->hasFile('adpic')) {
            $adpic = $request->file('adpic');//取得上传文件信息
            if ($adpic->isValid()) {//判断文件是否上传成功
                //取得原文件名
                $originalName = $adpic->getClientOriginalName();
                //扩展名
                $ext = $adpic->getClientOriginalExtension();
                //mimetype
                $type = $adpic->getClientMimeType();
                //临时觉得路径
                $realPath = $adpic->getRealPath();
                //生成文件名
                $picname = date('Y-m-d-H-i-s') . '-' . uniqid() . 'adpic' . '.' . $ext;

                $bool = Storage::disk('adpic')->put($picname, file_get_contents($realPath));

                if($webinfo->picture == "")
                    $webinfo->picture = $request->input('title'). "@" . asset('storage/adpic/' . $picname);
                else
                    $webinfo->picture = $webinfo->picture . ";" . $request->input('title'). "@" . asset('storage/adpic/' . $picname);

            }
            if ($webinfo->save()) {
                $data['status'] = 200;
                $data['msg'] = "新增成功";
            }else{
                $data['status'] = 400;
                $data['msg'] = "新增失败";
            }
        } else {
            $data['status'] = 400;
            $data['msg'] = "发布企业展示需上传图片";
            return $data;
        }
        return $data;
    }
    public function delAd(Request $request){
        $uid = AdminAuthController::getUid();
        if ($uid == 0){
            $data['status'] = 400;
            $data['msg'] = "未知错误";
        }
        $webinfo = About::first();
        if($request->has('keyword')){
            $keyword = $request->input('keyword');
            $pics = explode(';', $webinfo->picture);
            $newpics = "";
            foreach ($pics as $k=>$pic){
                if(strpos($pic,$keyword) !== false){
                    unset($pics[$k]);
                }else{
                    if($newpics == "")
                        $newpics = $pic;
                    else
                        $newpics = $newpics . ";" . $pic;
                }
            }
            $webinfo->picture = $newpics;
            if($webinfo->save()){
                $data['status'] = 200;
                $data['msg'] = "删除成功";
            }

        }else{
            $data['msg'] = "参数错误";
        }
    }
    public function addAdView(){
        $uid = AdminAuthController::getUid();
        if ($uid == 0)
            return view('admin.login');

        $data = DashboardController::getLoginInfo();
        return view('admin.addAds',['data'=>$data]);
    }
}
