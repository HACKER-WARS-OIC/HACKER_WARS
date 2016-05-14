@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/photo.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1 id="info">スマホを縦向きにしてね</h1>
    <h1>君の顔を見せて！</h1>
    <div id="photoArea">
    </div>
    <div id="takePhoto">
      <button  class="btn btn-default btn-lg"><span class="glyphicon glyphicon-camera"></span></button>
    </div>
@endsection
