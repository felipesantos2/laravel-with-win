@extends('master')

@section('content')

<div>
    <h1 class="text-center p-2 m-4 text-2xl uppercase">Create User</h1>
</div>


<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input class="border-2 p-2 m-2 rounded-md" type="text" name="name" id="name">
    <input class="border-2 p-2 m-2 rounded-md" type="text" name="email" id="email">
    <input class="border-2 p-2 m-2 rounded-md" type="text" name="password" id="password">
    <button class="p-3 rounded-lg bg-yellow-500" type="submit" >
        Salvar
    </button>
</form>



@endsection
