@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/comic.css')}}}" rel="stylesheet">
@endsection

@section('content')
  <h1 id="info">スマホを横向きにしてね</h1>
    <div id="comic">
      <img id="back" src="./{{$path}}" alt="">
      <img id="face" src="{{$face_data}}" alt="">
    </div>

    <div class="">
      @if ($back != 0)
      <div class="preview">
         <form action="/preview" method="post">
            <input class="glyphicon glyphicon-chevron-left" type="submit" value="前のコマ">
            <input type="hidden" name="page" value="{{ $back }}">
        </form>
      </div>
      @endif
      @if ($next != 5)
        <form action="/next" method="post">
            <input class="glyphicon glyphicon-chevron-right" type="submit" value="次のコマ">
            <input type="hidden" name="page" value="{{ $next }}">
        </form>
        @endif
        @if ($next == 5)
        <form action="/" method="get">
            <input type="submit" value="トップへ">
        </form>
        @endif
    </div>
    <div style="clear:both">
    <div>
    <p id="narration">
      {{$txt}}
    </p>
@endsection
