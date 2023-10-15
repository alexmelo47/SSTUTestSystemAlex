@extends('layouts.app')

@section('page_title')Главная страница
@endsection

@section('content')
    <main>
        <div class="content-block">
            <fieldset>
                <legend><h3>&nbsp;Доступные тесты&nbsp;</h3></legend>
                <ul class="link-list">
                    <li><a href="#">Тест 1</a></li>
                    <li><a href="#">Тест 2</a></li>
                    <li><a href="#">Тест 3</a></li>
                    <li><a href="#">Тест 4</a></li>
                </ul>
            </fieldset>
        </div>
    </main>
@endsection
