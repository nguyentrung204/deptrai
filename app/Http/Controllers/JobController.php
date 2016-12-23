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
class JobController extends Controller  {
	
	
	
	public function save(){
		
		
		
		
			// create our user data for the authentication
			$job = array(
				'title'     => Input::get('title'),
				'isSalary'  => Input::get('isSalary'),
				'salaryFrom'  => Input::get('salaryFrom'),
				'salaryTo'  => Input::get('salaryTo'),
				'currency'  => Input::get('currency'),
				'noneSalary'  => Input::get('noneSalary'),
				'address'  => Input::get('addressWork'),
				'workDate'  => Input::get('workDate'),
				'age'  => Input::get('age'),
				'totalPerson'  => Input::get('totalPerson'),
				'path'  => Input::get('path'),
				'idcustomer'  => Input::get('idcustomer'),
				'decription'  => Input::get('decription'),
				'content'  => Input::get('content'),
				'registed' => Input::get('registed')
			);
			
			$profile = new Profile();
			$profile->title     = Input::get('title');
			$profile->isSalary  = Input::get('isSalary');
			$profile->salaryFrom = Input::get('salaryFrom');
			$profile->salaryTo  = Input::get('salaryTo');
			$profile->currency  = Input::get('currency');
			$profile->noneSalary  = Input::get('noneSalary');
			$profile->address  = Input::get('addressWork');
			$profile->workDate = Input::get('workDate');
			$profile->age  = Input::get('age');
			$profile->totalPerson  = Input::get('totalPerson');
			$profile->path = Input::get('path');
			$profile->idcustomer  = Input::get('idcustomer');
			$profile->decription  = Input::get('decription');
			$profile->content = Input::get('content');
			$profile->registed = Input::get('registed');
			$profile->save();
			
			
		
	}
	
	
}
