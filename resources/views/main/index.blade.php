@extends('layouts.main')
@section('title', 'My site')

@section('content')
    <h2 class="ml-3">Welcome</h2>


    @if (Auth::check() && Auth::user()->ban == 1)
        <div class="alert alert-danger">
            Your account is blocked!
        </div>
@endif
@endsection