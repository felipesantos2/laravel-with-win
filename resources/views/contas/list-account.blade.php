@extends('layouts.default')

@section('content')

@include('layouts.navigation')




<div>
    @foreach ($contas as $conta)
        <div class="bg-yellow-400 p-4 m-6">

            <span class="bg-red-500 text-white p-2 rounded-full mr-2">
                {{ $conta->id }}
            </span>

            <span class="font-semibold uppercase">
                {{$conta->valor . ' - '. $conta->conta .' - '. $conta->estabelecimento}}
            </span>
            <hr>
        </div>
    @endforeach
</div>



@endsection
