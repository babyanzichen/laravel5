<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>子，安于尘世。</title>
    @include('UEditor::head')
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
  <script src="/js/jquery.slideBox.min.js" type="text/javascript"></script>
  <link href="/css/app.css" rel="stylesheet">
 <link href="/css/main.css" rel="stylesheet">
 <link href="/css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
 
  <!-- Fonts -->
  <link href='http://fonts.useso.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="header-top">
    <div class="header-content">
       <div class="header-title">
         <a href="/Home/index/index.html">子，安于尘世</a>
       </div>
       <div class="quote">{{ Inspiring::quote() }}</div>
       <div class="search-area">
       <input type="text" placeholder="请输入要搜索的内容……" name="search_str" class="search-inputs" id="search_str" value="">
       <button role="button" type="button" class="search-button" id="search">搜索</button>
      </div>
  </div>
</div>
<div class="header-nav" >
    <div class="header-wrap">
        <nav class="header-main-nav">
        <ul class="header-menu">
                  <li class="parent"> <a href="{{ URL('') }}">首页</a> </li>
                  <li class="parent"> <a href="{{ URL('articles/listing') }}">前半生</a></li>
                  <li class="parent"> <a href="{{ URL('plays/listing')}}">玩物志</a></li>
                  <li class="parent"> <a href="{{ URL('leaves/listing') }}">留足迹</a></li>
                  <li class="parent"> <a href="{{ URL('moods/listing') }}">时光轴</a></li>
                  <li class="parent"> <a href="/Home/list_news/3.html">有所思</a></li>
                  <li class="drag-menu"> <a href="#">练习曲</a>
                  <ul class="sub-menu">
                    <li>
                    <a href="/Home/list/7.html">前端</a>
                  </li>
                  <li>
                    <a href="/Home/list/4.html">php</a>
                  </li>    
                  <li>
                    <a href="/Home/list/8.html">linux</a>
                  </li>
                  <li>
                    <a href="/Home/list/2.html">杂谈</a>
                  </li>
                              
                  </ul> 
                 </li> 
        </ul>                  
              <!--tm-nav-->
  </nav>
  </div>         
  </div>

  <div class="container" style="margin-top: 20px;">
    @yield('content')
     <div id="footer" class="footer" >
        <a href="http://icp.aizhan.com/" target="_blank"><img src="http://icp.aizhan.com/geticp/?host=netbirdtech.com&style=2" style="width:126px;height:41px;border:0;" /></a> <a href="https://anzichen.qzone.qq.com">武汉网鸟科技有限公司.2015@Created By AnZichen</a>
     </div>
  </div>
   
 


</body>
</html>