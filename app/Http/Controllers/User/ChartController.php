<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{

    public function index(Request $request)
    {
        $page_title = 'Data Charts';



        return view('user.chart.index', compact(
            'page_title',
        ));
    }


}