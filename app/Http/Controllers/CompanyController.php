<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Motors;
use App\Models\Admin;
use App\Models\Models;
use App\Models\Categories;
use App\Models\Transactions;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class CompanyController extends Controller
{
    
    public function login(){
        return view('authuser/loginuser');
    }
    public function postlogin(Request $request){
        //if(Auth::Attempt($request->only('email','password')))
        //$request->session()->regenerate();
        //$take=Auth::User()->level;
        
       // if($take=='admin'){
           // return redirect()->intended('artikel');
       // }elseif($take=='karyawan'){
        //    return redirect()->intended('karyawan');
       // }
       // return redirect('/login');
       if(Auth::Attempt($request->only('email','password'))){
        return redirect('rental');
    }
    }
    public function logout(){
        Auth::logout();
        return redirect('/loginuser');
    }
    // landing
    public function landing(){
        $rental=Motors::with('models','admins','categories')->get();
        return view('user/index',compact(['rental']));
    }
    public function order($id){
        
        $motor = DB::table('motors')
        ->get();
        $rental=DB::table('motors')
        ->where('id',$id)
        ->get();
        $rental=Motors::with('models','admins','categories')->get();
        return view('user/order',compact(['rental','motor']));
    }
    public function postorder(Request $request){
        
        DB::beginTransaction();
        try{    
        $transaction=Transactions::create([
            'user_id'=>auth()->user()->id,
            'motor_id'=>$request->motor_id,
            'rent_for'=>$request->rent_for,
            'penalty'=>$request->penalty,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'return_date'=>$request->return_date,
            'real_return_date'=>$request->real_return_date
        ]); 
            DB::commit();
            return redirect('/rental')->with('success','Menambahkan data berhasil');
        }catch(\Exception $e) {
            report($e);
            DB::rollBack();
            return back()->withInput()->witherrors([
                'errors'=> 'Gagal'
            ]);
        }
    }
}
