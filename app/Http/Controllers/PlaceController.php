<?php

namespace App\Http\Controllers;

use App\Place;

use App\Gift;

//use App\Traits\GetTrait;


use App\Category;

use Illuminate\Http\Request;



class PlaceController extends Controller{

public function find(Request $request)
{
  return view('place.find',['input' =>'']);
}

public function search(Request $request)
{
  $category = Category::where('name',$request->input)->first();

    $places = Place::where('category_id',$category['id'])->get();

  $param = ['input'=>$request->input,'items'=>$places];


  return view('place.find',$param);
}
//showアクション以外は省略
public function show(Request $request,$id)
{
  $places=Place::find($id);
  //viewにデータを渡す
  return view('place.show',['items'=>$places]);
}
public function index(Request $request)
{
  return view('place.index');
}
public function test(Request $request){

  return view('place.test');
}
}
