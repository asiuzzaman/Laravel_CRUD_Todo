@extends('layouts.app')

@section('todos')
<div>
    <ol>
        @foreach($todos as $todo)
            <li> 
                {{ $todo->name }} 
                <p>{{ $todo->description }}</p>
            </li>
        @endforeach
    </ol>    
</div>
@endsection