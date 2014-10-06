@extends('layout')

@section('title')
    <title>目安箱</title>
@stop

@section('content')
    <div class="container jumbotron">
        <p>投稿フォーム</p>
        <hr>
        <form id="post-form">
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">トピック名</label>
                <div class="col-lg-10">
                    <input class="form-control" id="inputEmail" type="text">
                </div>
             </div>
            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">本文</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button id="comment-btn" class="btn btn-warning">投稿する</button>
                </div>
            </div>
        </form>
        <hr>
        <small><span class="help-block">※注）後から編集は出来ません。</span></small>
    </div>
@stop
