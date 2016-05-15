@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/select.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1 id="info">スマホを横向きにしてね</h1>
    <h1 id="text">
      <span id="name">{{ $name }}</span>がなりたい<br>
      ヒーローを選んでね！
    </h1>
    <form action="/question" method="POST">
      <div id="selectChara">
        <select class="form-control" name="hero">
        @foreach ($heros as $hero)
          <option value="{{ $hero->id }}">{{ $hero->hero_name }}</option>
        @endforeach
        </select>
      </div>
      <div class="button">
        <button class="btn btn-default" type="submit">決定</button>
      </div>
    </form>
@endsection
