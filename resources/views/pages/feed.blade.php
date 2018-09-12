@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="top:0em; position:absolute; width:100%" width="100%">
    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" style="top:1rem">
                <label class="nav-label">Olá {{$feed['nome']}}</label>
            </li>
            <li class="nav-item dropdown">
                <a href="/tpcfact/public/"><button class="btn btn-lg btn-primary btn-block"  style="margin-left:2rem" type="submit">Log-Out</button></a>
            </li>
        </ul>
    </div>
</nav>
<div style="display:flex">
      <form class="form-signin" action="{{URL::to('/post')}}" method="post" style="top:4em">
        <h1 class="h3 mb-3 font-weight-normal" >Introduza um Post</h1>
        <input type="hidden" name="id" value="{{$feed['id']}}">
        <input type="text" name="assunto" class="form-control" placeholder="Assunto" required autofocus>
        <textarea type="text" name="corpo" class="form-control" required>
        </textarea>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button class="btn btn-primary btn-block" type="submit">Submeter</button>
      </form>
<div class="container">
        
        <h1>POSTS</h1>
        <ul class="list-group">
        @if(count($feed['posts']))
            @foreach ($feed['posts'] as $post)
                <li class="list-group-item">
                <div class="well">
                    <h3>{{$post->subject}}</h3>
                    <div>
                        {{$post->body}}
                    </div>
                </div>
                </li>
            @endforeach
        @else
            <p>Nenhum post</p>
        @endif
        </ul>
</div>
</div>
@endsection