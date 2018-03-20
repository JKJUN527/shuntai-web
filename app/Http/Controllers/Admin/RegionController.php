<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Protype;
use Illuminate\Http\Request;

class RegionController extends Controller {

    //显示已添加产品分类
    public function index() {
        $uid = AdminAuthController::getUid();
        if ($uid == 0)
            return view('admin.login');

        $data = DashboardController::getLoginInfo();
        $data['region'] = Protype::all();
        //return $data;
        return view('admin/region', ['data' => $data]);
    }
    //删除、添加地区
    //添加传入region[name],删除传入rid
    public function edit(Request $request, $option) {
        $uid = AdminAuthController::getUid();
        if ($uid == 0) {
            return redirect('admin/login');
        }

        $resultData = array();

        switch ($option) {
            case 'add':
                if ($request->has('ch_name') && $request->has('en_name')) {
                    $ch_name = $request->input('ch_name');
                    $en_name = $request->input('en_name');
                    $describe = $request->input('describe');

                    //判断是否存在该分类
                    $is_exist = Protype::where('ch_name',$ch_name)
                        ->orwhere('en_name',$en_name)
                        ->count();
                    if($is_exist >=1){
                        $resultData['status'] = 400;
                        $resultData['msg'] = "分类已存在";
                        return $resultData;
                    }
                    $protype = new Protype();
                    $protype->ch_name = $ch_name;
                    $protype->en_name = $en_name;
                    $protype->describe = $describe;

                    if ($protype->save()) {
                        $resultData['status'] = 200;
                    } else {
                        $resultData['status'] = 400;
                        $resultData['msg'] = "添加失败";
                    }
                }
                break;
            case 'delete':
                if ($request->has('rid')) {
                    $data = $request->input('rid');

                    $del = Region::find($data);
                    $bool = $del->delete();

                    if ($bool) {
                        $resultData['status'] = 200;
                    } else {
                        $resultData['status'] = 400;
                        $resultData['msg'] = "删除失败";
                    }
                }
                break;
            default:
                $resultData['status'] = 400;
                $resultData['msg'] = "无效操作";
                break;
        }

        return $resultData;
    }
}
