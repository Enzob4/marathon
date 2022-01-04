@extends('layouts.app')

@section('content')
    <div id="serie">
        <div id="cardserie" class="col-md-6">
            <div class="col-md-6" id="afficheserie"><img src="../{{$serie->urlImage}}" id="afficheserieimg"></div>
            <div class="col-md-6" id="infoserie">
                <h3 id="titreserie">{{$serie->titre}}</h3>
                <p>{!!  $serie->resume !!}<p>
                <p><b>Première</b> - {{$serie->premire}}<p>
                <p><b>Langue</b> - {{$serie->langue}}<p>
                <p><b>Note</b> - {{$serie->note}}<p>
            </div>
        </div>
        <div id="commentaires">
            <h3 id="titre commentaire">Les derniers commentaires</h3>
            <p><b>Utilisateur</b> - 06/02/2002</p>
            <p>Commentaire</p>

        </div>
    </div>

    <div class="d-flex justify-content-center">
        @if(Auth::user())
        <form class="form-inline my-2 my-lg-0" action="{{route('comment.add',['id'=>$serie->id])}}" method="POST">
            @csrf
            <textarea class="research" name="comment" id="comment" placeholder="Poster mon commentaire sur la série"></textarea>
            <button id="boutondejavu" type="submit"></button>
        </form>
        @endif
    </div>

    @foreach($serie->episodes as $ep)
        <div class="row" id="episode">
            <div><img src="../{{$ep->urlImage}}">
            </div>
            <div id="infoepisode">
                <div>
                    <h4 id="titreepisode">{{$ep->nom}}</h4>
                </div>
                <div>
                    <h3>{!!$ep->resume!!}</h3>
                </div>
                <div>
                    @if(Auth::user())
                        <button id="boutondejavu"><a href="{{route('episode.seen',['id'=>$ep->id,'series'=>$serie->id])}}">Déjà vu</a></button>
                    @endif
                </div>
            </div>
        </div>
    @endforeach


@endsection

