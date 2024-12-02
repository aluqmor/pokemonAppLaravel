@extends('base')

@section('title', '')

@section('content')

<form action="{{url('pokemon')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">pokemon name</label>
            <input value="{{old('name')}}" required type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="weight">pokemon weight</label>
            <input value="{{old('weight')}}" required type="number" step="0.001" class="form-control" id="weight" name="weight">
        </div>
        <div class="form-group">
            <label for="height">pokemon height</label>
            <input value="{{old('height')}}" required type="number" step="0.001" class="form-control" id="height" name="height">
        </div>
        <div class="form-group">
            <label for="type">pokemon type</label>
            <input value="{{old('type')}}" required type="text" class="form-control" id="type" name="type">
        </div>
        <div class="form-group">
            <label for="evolution">pokemon evolution</label>
            <input value="{{old('evolution')}}" required type="number" step="0.001" class="form-control" id="evolution" name="evolution">
        </div>
        <button type="submit" class="btn btn-primary">add</button>
    </form>
@endsection