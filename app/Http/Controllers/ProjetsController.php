<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;

class ProjetsController extends Controller
{
    public function index()
    {
    	/*$projets = [
    			'0' => [
    				'titre_projet' => 'Test projet',
    				'contenu_projet' => 'blablabla',
    			]
    	];
    	return view('admin.projets.liste', compact('projets'));
        
        */
        $projets = Projet::all();
       
        return view('admin.projets.projets',['projets_in_blade'=>$projets]);
    }

    public function create()
    {
        return view('admin.projets.create');
    }

    public function store(Request $request) 
    {
        projets::create($request->all());
        return 'compte créer';
        return $request->all();
    }
}
