@extends('base')

@section('title', '')

@section('content')

    <div class="form-group">
        pokemon id #:
        {{$pokemon->id}}
    </div>
    <div class="form-group">
        pokemon name:
        {{$pokemon->name}}
    </div>
    <div class="form-group">
        pokemon weight:
        {{$pokemon->weight}} kg
    </div>
    <div class="form-group">
        pokemon height:
        {{$pokemon->height}} m
    </div>
    <div class="form-group">
        pokemon type:
        {{$pokemon->type}} 
    </div>
    <div class="form-group">
        pokemon evolution:
        {{$pokemon->evolution}} 
    </div>
    <div class="form-group">
        <a href="{{url()->previous()}}">back</a>
    </div>

@endsection