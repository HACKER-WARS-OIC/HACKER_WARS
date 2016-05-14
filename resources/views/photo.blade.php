@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/photo.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1 id="info">スマホを横向きにしてね</h1>
    <h1>君の写真を載せて！</h1>
    <div id="inputFile">
      <input class="btn btn-default" type="file" name="name" value="">
    </div>
    <div id="inputSubmit">
      <input class="btn btn-default" type="submit" name="name" value="送信！">
    </div>
@endsection
