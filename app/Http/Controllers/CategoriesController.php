<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
class CategoriesController extends Controller
{
    public function index(){
        $categori=Categories::all();

        return view('categori/index',compact(['categori']));
    }
    public function create(){
        return view('categori/create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|min:2|max:255',
        ]);
        $message=[
                'name.required'=>'minimal 2 huruf',
        ];
        DB::beginTransaction();

        try{
            $categori=Categories::create([
                'name'=> $request->name
            ]);
            DB::commit();
            return redirect('/admin/categori')->with('success','Menambahkan data berhasil');
        }catch(\Exception $e) {
            report($e);
            DB::rollBack();
            return back()->withInput()->withErrors([
                'errors'=> 'Gagal'
            ]);
        }
    }
    public function edit($id){
        $categori=Categories::find($id);
        return view('categori/edit',compact(['categori']));
    }
    
   
    public function update($id,Request $request){
        DB::beginTransaction();

        try{
            $categori = Categories::find($id);
            $categori->update($request->except('_token','Edit'));
            DB::commit();
            return redirect('/admin/categori')->with('success','Menambahkan data berhasil');
        }catch(\Exception $e) {
            report($e);
            DB::rollBack();
            return back()->withInput()->withErrors([
                'errors'=> 'Gagal'
            ]);
        }
    }
    public function destroy($id){
        $categori=Categories::find($id);
        $categori->delete();
        return redirect('/admin/categori');
    }
}
