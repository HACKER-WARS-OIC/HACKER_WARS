@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/select.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <div>
      <div id="text">
        <span id="name">ひでやす</span>がなりたい<br>
        ヒーローを選んでね！
      </div>
      <div id="selectChara">
        <select class="form-control" name="">
          <option value="option">スパイダーマン</option>
          <option value="option">スパイダーマン</option>
        </select>
      </div>
      <div class="button">
        <button class="btn btn-default">決定</button>
      </div>
    </div>
@endsection
