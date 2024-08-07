<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DISA RURAL</title>

        <link rel="stylesheet" href="css/styles.css">
        <script src="js/scripts.js"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Aula de Laravel DISAR</h1>
        <img src="/img/banner.jpg" width=250px alt="banner da página">
        @if(10 < 5)
            <p>A condição é true</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == 'Bruno')
        <p>O nome é {{$nome}} e ele tem {{$idade}} anos</p>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
        @endfor
       
    </body>
</html>
