<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;

class afficher_produit_detail extends Controller
{
    //
    public function detail($id){
        $produit=produit::find($id);
        

    }
}
