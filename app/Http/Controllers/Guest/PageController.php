<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('Orario_di_partenza', date('Y-m-d'))
            ->where('Cancellato', false)->get();
        return view('home', compact('trains'));
    }
};
