@extends('master')

@section('content')
    <div>
        <h1 class="text-center p-2 m-4 text-2xl uppercase">Edit</h1>
    </div>

    <div class="pb-4">
        <a href="{{ route('users.index') }}" class="border-b-2 border-yellow-300 p-2 m-2"> Todos </a>
    </div>

    <x-if-else-session />

    <x-separator />

    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input class="border-2 p-2 m-2 rounded-md" type="text" name="name" id="name" value="{{ $user->name }}">
        <input class="border-2 p-2 m-2 rounded-md" type="text" name="email" id="email" value="{{ $user->email }}">
        <input class="border-2 p-2 m-2 rounded-md" type="text" name="password" id="password"
            value="{{ $user->password }}">
        <button class="p-3 rounded-lg bg-yellow-500" type="submit">
            Salvar
        </button>
    </form>
@endsection
