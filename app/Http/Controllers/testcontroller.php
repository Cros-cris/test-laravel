<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;

class testcontroller extends Controller
{
  public function index () {
    return redirect('/');
  }
  public function home(){
    $test = test::all();

    return view('home',[
      'tests' => $test
    ]);
}


public function contact(){

  return view('contact');
}

public function about(){

  return view('about');
}

  public function create(){

    return view('create');

}

  public function store(){
    $t = new test();

      $t->project = request('project');
      $t->beschrijving = request('beschrijving');

        $t->save();

          return redirect('/test/');

        }

public function update($id){

  $t = test::find($id);

    $t->project = request('project');
    $t->beschrijving = request('beschrijving');

      $t->save();

        return redirect('/test/');

      }

public function destroy($id){

  test::find($id)->delete();


      return redirect('/test/');

}

public function edit($id){

    $test = test::find($id);

      return view('/.edit', compact('test'));

  }

public function show(){


  }


}
