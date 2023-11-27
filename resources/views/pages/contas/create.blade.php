@extends('layouts.default')

@section('content')

    @include('components.navigation')

    <h1 class="text-2xl uppercase font-semibold py-3"> Adicione uma nova conta </h1>

    <div>
        <form action="{{ route('contas.store') }}" method="post">
            @csrf
            <div class="pt-10">
                <div>
                    <label class="block" for="conta"> Nome da Conta: </label>
                    <input type="text" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md"
                        name="conta" id="conta" aria-autocomplete="both">
                </div>
                <div>
                    <label class="block" for="valor"> Valor: </label>
                    <input type="text"
                        class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md" name="valor"
                        id="valor">
                </div>
              <div>
                <label class="block" for="estabelecimento"> Estabelecimento: </label>
                <input type="text" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md"
                    name="estabelecimento" id="estabelecimento">
              </div>
              <div>
                  <label class="block" for="data_vencimento"> Data de Vencimento: </label>
                  <input type="date" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md"
                      name="data_vencimento" id="data_vencimento">
              </div>
              <div>
                <label class="block" for="data_compra"> Data de Compra: </label>
                <input type="date" class="py-2 px-4 border outline-none focus:bg-gray-100 border-yellow-400 rounded-md"
                    name="data_compra" id="data_compra">
              </div>
            </div>
            <div>
                <button type="submit" class="uppercase bg-green-600 text-white font-semibold p-2 mr-5 mt-5">
                    Salvar
                </button>
            </div>
        </form>
    </div>

@endsection
