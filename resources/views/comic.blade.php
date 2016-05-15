@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/comic.css')}}}" rel="stylesheet">
    <script type="text/javascript">
      $(function(){
        $("#face").css("top",{{{$top}}});
        $("#face").css("left",{{{$left}}} );
      });
    </script>
@endsection

@section('content')
  <h1 id="info">スマホを横向きにしてね</h1>
    <div id="comic">
      <div >
        <img id="face" src="{{{asset($face_data)}}}" alt="" >
        <img id="back" src="{{asset($path)}}" alt="" >
      </div>
    </div>

    <div class="">
      @if ($back != 0)
      <div class="preview">
         <form action="/preview" method="post">
            <input class="preview btn btn-default" type="submit" value="前のコマ">
            <input type="hidden" name="page" value="{{ $back }}">
        </form>
      </div>
      @endif
      @if ($next != 5)
        <form action="/next" method="post">
            <input class="next btn btn-default" type="submit" value="次のコマ">
            <input type="hidden" name="page" value="{{ $next }}">
        </form>
        @endif
        @if ($next == 5)
        <form action="/" method="get">
            <input class="next btn btn-default" type="submit" value="トップへ">
        </form>
        @endif
    </div>
    <div style="clear:both">
    <div>
    <p id="narration">
      {{$txt}}
    </p>
@endsection
