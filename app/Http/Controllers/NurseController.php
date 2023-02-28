<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class NurseController extends Controller


{
  

    public function insert(Request $request){
        $id = $request->input('id');
        $date = $request->input('date');
        $weight = $request->input('weight');
        $height = $request->input('height');
        $temperature = $request->input('temperature');
        $pressure = $request->input('pressure');
        $pulse = $request->input('pulse');
        $message = $request->input('message');
        $data=array('id'=>$id,'date'=>$date,"weight"=>$weight,"height"=>$height,"temperature"=>$temperature,"pressure"=>$pressure, "pulse"=> $pulse, "message" => $message );
        DB::table('vital_data')->insert($data);
        echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';
    }

    public function consulta2N(Request $request)
    {
        
        $registros = DB::table('vital_data')->get();
        return view('resultado2N')->with('registros', $registros);
    }
}