@extends('layouts.app')

@section('content')
-- <div class="d-flex justify-content-center" id="search">
<form class="form-inline my-2 my-lg-0">
    <input class="research" type="search" placeholder="Science-fiction, Drame, Comédie, Horreur..." aria-label="Search">
  </form>
</div>


<div class="section">
    <div class="titresection">Séries les mieux notées</div>
    <div class="row d-flex justify-content-center affiches">

        @for($i=0;$i<5;$i++)
            @if($i==0)
                <div class="col-md-2 col-md-offset-1 affichetop"><a href="{{route('serie.show',['id'=>$serie[$i]->id])}}"><img src="{{$serie[$i]->urlImage}}"></a></div>
            @else
                <div class="col-md-2 affichetop"><a href="{{route('serie.show',['id'=>$serie[$i]->id])}}"><img src="{{$serie[$i]->urlImage}}"></a></div>
            @endif
        @endfor

    </div>
</div>

    <div class="section2">
        <div class="titresection2">Séries récentes</div>
        <div class="row d-flex justify-content-center affiches">
            @for($j=0;$j<5;$j++)
                @if($j==0)
                    <div class="col-md-2 col-md-offset-1 affichetop"><a href="{{route('serie.show',['id'=>$series_recentes[$j]->id])}}"><img src="{{$series_recentes[$j]->urlImage}}"></a></div>
                @else
                    <div class="col-md-2 affichetop"><a href="{{route('serie.show',['id'=>$series_recentes[$j]->id])}}"><img src="{{$series_recentes[$j]->urlImage}}"></a></div>
                @endif
            @endfor
        </div>
    </div>


<div class="section">
    <div class="titresection">Séries françaises</div>
    <div class="row d-flex justify-content-center affiches">
        @for($j=0;$j<5;$j++)
            @if($j==0)
                <div class="col-md-2 col-md-offset-1 affichetop"><a href="{{route('serie.show',['id'=>$series_fr[$j]->id])}}"><img src="{{$series_fr[$j]->urlImage}}"></a></div>
            @else
                <div class="col-md-2 affichetop"><a href="{{route('serie.show',['id'=>$series_fr[$j]->id])}}"><img src="{{$series_fr[$j]->urlImage}}"></a></div>
            @endif
        @endfor
    </div>
</div>

<div class="section2" id="articlesredaction">
    <div class="titresection2">Les articles de la rédaction</div>

    <div id="articlemain" class="justify-content-center">
    
    <div id="cardserie" class="col-md-6 article">
        <div class="col-md-6" id="afficheserie"><img class="affichearticleresp" src="/img/medium_portrait_370_927068.jpg" id="afficheserieimg"></div>
        <div class="col-md-6" id="infoarticle">
            <h3 id="titreserie">Arcane</h3>
            <p id="introarticle">Riot Games, l’une des plus grandes industries du jeu vidéo et notamment connu pour son jeu phare « League of Legends », se lance maintenant sur la création d’une série sur Netflix afin d’explorer d’autres champs de l’industrie du divertissement.<p>
            <a href="" id="lienversarticle"><p><b>Lire l'article !</b></p>
        </div>
    </div>

    <div id="cardserie" class="col-md-6 article">
        <div class="col-md-6" id="afficheserie"><img class="affichearticleresp" src="/img/medium_portrait_273_683813.jpg" id="afficheserieimg"></div>
        <div class="col-md-6" id="infoarticle">
            <h3 id="titreserie">The Mandalorian</h3>
            <p id="introarticle">Après une trilogie de films Star Wars ayant reçu des critiques très mitigées, Disney revient en force avec la plateforme de streaming Disney + et compte bien s’en servir pour étendre grandement cet univers mythique.<p>
            <a href="" id="lienversarticle"><p><b>Lire l'article !</b></p>
        </div>
    </div>
</div>
</div>

<div class="section" id="articlesredaction">
    <div class="titresection">Les vidéos de la rédaction</div>

    <div id="articlemain" class="justify-content-center videos">
    
        <div id="cardserie" class="col-md-6 article video">
            <h3 id="titreserie" class="titrevideo">Daredevil</h3>
            <video controls id="videoplayer">
                <source src="/video/dardevil.mp4" type="video/mp4">
            </video>
    </div>

    <div id="cardserie" class="col-md-6 article video">
            <h3 id="titreserie" class="titrevideo">The Witcher</h3>
            <video controls id="videoplayer">
                <source src="/video/thewitcher.mp4" type="video/mp4">
            </video>
    </div>
</div>
</div>
@endsection

