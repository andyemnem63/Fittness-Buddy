@extends('layout.layout')

{{--{{$allMeals}}--}}
@section('content')
    {{--Loop Through All meals and display the name--}}
    <h1>Show</h1>
    {{$allMeals}}
    @foreach($allMeals as $meal)
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{route('Meals.edit', [$meal->id])}}">{{$meal->name}}</a>
            </li>
        </ul>
        <br>
    @endforeach

@endsection
