@extends('layouts.default')

@section('content')
@php
    print_r($_SERVER)
@endphp
<div>

    <div class="container p-5">
        <form action="{{$_SERVER['APP_URL']}}/" method="post">
            <div class="max-w-full w-90 h-90 border border-rose-600 p-5">

                <div>
                    <label for="accountName">Conta</label>
                    <input type="text" id="accountName" placeholder="Nome da conta" class="p-2 m-4 border w-1/3 rounded-md">
                </div>

                <div>
                    <label for="accountValue">Valor</label>
                    <input type="text" id="accountValue" placeholder="Valor da Conta" class="p-2 m-4 border w-1/3 rounded-md">
                </div>

                <div>
                    <button type="submit" class="w-24 border border-yellow-500 p-2 hover:bg-yellow-500 hover:text-white rounded-md"> Cadastrar </button>
                </div>

                <output>
                    {{-- valor --}}
                </output>
            </div>
        </form>
    </div>
</div>

@endsection
