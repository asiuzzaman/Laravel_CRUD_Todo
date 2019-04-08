@extends('layouts.app')

@section('todos')
<div>
    <form method="POST">
        @csrf
        <input type="text" name="name" placeholder="Add a beautiful Name">
        <input type="text" name="description" placeholder="Add description">
        <input type="submit" class="btn btn-outline-success" value="Submit">
    </form>
</div>
<div>
    <ol>
        @foreach($todos as $todo)
            <li> 
                {{ $todo->name }} 
                <p>{{ $todo->description }}</p>
                <form action="{{ url('/todos/delete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $todo->id }}">
                    <input type="submit" class="btn btn-outline-danger" value="Delete">
                </form>
            </li>
        @endforeach
    </ol>    
</div>
@endsection


