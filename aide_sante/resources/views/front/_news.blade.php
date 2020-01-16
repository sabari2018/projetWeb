<div id="feature">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3>File d'actualites</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
            </div>
            @foreach($actualites as $actualite)
                <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                    <div class="text-center">
                        <img src="actualites_images/{{$actualite->image}}" class="img-responsive" alt="">
                        <a href="{{route('actualite', $actualite)}}"><h2>{{$actualite->titre}}</h2></a>
                        <p>{{$actualite->description}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>