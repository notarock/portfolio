
@if($lstProjets->isEmpty())

    <div class="row mt centered">
        <div class="col-md-8 col-md-offset-2">
            <h2>Il n'y a pas de projets ici pour le moment.</h2>
        </div>
    </div><!-- /row -->

@else

    @foreach($lstProjets->chunk(2) as $ligne)
        @foreach($ligne as $projet)
            <div class="col-md-6 tile-list centered">
                <a href="/projets/{{$projet->id}}">
                    <img class="list-image img-responsive" src="/img/projets/{{ $projet->picture }}" alt="" />
                </a>
                <a href="/projets/{{$projet->id}}">
                    <p style="color:black;">{{$projet->name}}</p>
                </a>
            </div>
        @endforeach
    @endforeach
@endif

