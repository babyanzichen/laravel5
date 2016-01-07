@extends('_layouts.default')

@section('content')
  <h4>
    <a href="/">⬅️返回首页</a>
  </h4>

  <h1 style="text-align: center; margin-top: 50px;">{{ $article->title }}</h1>
  <hr>
  <div id="date" style="text-align: right;">
    {{ $article->updated_at }}
  </div>
  <div id="content" style="padding: 50px;">
    <p>
    <?php
    $str = "$article->body";
    echo htmlspecialchars_decode($str);
   ?>
    </p>
  </div>
  <div id="comments" style="margin-bottom: 100px;">

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div id="new">
      <form action="{{ URL('comment/store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="article_id" value="{{ $article->id }}">
        <div class="form-group">
          <label>Nickname</label>
          <input type="text" name="nickname" class="form-control" style="width: 300px;" required="required">
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="email" name="email" class="form-control" style="width: 300px;">
        </div>
        <div class="form-group">
          <label>Home Page</label>
          <input type="text" name="website" class="form-control" style="width: 300px;">
        </div>
        <div class="form-group">
          <label>Content</label>
          <script id="container" name="content" type="text/plain">
         
          </script>

           <!-- 实例化编辑器 -->
          <script type="text/javascript">
          var ue = UE.getEditor('container');
          </script>
        </div>
        <button type="submit" class="btn btn-lg btn-success col-lg-12">Submit</button>
      </form>
    </div>

<script>
function reply(a) {
  var nickname = a.parentNode.parentNode.firstChild.nextSibling.getAttribute('data');
  var textArea = document.getElementById('newFormContent');
  textArea.innerHTML = '@'+nickname+' ';
}
</script>

    <div class="conmments" style="margin-top: 100px;">
      @foreach ($article->hasManyComments as $comment)

        <div class="one" style="border-top: solid 20px #efefef; padding: 5px 20px;">
          <div class="nickname" data="{{ $comment->nickname }}">
          @if ($comment->website)
            <a href="{{ $comment->website }}">
              <h3>{{ $comment->nickname }}</h3>
            </a>
          @else
            <h3>{{ $comment->nickname }}</h3>
          @endif
            <h6>{{ $comment->created_at }}</h6>
          </div>
          <div class="content">
           
           <?php
            $str = "$comment->content";
            echo htmlspecialchars_decode($str);
             ?>
           
          </div>
          <div class="reply" style="text-align: right; padding: 5px;">
            <a href="#new" onclick="reply(this);">回复</a>
          </div>
        </div>

      @endforeach
    </div>
  </div>
@endsection