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

class AboutController extends Controller
{
    public function index (Request $request)
    {
        $data = array();
        $data['lang'] = HomeController::getLang();
        $data['about'] = About::first();
        return view('about', ['data' => $data]);
    }
}
