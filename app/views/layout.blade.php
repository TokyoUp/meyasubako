<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/sandstone/bootstrap.min.css" rel="stylesheet">

@yield('title')

</head>
<body>

<div class="navbar navbar-default">
    <div class="navbar-inner">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">UP目安箱</a>
            </div>
            <div class="nav-collapse navbar-default-collapse in collapse" style="height: auto;">
                <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;">
                    <div class="btn-group">
                        <button class="btn btn-default dropdown-toggle" id="dropdownMenu" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-list"></span>
                        </button>
                        <div class="dropdown-menu" style="background-color: #444; color: #F3F3F3;" role="menu" aria-labelledby="dropdownMenu1">
                            <ul class="nav">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/post">投稿する</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">更新する</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/admin">管理画面</a></li>
                            </ul>
                        </div>
                    </div>
                </ul>
                <form class="navbar-search pull-right" action="" style="margin-top: 10px;">
                    <input class="form-control col-sm-6 search-query span2" placeholder="Search" type="text">
                </form>
            </div>
        </div>
    </div>
</div>

@yield('content')

@section('footer')
<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-footer">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-circle-arrow-up"></span>UP目安箱</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a>All Rights Reserved IT Expert Team</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@show

<script>
$(function($){
$('.modal').hide();

    $('.topic').on('click', function(){
        document.location = "/topic";
    });

    $('#post-btn').on('click', function(){
        $('.modal').show();
    });

    $('#comment-btn').on('click', function(){
        $('.modal').toggle();
    });
});
</script>
</body>
</html>