@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/landing.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1>僕はヒーロー！！</h1>
    <div class="buttons">
      <div>
        <a class="btn btn-default"></a>
         <form action="/be_hero" method="get">
            <input type="submit" value="ヒーローになる">
        </form>
      </div>
      <div>
        <a class="btn btn-default">物語を見る</a>
        <form action="/#" method="get">
            <input type="submit" value="物語を見る">
        </form>
      </div>
    </div>

    <div class="info">スマホを横向きにしてね</div>
@endsection
