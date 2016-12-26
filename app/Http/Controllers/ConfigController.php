<?php
/**
 * Created by PhpStorm.
 * User: nvhquoc
 * Date: 2016/12/20
 * Time: 9:05
 */

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller {
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $config = DB::table('config')->get();

        for ($x = 0; $x < count($config); $x++) {
            // get data from Account table
            $createUser = DB::table('account')->where('id', $config[$x]->createUser)->first();
            $updateUser = DB::table('account')->where('id', $config[$x]->updateUser)->first();

            $config[$x]->createUser = $createUser->name;
            $config[$x]->updateUser = $updateUser->name;

            // get data from Area table
            $area = DB::table('area')->where('id', $config[$x]->area)->first();

            $config[$x]->area = $area->name;
        }
//        echo count($config);
         return view('admin_config', ['configList' => $config]);
    }
}