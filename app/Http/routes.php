<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Kiểm Tra đăng nhập 
 */
Route::filter("checkLogin", function(){
	if (!Auth::check()) {
       return Redirect::to('/login'); 
    }
});

/**
 * Lấy thông tin người dùng 
 */
Route::get('/', function() {
    return View::make('index2');
});

/**
 * Đăng xuất
 */
Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/login');
});

/**
 * Màn hình đăng nhập
 */
Route::get('/login', function () {
    $data = array();
    if (Auth::check()){
        $data = Auth::user();
    }
    return View::make('login', array('data'=>$data));
});

/**
 * Kiểm tra đăng nhập trước khi truy xuất Url
 */
Route::group(array('before' => 'checkLogin'), function() {
	/**
     * Màn hình cá nhân
     */
    Route::get('user/{id}', 'UserController@index');
});

/**
 * Kiểm tra đăng nhập trước những Url có prefix là "admin"
 */
Route::group(array("prefix"=>"admin", "before"=>"checkLogin"), function(){});

/**
 * Đăng nhập với facebook
 */
Route::get('login/fb', 'UserController@loginWithFacebook');


/**
 * Facebook callback 
 */
Route::get('login/fb/callback', 'UserController@loginWithFacebookCallBack');

/**
 * Màn hình tin tức
 */
Route::get('post/view/{id}', 'PostController@view');

/**
 * Màn hình thêm tin tức
 */
Route::get('post/edit/{id?}', 'PostController@edit');
Route::post('post/edit/{id?}', 'PostController@save');

/**
 * Màn hình tin tức
 */
Route::get('post', function() {
    return View::make('post');
});

Route::get('post/search', 'PostController@get');

/**
 * Thay đổi ngôn ngữ
 */
 Route::get('lang/{locale}', function($locale){
	Session::set('applocale', $locale);
	return redirect(url(URL::previous()));
 });

Route::get('/khachhang', function() {
    return View::make('khachhang');
});

Route::get('/tuyendung', function() {
    return View::make('tuyendung');
});

Route::get('/hinhanh', function() {
    return View::make('hinhanh');
});
