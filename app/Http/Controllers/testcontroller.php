<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;

class testcontroller extends Controller
{
  public function home(){
    $t = test::all();

    return view('home',[
      'tests' => $t
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

  return redirect('/');

  }

public function update(){


}

public function destroy(){


}

public function edit($id){

$t = test::find($id);

return view('/.edit', compact('test'));

}

public function show(){


}


}
