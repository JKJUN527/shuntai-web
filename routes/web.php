<?php
//z正式网站路由开始
//Route::get('index', function () {//主页返回四类广告（大图、小图、文字、急聘广告、最新新闻（5个）），
//    return view('index');
//测试生成session uid
Route::any('session', ['uses' => 'PositionController@test1']);

Route::any('/', ['uses' => 'HomeController@index']);//完成
Route::get('/index', ['uses' => 'HomeController@changeLang']);//完成
//Route::any('/', ['uses' => 'HomeController@index']);//完成
//Route::any('/index/search', ['uses' => 'HomeController@indexSearch']);//完成
//Route::any('/',function (){
//    return view('index');
//});
Route::any('/about',function (){
    return view('about');
});
Route::any('/news',function (){
    return view('news');
});
Route::any('/products',function (){
    return view('products');
});
Route::any('/advantage',function (){
    return view('advantage');
});
Route::any('/contact',function (){
    return view('contact');
});
Route::any('/detail',function (){
    return view('newsdetail');
});


//网站后台
//Route::get('admin/login', function () {
//    return view('admin/login');
//});
Route::post('admin/login', ['uses' => 'Admin\LoginController@postLogin']);

Route::get('admin/', ['uses' => 'Admin\DashboardController@view']);
Route::get('admin/dashboard', ['uses' => 'Admin\DashboardController@view']);

Route::get('admin/admin', ['uses' => 'Admin\AdminController@view']);

Route::any('admin/region', ['uses' => 'Admin\RegionController@index']);//显示产品分类
Route::any('admin/region/{option}', ['uses' => 'Admin\RegionController@edit'])->where('option', '[A-Za-z]+');//操作产品分类

Route::any('admin/products', ['uses' => 'Admin\RegionController@productView']);//显示产品列表
Route::any('admin/products/{option}', ['uses' => 'Admin\RegionController@productEdit'])->where('option', '[A-Za-z]+');//操作产品

//审批企业信息
Route::any('admin/enterprise/{option?}', ['uses' => 'Admin\VerificationController@index'])->where('option', '[0-2]{1}');//显示待审核或已审核的企业信息
Route::any('admin/enterprise/detail', ['uses' => 'Admin\VerificationController@showDetail']);//显示待审核或已审核的企业信息
Route::any('admin/enterprise/examine', ['uses' => 'Admin\VerificationController@passVerfi']);//显示待审核或已审核的企业信息

//登陆注册
Route::post('admin/register', ['uses' => 'Admin\AdminController@addAdmin']);
Route::any('admin/delete', ['uses' => 'Admin\AdminController@deleteAdmin']);


Route::get('admin/index', ['uses' => 'Admin\LoginController@index']);
Route::get('admin/logout', ['uses' => 'Admin\LoginController@logout']);
Route::get('admin/getUid', ['uses' => 'Admin\AdminAuthController@getUid']);
Route::get('admin/getType', ['uses' => 'Admin\AdminAuthController@getType']);

//发布广告
Route::get('admin/addAds', ['uses' => 'Admin\AdvertsController@addAdView']);//显示已发布广告信息

Route::any('admin/ads', ['uses' => 'Admin\AdvertsController@index']);//显示已发布广告信息
Route::any('admin/ads/detail', ['uses' => 'Admin\AdvertsController@detail']);//显示已发布广告信息
Route::any('admin/ads/add', ['uses' => 'Admin\AdvertsController@addAds']);//新增或修改广告信息
Route::any('admin/ads/find', ['uses' => 'Admin\AdvertsController@findAd']);//查找location位置是否有广告
Route::any('admin/ads/del', ['uses' => 'Admin\AdvertsController@delAd']);//删除广告

//发布新闻
Route::any('admin/news', ['uses' => 'Admin\EditnewsController@index']);//显示已发布新闻信息
Route::any('admin/news/detail', ['uses' => 'Admin\EditnewsController@detail']);//显示已发布新闻信息
Route::get('admin/addNews', ['uses' => 'Admin\EditnewsController@addNewsView']);//新增或修改新闻信息
Route::any('admin/news/add', ['uses' => 'Admin\EditnewsController@addNews']);//新增或修改新闻信息
Route::any('admin/news/del', ['uses' => 'Admin\EditnewsController@delNews']);

//管理企业发布职位
Route::any('admin/position', ['uses' => 'Admin\PositionController@index']);//显示已发布的职位信息
Route::any('admin/position/search', ['uses' => 'Admin\PositionController@findPosition']);//根据公司名字搜索对应发布的职位信息
Route::any('admin/position/urgency', ['uses' => 'Admin\PositionController@isUrgency']);//设置职位是否紧急状态
Route::any('admin/position/offposition', ['uses' => 'Admin\PositionController@OffPosition']);//下架职位信息
//管理网站信息
Route::any('admin/about', ['uses' => 'Admin\WebinfoController@index']);//显示已发布广告信息
Route::any('admin/about/setPhone', ['uses' => 'Admin\WebinfoController@setPhone']);
Route::any('admin/about/setFax', ['uses' => 'Admin\WebinfoController@setFax']);
Route::any('admin/about/setCode', ['uses' => 'Admin\WebinfoController@setCode']);
Route::any('admin/about/setEmail', ['uses' => 'Admin\WebinfoController@setEmail']);
Route::any('admin/about/setAddress', ['uses' => 'Admin\WebinfoController@setAddress']);
Route::any('admin/about/setContent', ['uses' => 'Admin\WebinfoController@setContent']);

//end
Route::any('smstest', ['uses' => 'ValidationController@verifySmsCode']);//显示已发布的职位信息
Route::any('sendsms', ['uses' => 'ValidationController@sendSMS']);//显示已发布的职位信息
Route::any('getAllApplyList', ['uses' => 'PersonCenterController@getAllApplyList']);//显示已发布的职位信息

//临时企业用户账号添加
Route::any('addtempUser', ['uses' => 'CreatetempuserController@index']);
Route::any('resumesendmail', ['uses' => 'DeliveredController@sendresumetomail']);

//临时简历用户管理
Route::any('admin/resumes', ['uses' => 'Admin\ResumesController@index']);//显示已创建的临时简历用户
Route::any('admin/addresume', ['uses' => 'Admin\ResumesController@addIndex']);//新增临时简历用户页面
Route::post('admin/addresume', ['uses' => 'Admin\ResumesController@addtempresume']);//新增临时简历用户
Route::get('admin/resume/del', ['uses' => 'Admin\ResumesController@delResume']);//删除临时简历用户，同时删除所有该临时用户的所有信息。
