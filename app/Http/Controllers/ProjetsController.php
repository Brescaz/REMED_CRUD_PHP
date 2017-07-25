<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    public function index()
    {
    	$projets = [
    			'0' => [
    				'titre_projet' => 'Test projet',
    				'contenu_projet' => 'blablabla',
    			]
    	];
    	return view('admin.projets.liste', compact('projets'));
    }

    public function create()
    {
    	return 'working projet';
    }
}
