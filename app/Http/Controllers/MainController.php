<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Review;
use App\Models\Portfolio;

class MainController extends Controller
{
  public function index(){
    return view('welcome');
  }

  public function review(Request $request){
    $valid = $request->validate([
      'name' => 'required|min:4|max:100',
      'email' => 'required|min:4|max:100',
      'phone' => 'required|min:4|max:100',
      'message' => 'required|min:4|max:500'
    ]);
    
    $review = new Review();
    $review->full_name = $request->name;
    $review->email = $request->email;
    $review->number_phone = $request->phone;
    $review->message = $request->message;

    $review->save();

    return redirect()->route('index');
  }
}
