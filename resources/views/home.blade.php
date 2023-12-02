@extends('master')

@section('content')

<div>
    <h1 class="text-center p-2 m-4 text-2xl uppercase">Crud APP v6</h1>
</div>


<a href="{{ route('users.create')}}" class="border-b-2 border-yellow-300 p-1"> Create </a>
<a href="{{ route('users.index')}}" class="border-b-2 border-yellow-300 p-1"> Todos </a>

<br>
<br>
<br>
<x-separator />





@endsection

