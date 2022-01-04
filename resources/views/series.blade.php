@extends('layouts.app')

@section('content')

    <div id="sectionsearch">
        <div class="titresection">Toutes les séries</div>
        <div class="row d-flex justify-content-center affiches">

    @foreach($series as $serie)
            <div class="col-md-2 allseries"><a href={{route('serie.show',['id'=>$serie->id])}}><img src="{{$serie->urlImage}}" alt=""></a></div>
    @endforeach
        </div>
@endsection