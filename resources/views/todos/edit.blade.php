@extends('layouts.app')

@section('todos')
    <div>
        <form method="POST">
            @csrf
            <input type="text" name="name" value="{{$todo->name}}">
            <input type="text" name="description" value="{{$todo->description}}">
            <input type="submit" class="btn btn-output-primary" value="Edit">
        </form>
    </div>
@endsection


