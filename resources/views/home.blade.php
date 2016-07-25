@extends('layouts.master')

@section('content')
<div class="centered">
   
    <a href = "{{route('greet')}}">greet</a>
    <a href = "{{route('hug')}}">hug</a>
    <a href = "{{route('kiss')}}">kiss</a>
    
   
</div>
@endsection