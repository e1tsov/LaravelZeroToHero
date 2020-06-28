@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная</h1>  
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, placeat veniam, aperiam incidunt reiciendis deserunt,
     eaque quas accusantium iusto itaque facilis sequi. Error amet eveniet debitis harum, exercitationem adipisci maxime.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection