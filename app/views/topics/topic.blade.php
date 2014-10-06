@extends('layout')

@section('title')
    <title>目安箱</title>
@stop

@section('content')
<div class="container">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title" style="color:black">Topic Title</h3>
        </div>
        <div class="panel-footer" style="color:black">
            Topic content
        二十四節気とは
    二十四節気は、太陰暦を使用していた時代に、季節を現すための工夫として考え出されたものです。一年を二十四に等分し、その区切りと区切られた期間とにつけられた名前です。現在でも季節の節目を示す言葉として使われています。
    「どのように分けるのか、太陰暦との関係は」といった事柄については、末尾の解説記事をお読み下さい。

        </div>
    </div>
    <div class="well well-sm">
        comment
    </div>
    <div class="well well-sm">
        comment
    </div>
    <div class="well well-sm">
        comment
    </div>
    <div class="well well-sm">
        comment
    </div>
    <div class="well well-sm">
        comment
    </div>
    <div class="well well-sm">
        <form id="comment-form">
            <div class="form-group">
                <div class="col-lg-10">
                    <span class="help-block">コメントフォーム&nbsp&nbsp&nbsp&nbsp<small>※後から編集は出来ません。</small></span>
                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                </div>
            </div>
            <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <button id="comment-btn" class="btn btn-warning">コメントする</button>
                  </div>
            </div>
        </form>
    </div>

</div>

<div class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
    </div>
</div>

@stop
