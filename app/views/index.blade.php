@extends('layout')

@section('title')
    <title>目安箱</title>
@stop

@section('content')
    <div class="container jumbotron">
        <form class="navbar-search pull-right">
            <input class="search-query" placeholder="Search" type="text">
        </form>
        <p>Topics</p>
        <hr>
        <blockquote>
            <p>Title</p>
            <small>Comments <span class="badge badge-info">8</span></small>
        </blockquote>
        <hr>
        <blockquote>
            <p><span class="label label-warning">new</span></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Comments <span class="badge badge-info">8</span></small>
        </blockquote>
        <hr>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
        </blockquote>
        <hr>
    </div>

    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul>
@stop
