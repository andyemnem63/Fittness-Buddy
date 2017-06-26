@extends('layout.layout')

{{--{{$allMeals}}--}}
@section('content')
{{--Loop Through All meals and display the name--}}
    <h1>Index</h1>
    @foreach($allMeals as $meal)
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{route('Meals.show', ['id' => $meal->id])}}">{{$meal->name}}</a>
                {{$meal->id }}
            </li>
        </ul>
        <br>
    @endforeach

@endsection
