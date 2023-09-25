<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AkarBilangan; // Import model



class AkarController extends Controller
{
    public function hitungAkar(Request $request)
    {
        $bilangan = $request->input('bilangan');

        // Memanggil stored procedure CalculateSquareRoot dengan parameter bilangan
        $result = DB::select('CALL CalculateSquareRoot(?)', array($bilangan));

        // Ambil hasil dari hasil kueri
        $response = $result[0];

        return response()->json([
            'bilangan' => $response->bilangan,
            'akar' => $response->akar,
            'waktu_pemrosesan' => $response->waktu_pemrosesan,
        ]);
    }

    public function getAllData()
    {
        $akarBilangan = AkarBilangan::all();

        return response()->json($akarBilangan);
    }
}

