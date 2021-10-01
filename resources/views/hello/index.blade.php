@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection
@section('content')
 <table>
 <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
 @foreach($items as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->summary}}</td>

  </tr>
 @endforeach
 </table>
 @endsection
@section('footer')
copyright 2017 tuyanmo.
@endsection

<style>
.content{
  display:flex;
}
.title{
  position:absolute;
 top:120px;
 left:120px;
 font-size: 25px;
 margin-top:20px;
}

</style>
