@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                <div class="panel-body">
                    You are logged in! <a href="/Meals/create">You Look Hungry</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
