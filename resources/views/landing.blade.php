@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/landing.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1 id="info">スマホを横向きにしてね</h1>
    <h1 id="title">僕はヒーロー！！</h1>
    <div class="buttons">
      <div>
        <a class="btn btn-default">ヒーローになる</a>
      </div>
      <div>
        <a class="btn btn-default">物語を見る</a>
      </div>
    </div>
@endsection
