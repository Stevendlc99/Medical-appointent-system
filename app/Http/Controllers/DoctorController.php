<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class DoctorController extends Controller


{
  

  public function buscarP(Request $request)
{
    
    $registros = DB::table('queries')->get();
    return view('resultadoP', ['registros' => $registros]);
}

public function consulta2P(Request $request)
{
    
    $registros = DB::table('appointments')->get();
    return view('resultado2P')->with('registros', $registros);
}

public function approve($id)
    {
        DB::table('appointments')->where('date', $id)->update(['estado' => 'approved']);
        
        return redirect()->back();
    }

}


