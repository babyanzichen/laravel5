@extends('_layouts.default')

@section('content')
	
	<div id="content">
	 <div class="panel-body">

          <h6>那么多小伙伴们都给我留言了，你也说两句吧。表白请记得设为私密留言哦,我害羞^_^</h6>
          <form action="{{ URL('leaves/store') }}" method="POST">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
            您的昵称：<input type="nickname" name="name" class="form-control" required="required">
            <br>
            想对我说：<textarea name="content" rows="3" class="form-control" required="required"></textarea>
            <br>
          
           <select>
               <option value ="private">公开留言</option>
               <option value ="public">说悄悄话</option>
               <option value="hidden">你去猜吧</option>
               </select>
               <button type="submit" class="btn btn-lg btn-info">说完了</button>
               </form>
        </div>
		<ul>
			@foreach ($leaves as $leave)

			<li style="margin: 50px 0;">
			    <div class="name">
				
						<p><strong>{{ $leave->name }}</strong>发表于
					    <strong>{{ $leave->created_at }}</strong></p>
				</div>
	
				
				<div class="content">
				
						<h4>{{ $leave->comment }}</h4>
				
				</div>
			</li>
			@endforeach
			
		</ul>
		<?php echo $leaves->render(); ?>
		</div>
@endsection