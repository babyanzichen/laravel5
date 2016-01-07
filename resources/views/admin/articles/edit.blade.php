
@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">编辑 article</div>

        <div class="panel-body">

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
      <div class="editor">
    
          <form action="{{ URL('admin/articles/'.$article->id) }}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="title" class="form-control" required="required" value="{{ $article->title }}">
            <br>
            <input type="text" name="author" class="form-control" required="required" value="{{ $article->author }}">
            <br>
             <input type="text" name="summary" class="form-control" required="required" value="{{ $article->summary }}">
            <br>
            <script id="container" name="body" type="text/plain">
          {{ $article->body }}
          </script>

           <!-- 实例化编辑器 -->
          <script type="text/javascript">
          var ue = UE.getEditor('container');
          </script>
           
            <br>
            <button class="btn btn-lg btn-info">编辑 article</button>
          </form>
      </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection