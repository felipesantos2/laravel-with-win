<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{'Forms | Laravel With Win'}}</title>

        @livewireStyles
        
        @vite('resources/css/app.css')
    </head>

    <body>
        @yield('content')

        @livewireScripts
    </body>
</html>
