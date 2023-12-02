@extends('master')

@section('content')
    <div>
        <h1 class="text-center p-2 m-4 text-2xl uppercase">User - {{$user->name}}</h1>
    </div>

    <a href="{{ route('users.create') }}" class="border-b-2 border-yellow-300 p-2 m-2"> Create </a>
    <a href="{{ route('home') }}" class="border-b-2 border-yellow-300 p-2 m-2"> Início </a>

    <br>
    <br>
    <br>

    <x-separator />

   <div>
        <ul>
            <li> <b>Nome: </b> {{$user->name}} </li>
            <li> <b>email: </b> {{$user->email}} </li>
            <li> <b>Senha: </b> {{$user->password}} </li>
        </ul>

        {{-- delete --}}
        <form action="{{ route('users.destroy', [ 'user' => $user->id ]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">

            <button type="submit" class="p-2 my-4 bg-orange-500 text-white rounded-lg">
                Deletar Registro
            </button>
        </form>
    </div>

@endsection
