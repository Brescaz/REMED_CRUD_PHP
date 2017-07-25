<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	$users = [
    			'0' => [
    				'nom' => 'peter',
    				'age' => '22',
    			]
    	];
    	return view('admin.projets.users', compact('users'));
    }

    public function create()
    {
    	return view('admin.projets.users_create');
    }

    public function store(Request $request) 
    {
    	User::create($request->all());
    	return 'GIT GUD CASU';
    	return $request->all();
    }
}

