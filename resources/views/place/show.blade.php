

<!DOCTYPE html>
  <html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drawer</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    なら旅net
    <script src="{{ asset('js/hoge.js') }}"></script>
   <a class="menuButton" id="menuButton">
      <div> </div>
      <div> </div>
      <div> </div>
    </a>
</header>
  <div class="img">
    <img src="{{asset('img/tokae.jpg')}}" width="100%" height="150"  />
  </div>
   <nav id="nav">
     <ul>
       <li><a href="">トップへ戻る</a></li>
       <li><a href="">今日</a></li>
       <li><a href="">今週</a></li>
       <li><a href="">週末</a></li>
       <li><a href="">今月</a></li>
       <li><a href="">このサイトについて</a></li>
     </ul>
   </nav>
 </main>
 <div class="content">
   <div class="box">
    <div class="block">
     <span>{{$items->place}}</span><br />
       <img src="{{$items->img_url}}"  /></br>
      <br/>
      </br/>
    <p> 概要</p><br/>
     {{$items->summary}}</br>
     <p>住所・アクセス</p></br>
     {{$items->address}}
   </div>
   <iframe id='map' src='https://www.google.com/maps/embed/v1/place?key={{ config("services.google-map.apikey") }}&q={{ $items->place }}'
  width='50%' height='300' margin-left:'10%' frameborder='0'></iframe>
</script>
 </div>
 </form>
 </body>
</html>

<style>
header{
  width:100%;
}
.main img{
  position:absolute;
  height:120px;
  width:120%;
  top:40px;
  z-index: 10;
  }
}
.main {
  position:relative;
  height:100px;
  top:50px;
}
.box{
  position:relative;
  top:100px;
  display:inline;
  text-align:center;
}
.box img{
  width:50%;
  height:50%;
}
.title{
  z-index:20;
  top:30px;
  color:#FFFFFF;
}

.content{
  margin:auto;
  width:100%;
  padding-bottom:30%;
}
span{
  text-decoration: underline;
  font-weight:bold;
  font-size: 30px;
  line-height: 1.2;
  color:#D75730;
  font-family:serif;
}
p{
  color:#D75730;
  border-bottom:solid 3px;
}
</style>
