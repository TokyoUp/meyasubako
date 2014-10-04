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
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/post">投稿する</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">更新</a></li>
                </ul>
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
                <a class="navbar-brand" href="#">UP目安箱</a>
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
</body>
</html>