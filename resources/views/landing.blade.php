@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/landing.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1>僕はヒーロー！！</h1>
    <div class="buttons">
      <div>
        <a class="btn btn-default">ヒーローになる</a>
      </div>
      <div>
        <a class="btn btn-default">物語を見る</a>
      </div>
    </div>

    <div class="info">スマホを横向きにしてね</div>
@endsection
