@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/select.css')}}}" rel="stylesheet">
@endsection

@section('content')
      <h1 id="info">スマホを横向きにしてね</h1>
      <h1 id="text">
        <span id="name">ひでやす</span>がなりたい<br>
        ヒーローを選んでね！
      </h1>
      <div id="selectChara">
        <select class="form-control" name="">
          <option value="option">スパイダーマン</option>
          <option value="option">スパイダーマン</option>
        </select>
      </div>
      <div class="button">
        <button class="btn btn-default">決定</button>
      </div>

@endsection
