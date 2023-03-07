<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DB;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller


{
  public function store(Request $request)

  {
        $id = Auth::id();
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $subject = $request->input('subject');
        $message = $request->input('message');
        $response = 'pending';
        $data=array('id'=>$id, 'name'=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message,"response"=>$response);
        DB::table('queries')->insert($data);
        echo "Record inserted successfully.<br/>";
       
  }

  public function buscar(Request $request)
{
    $id = Auth::id();
    $registros = DB::table('queries')->where('id',$id)->get();
    return view('resultado', ['registros' => $registros]);
}

public function consulta2(Request $request)
{
    $id = Auth::id();

    $registros = DB::table('appointments')->where('id',$id)->get();
    return view('resultado2')->with('registros', $registros);
}

public function index()
    {
        return view('doctor');
    }

    public function indexN()
    {
        return view('nurse');
    }

    public function updateResponse(Request $request, $id)
    {
        $registro = DB::table('queries')->where('subject', $id)->first();
    
        if (!$registro) {
            abort(404);
        }
    
        $response = $request->input('response');
    
        DB::table('queries')->where('subject', $id)->update(['response' => $response]);
    
        return redirect()->back();
    }
    


}


