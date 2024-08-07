
<!-- diretiva para mostrar que o layout vem herdado de layouts o arquivo main -->
@extends('layouts.main')

<!-- diretiva para indicar o título da seção -->
@section('title', 'HDC Events')

@section('content')

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

        @endsection