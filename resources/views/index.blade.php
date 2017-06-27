@extends('layout.layout')

{{--{{$allMeals}}--}}
@section('content')
{{--Loop Through All meals and display the name--}}
    <h1>Index</h1>
    @foreach($allMeals as $meal)
        @if($userId === $meal->user_id)
            <ul class="list-group">
            <li class="list-group-item">
                <a href="{{route('Food.show', ['id' => $meal->id])}}">{{$meal->name}}</a>
                Meal id: {{$meal->id}}
            </li>
        </ul>
        <br>
        @endif
    @endforeach

@endsection
