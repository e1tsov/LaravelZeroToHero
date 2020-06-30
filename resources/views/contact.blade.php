@extends('layouts.app')

@section('title-block')Страница контактов@endsection

@section('content')
    <h1>Контакты</h1>  
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, placeat veniam, aperiam incidunt reiciendis deserunt,
     eaque quas accusantium iusto itaque facilis sequi. Error amet eveniet debitis harum, exercitationem adipisci maxime.</p>
     
    @if($errors->any()) 
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

     <form action="{{ route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
     </form>
@endsection