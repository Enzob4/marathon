@extends('layouts.app')

@section('content')


<div id="sectionsearch">
    <div class="titresection">Vos séries vues</div>
    @if(Auth::user())
        <img src="{{Auth::user()->avatar}}" alt="fffff"> <h2>{{Auth::user()->name}}</h2>
        @foreach($series as $serie)
            <div class="row d-flex justify-content-center affiches">
                <div class="col-md-2 allseries"><a href="{{route('serie.show',['id'=>$serie->id])}}"><img src="../{{$serie->urlImage}}"></a></div>
            </div>
        @endforeach
    @endif
</div>

@endsection