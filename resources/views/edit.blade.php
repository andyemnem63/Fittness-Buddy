@extends('layout.layout')

@section('content')
    <h1>Edit</h1>
    <form action="{{route('Meals.update', ['id' => $allMeals])}}" method="post" role="form">
        {{--<h1>{{$allMeals->id}}</h1>--}}
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="edit">
            {{method_field('PUT')}}
            {{csrf_field()}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
