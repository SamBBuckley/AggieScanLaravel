<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('main');
    }

    public function code() {
        return view('datapage', [
            'uin' => request('uin')
        ]);
    }

    public function user() {
        return view('userpage', [
            'uin' => request('uin')
        ]);
    }
}
