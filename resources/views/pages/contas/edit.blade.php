@extends('layouts.default')

@section('content')

{{ "VIEW DE EDIÇÃO" }}

<div>
    <form action="{{ route('contas.update') }}" method="post">
        @csrf
        <div class="pt-10">
            <label> Nome da Conta:
                <input type="text" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md" name="conta" id="conta" aria-autocomplete="both">
            </label>
            <label> Valor:
                <input type="text" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md" name="valor" id="valor">
            </label>
            <label> Estabelecimento:
                <input type="text" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md" name="estabelecimento" id="estabelecimento">
            </label>
        </div>
        <div>
            <button type="submit" class="uppercase bg-green-600 text-white font-semibold p-2 mr-5 mt-5">
                Salvar
            </button>
        </div>
    </form>
</div>
@endsection
