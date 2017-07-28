<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Projet;


class UsersProjetsController extends Controller
{
    public function index() {

    	$projets = User::find(15)->projets;

		foreach ($projets as $projet) {

			
			return view('admin.projets.user_projet',['projets_in_blade'=>$projets]);
    //
		}

    }

}