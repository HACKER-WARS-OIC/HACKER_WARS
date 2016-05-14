@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/who.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1 id="info">スマホを横向きにしてね</h1>
    <h1>君の名前を教えて！</h1>
    <div id="inputName">
      <input type="text" class="form-control">
    </div><!-- /input-group -->
    <div class="button">
      <button class="btn btn-default">決定</button>
    </div>
@endsection
