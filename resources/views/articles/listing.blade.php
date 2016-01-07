@extends('_layouts.default')

@section('content')
	
	<div class="page-content">
		<ul>
			@foreach ($articles as $article)
			
			    <li class="article-list">
			       <div class="article-photo">
					   <image src="../images/{{$article->picture}}" style="width:30%;height:100%">	</image>	
                   </div>
                   <div class="article-brief">
					<a href="{{ URL('articles/'.$article->id) }}">
						<h4>{{ $article->title }}</h4>
					</a>

						<h5>作者：{{ $article->author }}</h4>
	
						<h5>{{ $article->summary }}</h4>
                    </div>
		        </li>

			@endforeach

	    </ul>
	    <?php echo $articles->render(); ?>
    </div>

@endsection