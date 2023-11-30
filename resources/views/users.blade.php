@extends('master')

@section('content')

<div>
    <h1 class="text-center p-2 m-4 text-2xl uppercase">Crud APP v6</h1>
</div>


<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} |
            <a  class="underline text-yellow-500" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> |
            <a  class="underline text-yellow-500" href="{{ route('users.edit', ['user' => $user->id]) }}">Delete</a>
        </li>
    @endforeach
</ul>


@endsection
