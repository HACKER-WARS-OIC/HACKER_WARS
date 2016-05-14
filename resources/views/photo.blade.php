@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/photo.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <div class="info text-danger">スマホを縦向きにしてね</div>
    <h1>新しいヒーローの顔を見せて！</h1>
    <div id="photoArea">
    </div>
    <div>
    	<form action="/input_name" method="get">
            <input type="submit" value="名前をいれる">
        </form>
    </div>
    <div id="takePhoto">
      <button  class="btn btn-default btn-lg"><span class="glyphicon glyphicon-camera"></span></button>
    </div>
@endsection
