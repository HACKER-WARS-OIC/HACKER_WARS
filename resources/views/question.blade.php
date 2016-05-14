@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/question.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1 id="info">スマホを横向きにしてね</h1>
    <h1>ヒーローになったら何したい？</h1>
    <div class="buttons">
      <div class="">
        <a href="#" class="btn btn-default">人を助けたい</a>
      </div>
      <div class="">
        <a href="#" class="btn btn-default">悪党を退治したい</a>
      </div>
    </div>
@endsection
