<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function contohGet(){
        return "Data berhasil diambil..";
    }
   
    public function contohPost(){
        return response()->json([
            'status'    => true,
            'message'   => 'Data Post Berhail..!!!'
        ]);
    }
}
