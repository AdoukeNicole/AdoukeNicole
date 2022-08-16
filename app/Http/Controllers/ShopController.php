<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //

    public function login(){
       
    	//function to return registration.blade.php
        return view("auth.login");
    }

    public function registration(){
    	//function to return login.blade.php
        return view("auth.registration");
    }
    //function to add shopkeeper 
    public function RegisterUser(Request $request){
    	//pas de données pas de submit
        $request->validate([
        	//Regles de validation
            'name'=>'required',
            'surname'=>'required',
            'email' => 'required|email|unique:users',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required|min:5|max:12',
        ]);

        $item = new User();
        $item->name = $request->name;
        $item->surname = $request->surname;
        $item->email = $request->email;
        $item->phone = $request->phone;
        $item->address = $request->address;
        $item->password = Hash::make($request->password);

        $res=$item->save();

        return back()->with('success', 'You have enregistered successfully!');
        
    }

    //function to connect shopkeeper
    public function LoginUser(Request $request){
    	//pas de données pas de submit
        $request->validate([
            'email' => 'required|email',
            'password'=>'required|min:5|max:12',
        ]);

        $item = User::where('email','=',$request->email)->first();//Vérification de l'email
        if($item){
            //permet de comparer la valeur d'une chaîne avec une valeur cryptée. 
            if(Hash::check($request->password, $item->password)){
                $request->session()->put('LoginId', $item->id);
                return redirect('product-list');
            }  
            else
                {
                    return back()->with('fail', 'Password not matches');
                }
            
        }else{
            return back()->with('fail', 'This email is not enregisterd!');
        }
    }
    // 
    public function dashboard(){
        $show=array();
        if(Session::has('LoginId')){
            $show = User::where('id','=',Session::get('LoginId'))->first();
        }
        return view('auth.dashboard', compact('show'));

    } 

    public function index(){
        return view("index");
    }


    public function log(Request $request){
        //Clear all data in session
        session()->flush();
        return redirect('login');
    }

}