<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{'Forms | Laravel With Win'}}</title>
    </head>
    <body>

        @livewire('hello-world')
        
        <livewire:hello-world />

    </body>
</html>