<?php 

namespace App\Http\Controllers;

use Facebook, Input, Auth;
use App\Models\Profile;
use App\Models\Config;
use App\Models\User;
 use Hash;
 use Validator;
 use Redirect;

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
	
	public function login(){
		
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {
			return Redirect::to('admin.login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {
			// create our user data for the authentication
			$userdata = array(
				'email'     => Input::get('email'),
				'password'  => Input::get('password')
			);

			if (Auth::attempt($userdata)) {
				Auth::login(Auth::user(), true);
				view()->share('user', Auth::User());
				
				return Redirect::to('admin/home');
			} else {        
				return Redirect::to('admin/login');

			}
		}
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
