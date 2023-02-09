@extends('template')

@section('title', 'Home')

@section('content')

<div class="form-container">
    <h1>Login</h1>
    <br>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">Email : </label>
        <input name="email" type="email" placeholder="Email">
        <label for="password">Password : </label>
        <input name="password" type="password" placeholder="Password">
        <input type="submit" value="Submit">
        <a href="{{url('register')}}">Don't have an account? click here to sign up</a>
    </form>
</div>

@endsection('content')