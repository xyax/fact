@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <form class="form-signin" action="{{URL::to('/feed')}}" method="post">
            <img class="mb-4" src="/tpcfact/fact_logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Faça o Log-In</h1>
            <input type="text" name="uname" class="form-control" placeholder="Username" required autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Log-In</button>
        </form>
    </div>
</div>
@endsection