@extends('master')

@section('content')

<div>
    <h1 class="text-center p-2 m-4 text-2xl uppercase">Edit</h1>
</div>

@if (session()->has('success'))
    {{session()->get('sucsess')}}
@else
    {{session()->get('error')}}
@endif


<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method"  value="PUT">
    <input class="border-2 p-2 m-2 rounded-md" type="text" name="name" id="name" value="{{ $user->name }}">
    <input class="border-2 p-2 m-2 rounded-md" type="text" name="email" id="email" value="{{ $user->email }}">
    <input class="border-2 p-2 m-2 rounded-md" type="text" name="password" id="password" value="{{ $user->password }}">
    <button class="p-3 rounded-lg bg-yellow-500" type="submit" >
        Salvar
    </button>
</form>


@endsection

