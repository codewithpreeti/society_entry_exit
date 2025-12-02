<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guard;
use App\Models\Visitor;

class LoginController extends Controller
{
    //
    public function index()
    {
       return view('guard-login');
    }

    public function login(Request $request){
//        $input = $request->all();
//        $inputc = $request->collect();
//        echo gettype($input);
//        echo gettype($inputc);
//        echo "<pre>";
//        print_r($input);
//        print_r($inputc);
//        dd($request->request);    request
//        dd(json_encode($request->input()));
//      return json_encode($request->all());
//      return json_encode($request);

        if($request->isMethod('post') && !empty($request->input('guard_id'))){

            $guard = Guard::find($request->input('guard_id'));
         //   dump($guard->id);  // find() function returns the model object if find or null if not found
//            $data = compact('guard');
//            dd($data);
//            dump(gettype($guard->id));

            if($guard){
                $guardArray = $guard->toArray();
                session()->put('login_guard',$guardArray);
                return response()->json(['success'=>true,
                    'redirect'=> url('/visitor-form')]);
            }else{
                return response()->json(['error'=>'Attention Guard id not found !! ']);
            }
        }
    }

    public function visitors_form(Request $request){

        if($request->method()=='post'){
            echo "das";

        }else{
            return view('/visitors-form');
        }
    }

}
