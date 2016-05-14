@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/select.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <div class="content-left">
      <div>
        <span id="name">ひでやす</span>がなりたい<br>
        ヒーローを選んでね！
      </div>
      <div id="selectChara">
        <span class="glyphicon glyphicon-triangle-left"></span>スパイダーマン<span class="glyphicon glyphicon-triangle-right"></span>
      </div>

      </div>
    </div>
    <div class="">

    </div>
@endsection
