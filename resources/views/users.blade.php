@extends('master')

@section('content')
    <div>
        <h1 class="text-center p-2 m-4 text-2xl uppercase">Todos os Usuários</h1>
    </div>

   <div class="pb-4">
        <a href="{{ route('home') }}" class="border-b-2 border-yellow-300 p-1 m-2"> Início </a>
        <a href="{{ route('users.create') }}" class="border-b-2 border-yellow-300 p-1 m-2"> Create </a>
   </div>



    <if-session />

    <x-separator />

    <x-alert.danger-alert />

    <x-alert.warning-alert />

    <x-alert.success-alert />

    <ul class="my-2">
        @foreach ($users as $user)
            <li id="id-{{ $loop->index }}" class="py-1">
                <b>Usuário: </b> {{ $user->name }} |
                <a class="underline text-yellow-500" href="{{ route('users.edit', ['user' => $user->id]) }}" title="Editar esse usuário">Edit</a> |
                <a class="underline text-yellow-500" href="{{ route('users.show', ['user' => $user->id]) }}" title="Visualizar esse usuário">Show</a>
            </li>
        @endforeach
    </ul>
@endsection
