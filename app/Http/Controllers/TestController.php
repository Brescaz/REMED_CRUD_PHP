<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    //
    public function testMethod()
    {


        // Create

/*        $user1 =  new User;
        $user1->name = 'Kurt Cobain';
        $user1->email = 'kurt@nirvana.com';
        $user1->age = 28;
        $user1->save();*/
        //
        // $data = User::all();



        // Read

        $data = User::all();
        // $data = User::take(2)->get();
        // $data = User::orderBy('name','desc')->get();
        // $data = User::where('name', "Raphaël")->first();
        // $data = User::where('age', '>', 30)->first();
        // $data = User::find(10);



        // Update

        // $user1 =  User::find(10);
        // $user1->age = 69;
        // $user1->save();
        //
        // $data = User::all();



        // Delete

        // User::destroy(27);
        // $data = User::all();


        return view('var_dump')->with('data_in_blade', $data);
    }
}
