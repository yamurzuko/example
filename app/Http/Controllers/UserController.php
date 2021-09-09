<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index($id = null)
    {
      $stuff['id'] = $id;
      if($id)
      {
        $data = DB::select("select * from users where id = :id",$stuff);
      }else {
        $data = DB::select("select * from users");
      }

      $arr['data'] = $data;

      return view('user', ['data'=>$data]);
    }
}
