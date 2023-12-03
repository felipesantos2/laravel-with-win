@extends('master')

@section('content')
    <div>
        <h1 class="text-center p-2 m-4 text-2xl uppercase">Todos os arquivos</h1>
    </div>

    <x-if-else-session />

    <x-separator />
    
    <div class="pb-4">
        <a href="{{ route('upload.create') }}" class="border-b-2 border-yellow-300 p-1 m-2"> Novo Arquivo </a>
    </div>

@endsection
