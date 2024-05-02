<?php

namespace App\Http\Controllers;

use App\Models\Addcard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class command extends Controller
{
    //
    public function command(){
        $command=Addcard::all();
        return view('command' , compact('command'));

    }
    public function destroyon($id)
    {


        DB::table('addcards')->where('produit_id_card',$id)->delete();


        return redirect()->route('command');





    }
    public function buy(){
        return redirect()->route('Action')->with('buy' ,  'commanded successfuly !');

    }
}
