<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Motors;
use App\Models\User;
use App\Models\Transactions;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class TransactionsController extends Controller
{
 public function index(){
    $trx=Transactions::with('motors','users')->get();
    return view('transactions/index',compact('trx'));
 }   
 
 public function destroy($id){
   $trx=Transactions::find($id);
   $trx->delete();
   return redirect('/admin/transaction');
}
}
