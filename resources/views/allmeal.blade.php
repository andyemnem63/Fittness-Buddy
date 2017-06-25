@extends('layout.layout')

{{--{{$allMeals}}--}}
@section('content')
{{--Loop Through All meals and display the name--}}
    @foreach($allMeals as $meal)
        <ul class="list-group">
            <li class="list-group-item">
                <a href="/Meals/{{$meal->id}}/edit">{{$meal->name}}</a>
            </li>
        </ul>
        <br>
    @endforeach

@endsection
