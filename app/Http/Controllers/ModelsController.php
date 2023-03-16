<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Models;
class ModelsController extends Controller
{
    
    public function index(){
        $model=Models::all();

        return view('model/index',compact(['model']));
    }
    public function create(){
        return view('model/create');
    }
    public function store(Request $request){
        // $this->validate([
        //     'name' => 'required|min:5|max:255',
            
        // ]);
        DB::beginTransaction();

        try{
            $model=Models::create([
                'name'=> $request->name
            ]);
            DB::commit();
            return redirect('/admin/model')->with('success','Menambahkan data berhasil');
        }catch(\Exception $e) {
            report($e);
            DB::rollBack();
            return back()->withInput()->witherrors([
                'errors'=> 'Gagal'
            ]);
        }
    }
    public function edit($id){
        $model=Models::find($id);
        return view('model/edit',compact(['model']));
    }
    public function update($id,Request $request){
        DB::beginTransaction();

        try{
            $model = Models::find($id);
            $model->update($request->except('_token','Edit'));
            DB::commit();
            return redirect('/admin/model')->with('success','Menambahkan data berhasil');
        }catch(\Exception $e) {
            report($e);
            DB::rollBack();
            return back()->withInput()->witherrors([
                'errors'=> 'Gagal'
            ]);
        }
    }
    public function destroy($id){
        $model=Models::find($id);
        $model->delete();
        return redirect('/admin/model');
    }

    
}
