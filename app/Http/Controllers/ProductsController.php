<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */
namespace App\Http\Controllers;

use App\About;
use App\Product;
use App\Protype;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index (Request $request)
    {
        $data = array();
        $data['type'] = Protype::all();
        if($request->has('ptype'))
            $data['ptype'] = $request->input('ptype');
        else
            $data['ptype'] = $data['type'][0]->id;
        $data['lang'] = HomeController::getLang();
        //查询新闻
        $news = new NewsController();
        $data['newest'] = $news->searchNewest(6);//最新新闻
        $data['about'] = About::first();
        //默认显示第一个类型的产品
        $data['products'] = Product::where('type',$data['ptype'])
            ->orderby('created_at','desc')
            ->paginate(10);

//        return $data;
        return view('products', ['data' => $data]);
    }
    public function advantage(Request $request){
        $data = array();
        $data['type'] = Protype::all();
        if($request->has('ptype'))
            $data['ptype'] = $request->input('ptype');
        else
            $data['ptype'] = $data['type'][0]->id;
        $data['lang'] = HomeController::getLang();
        //查询新闻
        $news = new NewsController();
        $data['newest'] = $news->searchNewest(6);//最新新闻
        //默认显示第一个类型的优势产品
        $data['products'] = Product::where('type',$data['ptype'])
            ->where('is_urgency',1)
            ->orderby('created_at','desc')
            ->paginate(10);
        $data['about'] = About::first();

//        return $data;
        return view('advantage', ['data' => $data]);
    }
}
