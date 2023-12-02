@extends('master')

@section('content')
    <div>
        <h1 class="text-center p-2 m-4 text-2xl uppercase">Create User</h1>
    </div>

    <div class="pb-4">
        <a href="{{ route('users.index') }}" class="border-b-2 border-yellow-300 p-1 m-2"> Todos </a>
    </div>

    <if-else-session />

    <x-separator />

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input class="border-2 p-2 m-2 rounded-md" type="text" placeholder="Your Fist Name" name="name" id="name"
            value="Felipe">
        <input class="border-2 p-2 m-2 rounded-md" type="text" placeholder="Your Email" name="email" id="email"
            value="felipesantos23">
        <input class="border-2 p-2 m-2 rounded-md" type="text" placeholder="Your Password" name="password" id="password"
            value="123456">
        <button class="p-3 rounded-lg bg-yellow-500" type="submit">
            Salvar
        </button>
    </form>
@endsection
