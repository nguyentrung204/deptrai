<?php
/**
 * Created by PhpStorm.
 * User: nvhquoc
 * Date: 2016/12/20
 * Time: 9:05
 */

namespace App\Http\Controllers;

use Facebook, Input, Auth;
use App\Models\Worker;
use Illuminate\Support\Facades\DB;
use DateTime;

class WorkerController extends Controller {
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $workerList = DB::table('worker')->get();

        return view('admin_worker', ['workerList' => $workerList]);
    }

    public function save() {

        DB::transaction(function () {
            $worker = new Worker();
            $worker->name  = Input::get('name');
            $worker->birthday = Input::get('birthday');
            $worker->sex = Input::get('sex');
            $worker->phone = Input::get('phone');
            $worker->email = Input::get('email');
            $worker->address = Input::get('address');
            $worker->created_at = new DateTime();
            $worker->updated_at= new DateTime();
            $worker->createUser = Auth::User()->id;
            $worker->save();
        }, 5);

        return response()
            ->json(['error' => false]);
    }
}