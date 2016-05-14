@extends('layouts.master')

@section('stylesheet')
    <link href="{{{asset('/assets/css/question.css')}}}" rel="stylesheet">
@endsection

@section('content')
    <h1>ヒーローになったら何したい？</h1>
    <div class="buttons">
      <div class="">
        <form action="/next_question" method="post">
            <input type="radio" value="save,100" name="point">人を助けたい
            <input type="radio" value="justice,100" name="point">悪党を退治したい
            <input type="submit" value="決定">
        </form>
      </div>
    </div>
@endsection
