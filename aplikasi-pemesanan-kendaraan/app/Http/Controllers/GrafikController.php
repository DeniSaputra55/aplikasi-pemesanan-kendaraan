<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GrafikController extends Controller
{
    public function index()
    {
        $data = Pesanan::select('id', 'created_at')->get()->groupBy(function($data){
            return Carbon::parse($data->created_at)->format('M');
        });

        $months = [];
        $monthCount= [];

        foreach($data as $month => $values) {
            $months[] = $month;
            $monthCount[] = count($values); 
        }

        return view('dashboard.grafik.main', [
            'data' => $data,
            'months' => $months,
            'monthCount' => $monthCount
        ]);
    }
}
