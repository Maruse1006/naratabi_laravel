<!DOCTYPE html>
  <html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drawer</title>
  <link rel=rese>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css" integrity="sha512-m3pAvNriL711NMlhkZHK6K4Tu2/RjtrzyjxZU8mlAbxxoDoURy27KajN1LGTLeEEPvaN12mKAgSCrYEwF9y0jA==" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js" integrity="sha512-1LlEYE0qExJ/GUfAJ0k2K2fB5sIvMv/q6ueo3syohvQ3ElWDQVSMUOf39cxaDWHtNu7M6lF6ZC1H6A1m3SvheA==" crossorigin="anonymous"></script>
</head>
<body>
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

  <div class="part">
    <img src="{{ asset('img/shika.jpg') }}" style="width:100%;" />
  </div>
 <div class="title">
  <p>鹿と大仏だけじゃない奈良を知る</p>
 </div>
   <nav id="nav">
     <ul>
       <li><a href="{{url('/test')}}">トップへ戻る</a></li>
       <li><a href="">今日</a></li>
       <li><a href="">今週</a></li>
       <li><a href="">週末</a></li>
       <li><a href="">今月</a></li>
       <li><a href="">このサイトについて</a></li>
     </ul>
   </nav>

 <form action="/place/find" method="post">
  {{csrf_field()}}
<div class="search">
  <input type="text" id="input_message"  value="奈良 "name="input"style="border-radius:10px;" >
  <input type="submit" value="find">
</div>
 <div class="tab">
  <div class="shrine">
    <form>
     <input type="button" value="神社・寺" onClick="jinjya()" style="border-radius:30px;">
    </form>
  </div>
    <div class="souvenir">
    <form>
     <input type="button" value="お土産" onClick="miyage()" style="border-radius:30px;">
    </form>
   </div>
   <div class="hotel">
   <form>

    <input type="button" value="宿" onClick="miyage()" style="border-radius:30px;">

    <input type="button" value="宿" onClick="hotel()" style= "border-radius:30px width:30%;">

   </form>
  </div>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
          <div class="tav">
            温泉特集
          </div>
         <img src="{{ asset('img/okame.jpg') }}"  />
      </div>
      <div class="swiper-slide"><img src="{{ asset('img/tanaka.jpg') }}"  /></div>
      <div class="swiper-slide"><img src="{{ asset('img/daibutsu.jpg') }}"  /></div>

      <div class="swiper-slide">スライドー１</div>
      <div class="swiper-slide">スライドー2</div>
      <div class="swiper-slide">スライドー3</div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<script src="{{ asset('js/hoge.js') }}"></script>
 </form>
 </body>
</html>
