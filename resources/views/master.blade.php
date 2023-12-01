<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{'Forms | Laravel With Win'}}</title>

        @vite('resources/css/app.css')

        @livewireStyles
    </head>

    <body>

        <div class="pages max-w-fullw-full">
            <div class="max-w-full w-3/4 mx-auto">
                @yield('content')
            </div>
        </div>

        @livewireScripts
    </body>
</html>
