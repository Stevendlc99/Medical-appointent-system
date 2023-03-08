<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function insert(Request $request){
        $id = Auth::id();
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $phone = $request->input('phone');
        $date = $request->input('date');
        $department = $request->input('department');
        $doctor = $request->input('doctor');
        $message = $request->input('message');
        $estado = 'pending';
        $hour = $request->input('time');
        $data=array('id'=>$id,'name'=>$name,"email"=>$email,"phone"=>$phone,"date"=>$date,"department"=>$department, "doctor"=> $doctor, "message"=> $message, "estado" => $estado ,  "hour" => $hour );
        DB::table('appointments')->insert($data);
        echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';
    }

    

   

    
}
