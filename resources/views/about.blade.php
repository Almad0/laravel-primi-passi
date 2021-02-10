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
        <header>
          <nav>
            <div class="leftNav">
              <p>Logo casuale</p>
            </div>
            <div class="rightNav">
              <ul>
                <li><p>menu1</p></li>
                <li><p>menu2</p></li>
                <li><p>menu3</p></li>
                <li><p>menu4</p></li>
                <li><p>menu5</p></li>
              </ul>
            </div>
          </nav>
        </header>

        <main>
          <h1>About Us</h1>
          <h2>prova Laravel</h2>
          <p>clicca <a href="/">QUI</a> per tornare alla Homepage</p>
        </main>

        <footer>
          <div class="footerContainer">
            <div class="colonna">
              <p>Testo nel footer</p>
            </div>
            <div class="colonna">
              <p>Testo nel footer</p>
            </div>
            <div class="colonna">
              <p>Testo nel footer</p>
            </div>
            <div class="colonna">
              <p>Testo nel footer</p>
            </div>
          </div>
        </footer>
    </body>
</html>
