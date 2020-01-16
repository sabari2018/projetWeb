<div id="medecin">
    <div class="container">
        <div class="text-center">
            <h3>Nos medecins</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
        </div>
        <div class="row">
            @foreach($medecins as $index => $medecin)
                @if($index % 2 === 0)
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                        <div class="text-center">
                            <img src="/profiles/{{$medecin->photo}}" alt="" width="150" height="150">
                            <h2>{{$medecin->prenom.' '.$medecin->nom}}</h2>
                            <h4>{{$medecin->specialite}}</h4>
                            <p>{{$medecin->email}}</p>
                        </div>
                    </div>
                @else
                    <div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                        <div class="text-center">
                            <img src="/profiles/{{$medecin->photo}}" alt="" width="150" height="150">
                            <h2>{{$medecin->prenom.' '.$medecin->nom}}</h2>
                            <h4>{{$medecin->specialite}}</h4>
                            <p>{{$medecin->email}}</p>
                        </div>
                    </div>
                @endif

            @endforeach


        </div>
    </div>

</div>