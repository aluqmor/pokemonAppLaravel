@extends('base')

@section('title', '')

@section('content')

    <form action="{{url('pokemon/' . $pokemon->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">pokemon name</label>
            <input value="{{old('name', $pokemon->name)}}" required type="text" class="form-control" id="name" name="name" placeholder="pokemon name">
        </div>
        <div class="form-group">
            <label for="weight">pokemon weight</label>
            <input value="{{old('weight', $pokemon->weight)}}" required type="number" step="0.001" class="form-control" id="weight" name="weight" placeholder="pokemon weight">
        </div>
        <div class="form-group">
            <label for="height">pokemon height</label>
            <input value="{{old('height', $pokemon->height)}}" required type="number" step="0.001" class="form-control" id="height" name="height" placeholder="pokemon height">
        </div>
        <div class="form-group">
            <label for="type">pokemon type</label>
            <input value="{{old('type', $pokemon->type)}}" required type="text" class="form-control" id="type" name="type" placeholder="pokemon type">
        </div>
        <div class="form-group">
            <label for="evolution">pokemon evolution</label>
            <input value="{{old('evolution', $pokemon->evolution)}}" required type="number" step="0.001" class="form-control" id="evolution" name="evolution" placeholder="pokemon evolution">
        </div>
        <button type="submit" class="btn btn-primary">edit</button>
    </form>

@endsection