<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
		@include('UEditor::head')
  <!-- Scripts -->
	<script src="/js/jquery-1.9.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
  	
     <link href="/css/bootstrap.min.css" rel="stylesheet">
	 <link href="/css/app.css" rel="stylesheet">
     <link href="/css/main.css" rel="stylesheet">
   
	<!-- Fonts -->
  <link href='http://fonts.useso.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">安子尘博客后台管理系统</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/admin">后台首页</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="/admin/comments">管理评论</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</div>
     <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active">
              <a >
                  <i class="fa fa-fw fa-dashboard"></i> 综合管理
              </a>
            </li>

            <li>
              <a data-toggle="collapse" data-target="#js_fin_news_mg">
                <i class="fa fa-fw fa-edit"></i> 财经新闻管理 <i class="fa fa-fw fa-caret-down"></i>
              </a>
              <ul id="js_fin_news_mg" class="nav collapse">
                <li>
                  <atarget="iframeContent"> 新闻管理 </a>
                </li>
                <li>
                  <a  target="iframeContent"> 分类管理 </a>
                </li>
              </ul>
            </li>

            <li>
              <a data-toggle="collapse" data-target="#js_video_con">
                <i class="fa fa-fw fa-edit"></i> 视频管理 <i class="fa fa-fw fa-caret-down"></i>
              </a>
              <ul id="js_video_con" class="nav collapse">
                <li>
                  <a  target="iframeContent"> 视频管理 </a>
                </li>
                <li>
                  <a  target="iframeContent"> 分类管理 </a>
                </li>
              </ul>
            </li>

            <li>
              <a  target="iframeContent">
                <i class="fa fa-fw fa-edit"></i> 直播间管理
              </a>
            </li>
             <li>
              <a ; data-toggle="collapse" data-target="#js_page_con">
                <i class="fa fa-fw fa-edit"></i> 网站页面管理<i class="fa fa-fw fa-caret-down"></i>
              </a>
              <ul id="js_page_con" class="nav collapse">
                <li>
                  <a href= target="iframeContent"> 页面查看 </a>
                </li>
                <li>
                  <a href= target="iframeContent"> 页面管理 </a>
                </li>
              </ul>
            </li>
         
        </div>
	@yield('content')

	
</body>
</html>
