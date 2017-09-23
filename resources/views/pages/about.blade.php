@extends('main')

@section('title', '| About')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>About me</h1>
            <p>My name is: <strong>{{ $data['fullname'] }}</strong></p>
            <p>My email is: <strong>{{ $data['email'] }}</strong></p>

        </div>
    </div>

@endsection
