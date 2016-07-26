@extends('layouts.master')

@section('content')
<div class="centered">
    <a href = "{{route('niceaction',['action'=>'greet'])}}">greet</a>
    <a href = "{{route('niceaction',['action'=>'hug'])}}">hug</a>
    <a href = "{{route('niceaction',['action'=>'kiss'])}}">kiss</a>
    <br><br>
<form action="{{route('postniceaction')}}" method = "post">
    <label for = "select-action">I want to ..</label>
    <select id = "selet-cation" name ="action">
        <option>greet</option>
        <option>hug</option>
        <option>kiss</option>
    </select>
    <input type="text" name = "name"/>
    <button type="submit" > go </button>
    <input type="hidden" value="{{ Session::token() }}" name="_token">
</form>
</div>
@endsection