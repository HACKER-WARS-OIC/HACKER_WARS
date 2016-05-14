@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/comic.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <div id="comic">

    </div>
    <div class="">
      <div class="preview">
          <a href="#"><span class="glyphicon glyphicon-chevron-left"></span>前のコマ</a>
      </div>
      <div class="next">
          <a href="#">次のコマ<span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
    </div>
    <div style="clear:both">

    </div>
    <p id="narration">
      ある日、街で女性が悪党に襲われていた
    </p>
@endsection
