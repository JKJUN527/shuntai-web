<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */
namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (Request $request)
    {
        $data = array();
        $data['lang'] = 1;
        $lang = session()->get('lang');
        if($lang)
            $data['lang'] = $lang;
        $data['about'] = About::first();
        return view('index',['data'=>$data]);
    }
    //设置中英文版切换
    public function changeLang (Request $request){
        if($request->has('lang')){
            $lang = $request->input('lang');
            if($lang == "ch")
                session()->put('lang', 1);
            elseif ($lang == "en")
                session()->put('lang', 2);
        }
        return redirect('/');
    }
}
