<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class AboutBtcController extends Controller
{
    //
    public function contact()
    {
        return view("web.about_btc.index");
    }


}
