@extends('layout.layout')

@section('content')

    {{$mealId}}
    <form action="" method="post" role="form">
        <div class="form-group">
            {{--Food_name--}}
            <label for="">Food name</label>
            <input type="text" class="form-control" name="" id="">
            {{--Protein--}}
            <label for="">Protein</label>
            <input type="text" class="form-control" name="" id="">
            {{--Carbs--}}
            <label for="">Carbohydrate</label>
            <input type="text" class="form-control" name="" id="">
            {{--Fat--}}
            <label for="">Fat</label>
            <input type="text" class="form-control" name="" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
