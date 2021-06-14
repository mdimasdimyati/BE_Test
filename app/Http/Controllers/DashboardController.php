<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function __invoke(){
        $candidate = DB::select('select gender, count(gender) as total from candidate where gender in(?,?) group by gender', ['L','P']);
        // dd($candidate);
        return view('dashboard',compact('candidate'));
    }
}
