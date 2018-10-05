<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class TasksController extends Controller
{
  public function index()
  {
    $tasks=Tasks::all();
    return view('welcome',compact('tasks'));
  }
  public function ShowTask($id)
  {
    $tasks=Tasks::find($id);
    if($tasks==NULL) {
    }else {
      return view('about',compact('tasks'));
    }
  }
  public function validateCredentials()
  {
    $this->validate(request(),[
      'title'=>'required',
      'body'=>'required'
  ]);
    $post=New Tasks;
    $post->title=request('title');
    $post->body=request('body');
    $post->save();
    return redirect('/');
  }
}