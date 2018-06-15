<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;

class IndexController extends Controller
{
    public function index()
    {
        $transhistories = DB::select("select id, userFullName, artModel, updated_at from transaction_histories limit 5");

        return view('index', [ 'histories' => $transhistories]);
    }
}
