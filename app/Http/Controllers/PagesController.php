<?php

namespace App;

use Illuminate\Http\Request;

class PagesController extends Http\Controllers\Controller
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
