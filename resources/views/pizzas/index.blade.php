@extends('layouts.app')

@section('content')
    <h1>Pizza Orders</h1>
    <div class="wrapper pizza-index">
        @foreach ($pizzas as $pizza)
            <div class="pizza-item">
                <img src="/img/pizza.jpg" alt="pizza icon">
                <h4>
                    <a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a>
                </h4>
            </div>
        @endforeach
    </div>

@endsection
