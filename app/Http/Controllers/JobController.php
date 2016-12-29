<?php 

namespace App\Http\Controllers;

use Facebook, Input, Auth;
use App\Models\Config;
use App\Models\Job;
use App\Models\Customer;
 use Hash;
 use Validator;
 use Redirect;
use DB;
use DateTime;

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
				'description'  => Input::get('description'),
				'content'  => Input::get('content'),
				'registed' => Input::get('registed')
			);

		DB::transaction(function () {
		$profile = new Job();
		$customer = new Customer();
			if (Input::get('registed') != 1) {

				$customer->name = Input::get('customername');
				$customer->address = Input::get('address');
				$customer->email = Input::get('email');
				$customer->save();
				$profile->idcustomer  = $customer->id;
			} else {
				$profile->idcustomer  = Input::get('idcustomer');
			}

			

			$profile->title     = Input::get('title');
			$profile->isSalary  = Input::get('isSalary');
			$profile->salaryFrom = Input::get('salaryFrom');
			$profile->salaryTo  = Input::get('salaryTo');
			$profile->currency  = Input::get('currency');
			$profile->noneSalary  = Input::get('noneSalary');
			$profile->address  = Input::get('addressWork');
			$profile->workDate = Input::get('workDate');
		$profile->workEndDate = Input::get('workEndDate');
			$profile->age  = Input::get('age');
			$profile->totalPerson  = Input::get('totalPerson');
			$profile->path = Input::get('path');

			$profile->description  = Input::get('description');
			$profile->content = Input::get('content');


		$profile->created_at = new DateTime();
		$profile->updated_at = new DateTime();
		$profile->createUser = Auth::User()->id;
		$profile->updateUser = Auth::User()->id;
			$profile->save();

		}, 5);

		return response()
			->json(['error' => false]);

		
	}
	
	public function getList() {
		$job = $this->search(0);
		return view('tuyendung', ['jobList' => $job, 'menu' => 'tuyendung']);
	}

	public function getListAjax() {
		$offset  = Input::get('offset');
		$job = search($offset);
		return response()
			->json(['jobList' => $job]);
	}

	private function search ($offset) {
		$job = DB::select('SELECT job.*, account.name FROM job LEFT JOIN account ON job.createUser = account.id LIMIT 10 OFFSET ?', [$offset]);
		return $job;
	}
	
	public function view($id){
		$job = DB::select('SELECT job.*, account.name FROM job LEFT JOIN account ON job.createUser = account.id where job.id=?', [$id]);
		return view('tuyendung_chitiet', ['job' => $job[0], 'menu' => 'tuyendung']);
	}
}
