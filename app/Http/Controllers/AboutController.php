<?php
/**
 * Created by PhpStorm.
 * User: JKJUN
 * Date: 2017/7/28
 * Time: 17:15
 */
namespace App\Http\Controllers;

use App\About;
use App\Protype;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index (Request $request)
    {
        $data = array();
        $data['lang'] = HomeController::getLang();
        $data['type'] = Protype::all();
        if($request->has('ptype'))
            $data['ptype'] = $request->input('ptype');
        else
            $data['ptype'] = $data['type'][0]->id;

        $data['about'] = About::first();
        return view('about', ['data' => $data]);
    }
}
