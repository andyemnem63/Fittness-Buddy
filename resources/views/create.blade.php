@extends('layout.layout')

@section('content')
{{--Post sectionz--}}
    <form action="{{route('Meals.store')}}" method="post" role="form">
        <legend>Create Meal</legend>
        <div class="form-group">
            <label for="">Create Meal</label>
            <input type="text" class="form-control" name="name">
            {{csrf_field()}}
            <br>
            <button type="submit btn btn-success" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
