<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class main extends Controller
{
    
  public function frmse(Request $request)
    {
        $x=$request->plno;
        if($x==""){
            $p=DB::table('packing_list_hd')->get();
            return view('search')->with('inno',$request->inno)->with('indate',$request->indate)->with('p',$p);
        }
        
    }
}
