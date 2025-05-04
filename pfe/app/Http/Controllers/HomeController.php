<?php

namespace App\Http\Controllers;
use App\Models\Annonce;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  
        public function homeshow(){
            $page='page1';
    $var1 = Annonce::where('categorie', 'maison')->with('images')
    ->with('utilisateur')->get();
    $var2 = Annonce::where('categorie', 'sport')->with('images')
    ->with('utilisateur')->get();
    $var3 =Annonce::where('categorie', 'animaux')->with('images')
    ->with('utilisateur')->get();
    $var4 = Annonce::where('categorie', 'electronique')->with('images')
    ->with('utilisateur')->get();
    $var5 = Annonce::where('categorie', 'vetements')->with('images')
    ->with('utilisateur')->get();
    $var6 = Annonce::orderBy('date_publication', 'desc')->with('images')
    ->with('utilisateur')->get();

    // Regrouper tous les tableaux
    $allVars = [
        'var1' => $var1,
        'var2' => $var2,
        'var3' => $var3,
        'var4' => $var4,
        'var5' => $var5,
        
    ];

    // Choisir 4 variables au hasard
    $randomVars = collect($allVars)->random(3);

    // Préparer un array pour la vue
    $data = [];
    foreach ($randomVars as $key => $value) {
        $data[$key] = $value;
    }
    


    // Envoyer
    return view('home', compact('page','var6', 'data') );
}


    
    public function category($category){
        $page='page2';

        $c='category';
        if($category=='immobilier'){
            $c= Annonce::where('categorie', $category)->with('images')
            ->with('utilisateur')->get();
        }
        if($category=='sport'){
            $c= Annonce::where('categorie', $category)->with('images')
            ->with('utilisateur')->get();
        }
        if($category=='animaux'){
            $c= Annonce::where('categorie', $category)->with('images')
            ->with('utilisateur')->get();
        }
        if($category=='autres'){
            $c= Annonce::where('categorie', $category)->with('images')
            ->with('utilisateur')->get();
        }
        if($category=='maison'){
            $c= Annonce::where('categorie', $category)->with('images')
            ->with('utilisateur')->get();
        }
        if($category=='vetements'){
            $c= Annonce::where('categorie', $category)->with('images')
            ->with('utilisateur')->get();
        }
        if($category=='electronique'){
            $c= Annonce::where('categorie', $category)->with('images')
            ->with('utilisateur')->get();
        }
        if($category=='vehicules'){
            $c= Annonce::where('categorie', $category)->with('images')
            ->with('utilisateur')->get();
        }
        else{
            
        }
        return view('home',compact('page','c'));
    }
    public function details($id){
        $page='page3';
        $details = Annonce::where('id', $id)
        ->with('images')
        ->with('utilisateur')
        ->get();
        foreach($details as $ad){
            $ads = Annonce::where('id_utilisateur', $ad->id_utilisateur)
            ->with('images')
            ->with('utilisateur')
            ->limit(4)
            ->get();   
        }
        return view( 'home',compact('page','ads','details'));
    }
    public function showAuthForm()
    {
        $page='page4';
        return view('home',compact('page'));
    }
}
