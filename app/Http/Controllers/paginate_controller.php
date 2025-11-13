<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;


class paginate_controller extends Controller
{

    public function paginate_register_search()
    {
        $info=register::select()->paginate(3);
        return view('registration_tabel', ['info' => $info]);
    }

}
