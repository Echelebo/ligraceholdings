<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //index of all withdrawals
    public function index(Request $request)
    {
        $page_title = 'Market Calendar';



        return view('user.calendar.index', compact(
            'page_title',
        ));
    }


}
