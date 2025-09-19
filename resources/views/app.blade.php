<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        {{-- ziggy route like laravel but this is javascript--}}
        @routes
        <!-- Fonts -->
        @vite(['resources/scss/app.scss','resources/js/app.js'])
        <style>
            html{
                 background-image: url('bg.svg')
            }
        </style>
      @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
