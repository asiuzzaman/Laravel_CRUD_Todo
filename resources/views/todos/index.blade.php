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

                @if($todo->user->id == Auth::id())
                    <form action="{{ url('/todos/delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $todo->id }}">
                        <input type="submit" class="btn btn-outline-danger" value="Delete">
                    </form>

                    <a href="{{ url('todos/edit/'.$todo->id) }}" class="btn btn-outline-primary">Edit</a>
                @else
                    <p>Name of owner: {{$todo->user->name}}</p>
                @endif
            </li>
        @endforeach
    </ol>    
</div>


@endsection


