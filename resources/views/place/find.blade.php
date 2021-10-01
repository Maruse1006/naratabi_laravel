<!DOCTYPE html>
  <html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drawer</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
  <script src="{{ asset('js/hoge.js') }}"></script>
</head>
<div class="hwrapper">
<header>
    なら旅net
   <a class="menuButton" id="menuButton">
      <div> </div>
      <div> </div>
      <div> </div>
    </a>
  </header>
</div>
 <div class="img">
 <img src="{{asset('img/tokae.jpg')}}" width="100%" height="150"  />
</div>
 <div class="title">
 <p>一覧ページ</p>
 </div>
 <form action="/place/find" method="post">
  {{csrf_field()}}
 </form>
 @if(isset($items))
 <div class="content">
   @foreach($items as $item )
   <div class="box">
    <div class="block">
      <p><a href="{{action('PlaceController@show',[$item->id])}}"
      class="btn btn-primary btn-primary btn-sm">
      <span>{{$item->place}}</span><tr/></a></p>
       <img src="{{$item->img_url}}"  />
       
    </div>
   @endforeach
 </div>
</div>
 @endif
 @section('footer')
 copyright
 @endsection
