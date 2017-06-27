@extends('layout.layout')

@section('content')

    <h3>Foods</h3>
    <ul class="list-group">
        @foreach($allFood as $food)
                @if($food->food_id == $userId)
                        <li class="list-group-item">{{$food->food_name}}</li>
                @endif
        @endforeach
    </ul>


    <form action="{{route('Food.store')}}" method="post" role="form">
        <div class="form-group">
            {{$userId}}
            {{--Food_name--}}
            <label for="">Food name</label>
            <input type="text" class="form-control" name="food">
            {{--Protein--}}
            <label for="">Protein</label>
            <input type="text" class="form-control" name="protein">
            {{--Carbs--}}
            <label for="">Carbohydrate</label>
            <input type="text" class="form-control" name="carbs">
            {{--Fat--}}
            <label for="">Fat</label>
            <input type="text" class="form-control" name="fat">
            <input name="id" type="hidden" value="{{$userId}}">
            {{csrf_field()}}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
