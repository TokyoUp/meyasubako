@extends('layout')

@section('title')
    <title>目安箱</title>
@stop

@section('content')
    <div class="container jumbotron">
        <p>Topics</p>
        <hr>
        <blockquote class="topic">
            <p>Title</p>
            <small><span class="glyphicon glyphicon-comment"></span>
                Comments <span class="badge badge-info">8</span>
            </small>
        </blockquote>
        <hr>
        <blockquote class="topic">
            <p><span class="label label-warning">new</span></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small><span class="glyphicon glyphicon-comment"></span>
                Comments <span class="badge badge-info">8</span>
            </small>
        </blockquote>
        <hr>
        <blockquote class="topic">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small><span class="glyphicon glyphicon-comment"></span>
                Comments<span class="badge badge-info">8</span>
            </small>
        </blockquote>
        <hr>
    </div>

    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul>
@stop
