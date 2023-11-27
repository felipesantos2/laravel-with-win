@extends('layouts.default')

@section('content')

@include('components.navigation')

<div>

    <h1 class="text-3xl">
        CONTA N° {{ $id }}
    </h1>

    <ul class="uppercase">
        @foreach ($row as $collumn)
            <li class="border-b border-yellow-400 p-2">
                {{ $collumn->id }}
            </li>
            <li class="border-b border-yellow-400 p-2">
                {{ $collumn->conta }}
            </li>
            <li class="border-b border-yellow-400 p-2">
                {{ $collumn->valor }}
            </li>
            <li class="border-b border-yellow-400 p-2">
                {{ $collumn->estabelecimento }}
            </li>
        @endforeach
    </ul>

    <div>
        <a href="" class=" inline-block uppercase bg-red-600 text-white font-semibold p-2 mr-5 mt-5">
            Excluir
        </a>
        <a href="{{ route('contas.edit') . '/' . $id }}" class=" inline-block uppercase bg-green-600 text-white font-semibold p-2 mr-5 mt-5">
            Editar
        </a>
    </div>

</div>

@endsection
