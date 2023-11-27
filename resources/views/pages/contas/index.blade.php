@extends('layouts.default')

@section('content')

<div>

    {{ "CONTAS INDEX" }}

    <h1 class="text-3xl">
        Totas as contas
    </h1>

    @foreach ($rows as $row)
        <div>
            <div class="p-4 border border-yellow-400 m-4">

                <ul>
                    <li>
                        Conta: {{ $row->conta }}
                    </li>
                    <li>
                        Valor: {{ $row->valor }}
                    </li>
                    <li>
                        Estabelecimento: {{ $row->estabelecimento }}
                    </li>
                    <li>
                        <a  href="{{ route('contas.show') . '/' . $row->id }}" class="block border border-red-600 p-1 m-2 rounded-md" id="{{ $row->id }}"> Detalhes </a>
                    </li>
                </ul>

            </div>
        </div>
    @endforeach

</div>


@endsection
