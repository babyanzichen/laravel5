@extends('_layouts.default')
@section('content')
<div id="demo2" class="slideBox">
  <ul class="items">
  @foreach ($articles as $article)

    <li style="width:670px;height:281px"><a href="{{ URL('articles/'.$article->id) }}" title="{{ $article->title }}"><img src="../images/{{$article->picture}}"></a></li>
  @endforeach
  </ul>
</div>

<div class="blog-article"><span class="table-title">最新博文</span>|<span>今日热门</span>
		<ul>
			@foreach ($articles as $article)
			<li style="margin: 20px 0;">
				<div class="title">
					<a href="{{ URL('articles/'.$article->id) }}">
						<h6>{{ $article->title }}</h6>
					</a>
				</div>
				<div class="author">
					<a href="{{ URL('articles/'.$article->id) }}">
						<h6>{{ $article->author }}</h6>
					</a>
				</div>
			</li>
			<hr>
			@endforeach
			<a href="{{ URL('articles/listing') }}">查看更多......</a>
		</ul>
</div>
<div class="blog-leave"><span class="table-title">留言板</span>
	<div class="leave-list">
	<ul>
			@foreach ($leaves as $leave)
			<li style="margin: 20px 0;">
						<span class="nickname">{{ $leave->nickname }}</span>
			            <span>发表于{{ $leave->created_at }}</span>
				        <p>{{ $leave->content }}</p>
			</li>
			<hr>
			@endforeach
			<a href="{{ URL('leaves/listing') }}">查看更多......</a>
		</ul>
	</div>
</div>
	
	
@endsection
