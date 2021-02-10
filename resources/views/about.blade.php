<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel about us</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>

    </head>

    <body>

      @include('header')

        <main>
          <h1>About Us</h1>
          <h2>prova Laravel</h2>
          <p>clicca <a href="/">QUI</a> per tornare alla Homepage</p>
        </main>

      @include('footer')

    </body>
</html>
