@extends('layouts.app')

@section('main-content')
    <button class="buttontop"><strong>CURRENT SERIES</strong></button>
    <div class="items">
        @foreach($comics as $key=>$value)
        <div class="item">
            <img src="{{$value['thumb']}}" alt="">
            <div class="text">{{ $value['title'] }}</div>
        </div>
        @endforeach
    </div>
    <div class="bottone">
        <button class="buttonbottom">LOAD MORE</button>
    </div>
@endsection