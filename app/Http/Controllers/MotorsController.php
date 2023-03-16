<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Motors;
use App\Models\Admin;
use App\Models\Models;
use App\Models\Categories;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class MotorsController extends Controller
{
     public function index(){
    //     dd(auth('admin'));
        $motor=Motors::with('models','admins','categories')->get();
        return view('motor/index',compact('motor'));
    }

    public function create(){
        
        $model = DB::table('models')
        ->get();
        $categori = DB::table('categories')
         ->get();
         $admin = DB::table('admins')
         ->get();
        return view('motor/create',compact(['model','categori','admin']));
    }
    public function store(Request $request){
        //  dd($request->all());
        DB::beginTransaction();

        try{

            $motor=Motors::create([
                'name'=>$request->name,
            // 'foto' => $request->foto->store('images','public'),
            'foto'=>$request->foto, 
                'price'=>$request->price,
                 'cc'=>$request->cc,
                'admin_id'=>$request->admin_id,
                'model_id'=>$request->model_id,
                'category_id'=>$request->category_id     
                
        
         ]);
         if($request->hasfile('foto')){
           
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $motor->foto = $request->file('foto')->getClientOriginalName(); 
             $motor->save();
         }
            DB::commit();
            return redirect('/admin/motor')->with('success','Menambahkan data berhasil');
        }catch(\Exception $e) {
            report($e);
            DB::rollBack();
            return back()->withInput()->witherrors([
                'errors'=> 'Gagal'
            ]);
        }
    }
    public function edit($id){
        $model = DB::table('models')
        ->get();
        $categori = DB::table('categories')
         ->get();
         $admin = DB::table('admins')
         ->get();
        $motor=Motors::find($id);
        return view('motor/edit',compact(['motor','model','categori','admin']));
    }
    public function update($id,Request $request){
        DB::beginTransaction();

        try{
            $motor = Motors::find($id);
            $motor->update($request->except('_token','Edit','model_id','admin_id','category_id'));
            
         if($request->hasfile('foto')){
           
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $motor->foto = $request->file('foto')->getClientOriginalName(); 
             $motor->save();
         }
            DB::commit();
            return redirect('/admin/motor')->with('success','Menambahkan data berhasil');
        }catch(\Exception $e) {
            report($e);
            DB::rollBack();
            return back()->withInput()->withErrors([
                'errors'=> 'Gagal'
            ]);
        }
    }
    
    public function destroy($id){
        $motor= Motors::find($id);
        $motor->delete();
        return redirect('admin/motor');
    }

}
