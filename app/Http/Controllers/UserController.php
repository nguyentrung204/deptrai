<?php 

namespace App\Http\Controllers;

use Facebook, Input, Auth;
use App\Models\Profile;
use App\Models\User;

/**
 * @Author: NNTrung
 * @Date: 21/8/2015
 */
class UserController extends Controller  {
	
	public function loginWithFacebook(){
        $facebook = new Facebook(config('facebook'));
        $params = array(
             'redirect_uri' => url('/login/fb/callback'),
             'scope' => 'email'
        );
        return redirect($facebook->getLoginUrl($params));
    }
	
	public function loginWithFacebookCallback(){
        $code = Input::get('code');
        if (strlen($code) == 0)
	        return redirect('/login')->with('message', trans('messages.E0001'));
	
        $facebook = new Facebook(config('facebook'));
        $uid = $facebook->getUser();
	
        if ($uid == 0)
			return redirect('/login')->with('message', trans('messages.E0001'));

        $me = $facebook->api('/me');
		$profile = Profile::whereUid($uid)->first();
		
		if (empty($profile)) {
			$user = new User;
			$user->id = $me['id'];
			$user->name = $me['name'];
			$user->email = isset($me['email']) ? $me['email'] : $me['id'];
			$user->photo = trans('messages.C0001', ['id' => $me['id']]);
			$user->save();

			$profile = new Profile();
			$profile->uid = $uid;
			$profile->user_id = $me['id'];
		}
		
		$profile->access_token = $facebook->getAccessToken();
		$profile->save();
		
		
		$user = $profile->user;

		Auth::login($user);
		return redirect('/login')->with('message', trans('messages.I0001'));
    }
}
