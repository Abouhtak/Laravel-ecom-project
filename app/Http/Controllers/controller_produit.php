<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;

class controller_produit extends Controller
{
    //
    public function show(){
$produit=produit::all()->where('categorie', 'Action');
        return view('Genres.Action',compact( 'produit'));
        // dd($produit);
    }
    public function show_ch(){
        $produit=produit::all()->where('categorie', 'Adventure');
                return view('Genres.Adventure',compact( 'produit'));
                // dd($produit);
            }
            public function show_th(){
                $produit=produit::all()->where('categorie', 'Thriller');
                        return view('Genres.Thriller',compact( 'produit'));
                        // dd($produit);
                    }
    public function show_w(){
        $produit=Produit::paginate(6);
        return view('welcome',compact( 'produit'));
    }


}
