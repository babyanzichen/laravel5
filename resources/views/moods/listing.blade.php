@extends('_layouts.default')

@section('content')
	
	<div id="content">
		<ul>
			@foreach ($moods as $mood)
			<li style="margin: 50px 0;">
				<div class="title">
					<a href="{{ URL('moods/'.$mood->id) }}">
						<h4>{{ $mood->created_at }}</h4>
					</a>
				</div>
				<div class="author">
					<a href="{{ URL('moods/'.$mood->id) }}">
						<h4>{{ $mood->content }}</h4>
					</a>
				</div>
			</li>
			@endforeach
			
		</ul>
		<?php echo $moods->render(); ?>
		</div>
@endsection