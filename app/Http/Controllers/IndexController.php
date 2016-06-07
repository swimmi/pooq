<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends Controller
{
    //
    public function index()
    {
        $role = DB::table('roles')->first();
        return view('index', compact('role'));
    }
}