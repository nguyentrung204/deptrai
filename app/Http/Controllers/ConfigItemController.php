<?php
/**
 * Created by PhpStorm.
 * User: nvhquoc
 * Date: 2016/12/20
 * Time: 16:12
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Models\Config;

class ConfigItemController extends Controller {
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index($id) {

        $config = DB::table('config')->where('id', $id)->first();

        return view('admin_edit', ['config' => $config]);
    }

    public function save($id) {
        $config = new Config();

        if($id) {
            $config = Config::find($id);
        }
        $config->content = htmlspecialchars($_POST['itemContent']);

        $config->save();

        return Redirect::to('/admin/config');
    }
}