<!-- Concettualmente questa sarà la mia pagina di riferimento, dove inserirò i componenti che saranno sempre presenti (tipo header e footer) in tutte le pages. Sarà poi necessario inserire degli yield ovvero dei segnaposto che saranno la parte variabile in base alla pages di riferimento e quindi andranno fatti dei blade appositi con gli extends relativi. Andranno infine inserite nelle routes nella pagina web.php le reltive rotte e i relativi dati per ogni pagina   -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Inserisco un segnaposto per la pagina principale -->
    <title>Comics : @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container-fluid">

        <!-- Includo l'header -->
        @include('components.header')


        <!-- Segnaposto per il jumbtron che variera a seconda della page -->
        @yield('jumbotron')

        <!-- Includo il footer -->
        @include ('components.footer')

    </div>



</body>

</html>