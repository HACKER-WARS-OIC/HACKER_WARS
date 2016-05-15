@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/question.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1 id="info">スマホを横向きにしてね</h1>
    <h1>ヒーローになったら何したい？</h1>
    <div class="buttons">
      <form action="/next_question" method="post">
      <div class="">
        <input type="submit" value="save,100" name="point" id="save" style="display:none">
        <label class="btn btn-default"for="save">人を助けたい</label>
      </div>
      <div class="">
        <input type="submit" value="justice,100" name="point" id="justice" style="display:none">
        <label class="btn btn-default" for="justice">悪党を退治したい</label>
      </div>
      </form>
    </div>
@endsection
