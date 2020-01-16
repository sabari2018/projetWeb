<div id="astuces">
    <div class="team">
        <div class="container">
            <div class="text-center">
                <h3>Astuces & Conseils</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
            </div>
            <div class="row">
                @foreach($conseils as $conseil)
                <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <img src="{{'https://img.youtube.com/vi/'.split_link($conseil->lien).'/0.jpg'}}" class="img-responsive" alt="Conseils">
                        <a href="{{route('conseil_astuce', $conseil)}}"><h2>{{$conseil->titre}}</h2></a>
                        <p>{{$conseil->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>