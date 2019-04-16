<?php

namespace App\Http\Controllers;

use App\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //

    public function insert(Request $request){

       Ajax::create($request->all());

       return ['status'=>true];


    }
}
