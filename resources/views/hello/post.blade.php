@section('content')
<h1>投稿一覧ページ</h1>
<div>
	@foreach($posts as $post)
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->read_more }}</p>
		<a href="{{ $post->id }}">続きを読む</a>
	@endforeach
</div>
<div>
{{Form::open(['method'=>'GET'])}}
{{Form::input('検索する','q'null)}}
{{Form::close()}}
</div>

<form action="/posts" method="post">
	<input type="text" name="id" value="{{$items->id}}" />
	<input type="text" name="summary" value="{{$items->summary}}" />

</form>
