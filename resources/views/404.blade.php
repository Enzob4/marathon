@extends('layouts.app')

@section('content')

<div id="notfound">
    <img src="/img/404.png" id="imagenotfound">
</div>
<div class="text-center" id="textnotfound">
    <p>Oops, vous vous êtes perdus ! <a href="{{ url('/') }}">Revenez-en lieu sûr !</a></p>
</div>
    

@endsection