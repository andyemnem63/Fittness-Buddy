@extends('layout.layout')

@section('content')
    {{}}
    <form action="{{route('Meals.update', ['id' => $mealId-> id])}}" method="post" role="form">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="edit">
            {{method_field()}}
            {{csrf_token()}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
