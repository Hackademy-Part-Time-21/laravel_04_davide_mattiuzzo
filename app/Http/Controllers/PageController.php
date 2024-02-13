<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function chisimao(){
        $titolo = "chi siamo";
        return view('chi_siamo', compact('titolo'));
    }
    public $contatti;

    public function __construct()
    {
        $this->contatti=[
            1=>['id'=>1,
            'name'=>'Mario1',
            'surname'=>'Rossi'],

            2=>['id'=>2,
            'name'=>'Mario2',
            'surname'=>'Rossi'],

            3=>['id'=>3,
            'name'=>'Mario3',
            'surname'=>'Rossi'],
        ];
    }

    public function home(){
        $auth = [
            'name'=>'Ciccio',
            'surname'=>'Ci',
        ];
        $titolo="titolo";
        return view('welcome',compact('auth','titolo'));
    }

    public function chisiamo(){
        $titolo="titolo";
        $sottotitolo="Lorem ipsum";
        return view('chi_siamo',compact('titolo','sottotitolo'));
    }

    public function contatti(){
        return view('contatti',['contatti'=>$this->contatti]);
    }

    public function contatto($id){
        $contatto = $this->contatti[$id];
        return view('contatto',compact('contatto'));
    }


}
