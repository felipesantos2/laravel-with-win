@extends('layouts.default')

@section('content')

<div>
    {{ "CREATE" }}
</div>

<div>
    <form action="{{ route('contas.store') }}" method="post">
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
            <label> Data de Vencimento:
                <input type="date" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md" name="data_vencimento" id="data_vencimento">
            </label>
            <label> Data de Compra:
                <input type="date" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md" name="data_compra" id="data_compra">
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
