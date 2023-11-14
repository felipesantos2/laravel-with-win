@extends('layouts.default')

@section('content')

@include('layouts.navigation')


<div>
    <h1 class="text-2xl font-mono uppercase text-center p-5">
        adicione uma nova conta
    </h1>
    
    @if(session('success'))
        <span class="bg-yellow-500 p-2">
            {{ session('success') }}
        </span>
    @endif

    <div class="container p-5">
        <form action="{{ route('account.store') }}" method="POST">
            @csrf
            <div class="max-w-full w-90 h-90 border border-rose-600 p-10 flex jutify-center flex-col items-left">

                <div class="flex justify-center">
                    <input type="text" id="accountName" name="accountName" placeholder="NOME DA CONTA" class="p-2 m-4 border w-2/3 rounded-md">
                </div>

                <div class="flex justify-center">
                    <input type="text" id="accountValue" name="accountValue" placeholder="VALOR DA CONTA" class="p-2 m-4 border w-2/3 rounded-md">
                </div>

                <div class="flex justify-center">
                    <input type="text" id="accountEstablishment" name="accountEstablishment" placeholder="Estabelecimento" class="p-2 m-4 border w-2/3 rounded-md">
                </div>

                <div class="flex justify-center">
                    <input type="date" id="accountPayDay" name="accountPayDay"  class="p-2 m-4 border w-2/3 rounded-md">
                </div>

                <div class="flex justify-center">
                    <button
                        type="submit" class="w-2/3 border border-yellow-500 p-2 hover:bg-yellow-500 hover:text-white rounded-md">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
