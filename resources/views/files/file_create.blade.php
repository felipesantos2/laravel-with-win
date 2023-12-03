@extends('master')

@section('content')
    <div>
        <h1 class="text-center p-2 m-4 text-2xl uppercase">Upload</h1>
    </div>
    <div class="pb-4">
        <a href="{{ route('upload.index') }}" class="border-b-2 border-yellow-300 p-1 m-2"> Todos os Arquivos </a>
    </div>

    <x-if-else-session />

    <x-separator />

    <form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input class="border-2 p-2 m-2 rounded-md" type="file" name="image" id="image">
        <button class="p-3 rounded-lg bg-yellow-500" type="submit">
            Salvar
        </button>
    </form>
@endsection
