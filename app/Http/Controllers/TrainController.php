<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        // Ottieni la data odierna
        $oggi = Carbon::today();

        // Recupera i treni che partono oggi o successivamente e non sono cancellati
        $treni = Train::where('orario_partenza', '>=', $oggi)
                      ->where('cancellato', false)
                      ->orderBy('orario_partenza')
                      ->get();

        return view('home', ['treni' => $treni]);
    }
}
