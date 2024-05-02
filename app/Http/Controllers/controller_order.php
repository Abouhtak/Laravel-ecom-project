<?php

namespace App\Http\Controllers;

use App\Models\Addcard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\order;
use App\Models\orderdetail;
use App\Models\produit;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class controller_order extends Controller
{
    public function add(Request $request,$id){
        $addC=produit::find($id);


        $Add = new Addcard;
        $Add->produit_id_card=$addC->id;
        $Add->nom_p_card=$addC->nom_produit;
        $Add->prix_card=$addC->prix_produit;
        $nouvelleQuantite = $Add->quantite + $request->input('quantite');
        $Add->q_card = $nouvelleQuantite;
        $Add->totale=$nouvelleQuantite*$addC->prix_produit;
        $Add->imge=$addC->img;
        $Add->user_id_card=Auth::id();



        $Add->save();
        return back()->with('msg' ,  'Commanded successfuly !');


    }
    public function destroy()
    {


        DB::table('addcards')->delete();




        return redirect()->route('Action');
    }
    public function destroyone($id)
    {


        DB::table('addcards')->where('produit_id_card',$id)->delete();


        return redirect()->route('Action');





    }



    public function showI(){

        return view('input_field');
    }


}


