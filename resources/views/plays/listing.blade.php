@extends('_layouts.default')

@section('content')
	
	<div class="page-content">
		<ul>
			@foreach ($plays as $play)
			
			    <li class="article-list">
			       <div class="article-photo">
					   <image src="../images/{{$play->picture}}" style="width:30%;height:100%">	</image>	
                   </div>
                   <div class="article-brief">
					<a href="{{ URL('plays/'.$play->id) }}">
						<h4>{{ $play->title }}</h4>
					</a>

						<h5>作者：{{ $play->author }}</h4>
	
						<h5>{{ $play->summary }}</h4>
                    </div>
		        </li>

			@endforeach

	    </ul>
	    <?php echo $plays->render(); ?>
    </div>

@endsection