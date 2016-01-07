@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">新增文章</div>

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

          <form action="{{ URL('admin/articles') }}" method="POST" enctype="muitipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text"  placeholder="请输入标题" name="title" class="form-control" required="required">
            <br>
            <input type="text"  placeholder="请输入作者" name="author" class="form-control" required="required">
            <br>
            <textarea placeholder="请输入摘要" rows="10" name="summary" class="form-control" required="required"></textarea>
            <br>
            <textarea name="body" placeholder="请输入正文" rows="20" class="form-control" required="required"></textarea>
            <br>
            <input type="file" name="myfile" / required="required">
            <br>
            <button class="btn btn-lg btn-info">新增 文章</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection