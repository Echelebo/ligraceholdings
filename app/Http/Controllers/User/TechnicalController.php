<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnicalController extends Controller
{

    public function index(Request $request)
    {
        $page_title = 'Technical Data';



        return view('user.technical.index', compact(
            'page_title',
        ));
    }


}