<!DOCTYPE html>
  <html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drawer</title>
  <link rel="style.css" type="text/css" href="css/stylesheet.css">
</head>
<header>
    なら旅net
   <a class="menuButton" id="menuButton">
      <div> </div>
      <div> </div>
      <div> </div>
    </a>
  </header>
 <img src="{{asset('img/daibutsu.jpg')}}" style/>
 <div class="title">
 <p>お土産の詳細結果</p>
 </div>
 <form action="/place/gift" method="post">
  {{csrf_field()}}

 </form>

 @if(isset($items))


 <div class="content">

   @foreach($items as $item )
   <div class="box">
    {{$item->gift}}<br />
    <img src="{{$item->img_url}}"  />
    <br/>
  </br/>
    概要<br/>
   {{$item->summary}}

  </div>
   @endforeach
 </div>
 @endif
