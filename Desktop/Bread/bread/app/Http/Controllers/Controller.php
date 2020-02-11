<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view('page.home');
    }

    public function product()
    {
        $breads = DB::select('select * from bread');
//        return view('layout.script',['breads'=>$breads]);
        return view('page.product',['breads'=>$breads]);
    }

    public function test(){
        return view('page.test');
    }
}
