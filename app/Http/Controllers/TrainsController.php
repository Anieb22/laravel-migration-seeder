<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainsController extends Controller
{
    public function index(){
        $now = date ('Y-m-d', strtotime(now()));
        $trains = Train::where('data_partenza', '>=', $now)->get();
        return view('home', compact('trains'));
    }
}
