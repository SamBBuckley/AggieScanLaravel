<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('main');
    }

    public function code() {

        $users = AggieScanUser::all();

        return $users;

        return view('datapage', [
            'uin' => request('uin')
        ]);
    }
}
