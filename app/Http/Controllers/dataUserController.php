<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\User;

class dataUserController extends Controller
{
    public function index(){
        $umkm = Umkm::all();

        $user = User::all();
        $pageTitle = "Data User";

        return view('umkm.data_user', compact('umkm', 'user', 'pageTitle'));

    }
}
