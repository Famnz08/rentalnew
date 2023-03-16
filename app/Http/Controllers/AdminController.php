<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motors;
use App\Models\Admin;
use App\Models\Models;
use App\Models\Categories;
class AdminController extends Controller
{
    public function index(){
        $motor=Motors::all()->count();
        $admin=Admin::all()->count();
        $model=Models::all()->count();
        $categori=Categories::all()->count();
        return view('admin/index',compact(['motor','admin','model','categori']));
    }
}
