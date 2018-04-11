<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */

namespace App\Http\Controllers;

use App\About;
use App\News;
use App\Protype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller {
    public function index(Request $request) {
//        $data['type'] = AuthController::getType();
        $data['type'] = Protype::all();
        if($request->has('ptype'))
            $data['ptype'] = $request->input('ptype');
        else
            $data['ptype'] = $data['type'][0]->id;
        $data['lang'] = HomeController::getLang();
        return view('news/index');
    }

    //根据post的新闻id，返回新闻详情
    public function detail(Request $request) {
        $data = array();
        $data['lang'] = HomeController::getLang();

        if ($request->has('nid')) {
            $nid = $request->input('nid');

            $news = News::find($nid);
            $data['news'] = $news;
            $news->view_count += 1;//浏览次数加1
            $news->save();
        }

//        return $data;
        return view('newsdetail', ['data' => $data]);
    }

    public function requestNewsContent(Request $request) {
        $data = array();
        if ($request->has('nid')) {
            $nid = $request->input('nid');
            $data['news'] = News::find($nid);
        } else {
            $data['news'] = null;
        }

        return $data;
    }

    //资讯中心页面、返回最新及最热门新闻,输入
    //返回值：data[]
    public function SearchNews(Request $request, $pagnum = 9) {
        $data = array();

        $data['newest'] = NewsController::searchNewest($pagnum);//最新新闻
//        $data['hottest'] = NewsController::searchHottest();//最热新闻

        $data['type'] = Protype::all();
        if($request->has('ptype'))
            $data['ptype'] = $request->input('ptype');
        else
            $data['ptype'] = $data['type'][0]->id;
        $data['about'] = About::first();
        $data['lang'] = HomeController::getLang();
//        return $data;
        return view('news', ['data' => $data]);
    }

    public function searchNewest($num) {
        $data = array();
        $data = News::orderBy('created_at', 'desc')
            ->paginate($num);
        return $data;
    }

    public function searchHottest() {
        //取6条最热新闻
        $data = array();
        $data = News::orderBy('view_count', 'desc')
            ->take(6)
            ->get();
        return $data;
    }

    public function addReview(Request $request) {
        $data = array();
        $data['status'] = 400;
        $data['msg'] = "未登录用户不能进行评论操作";

        $uid = AuthController::getUid();

        if ($uid == 0)
            return $data;

        if (!$request->has('nid') || !$request->has('content')) {
            $data['msg'] = "参数错误";
            return $data;
        }

        $input = $request->all();
        $num = Review::where('uid',$uid)->where('nid',(int)$input['nid'])->get();
        if($num->count() >3){
            $data['status'] = 400;
            $data["msg"] = "你对该新闻的评论次数已达上限";
            return $data;
        }
        $addReview = new Review();
        $addReview->uid = $uid;
        $addReview->nid = (int)$input['nid'];
        $addReview->content = $input['content'];

        if ($addReview->save()) {
            $data['status'] = 200;
            $data["msg"] = "评论成功";
        } else {
            $data['msg'] = "评论失败";
        }

        return $data;
    }
}
