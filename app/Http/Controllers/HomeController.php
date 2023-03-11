<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $date = Carbon::create(2023, 2, 27);
        $trains = DB::table('trains')
            ->whereDate('departure_time', '=', $date->toDateString())
            ->orderBy('departure_time')
            ->get();

        return view('index', compact('trains'));
    }
}
