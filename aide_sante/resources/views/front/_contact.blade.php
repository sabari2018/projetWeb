<div id="contact">
    <div class="container">
        <div class="text-center">
            <h3>Contactez nous</h3>
            <p>Laissez nous un message on vous repondra dans plus bref delais !!!!</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                <h2>Contacter nous a tous moment</h2>
                <p>Wikipédia n'a ni rédaction en chef, ni direction de la publication, ni service administratif. Pour plus d'informations, voir Wikipédia:À propos et Aide:FAQ. Wikipédia est un wiki dans lequel chaque internaute a la capacité de modifier les articles</p>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
                <h2>Informations</h2>
                <ul>
                    <li><i class="fa fa-home fa-2x"></i> 263 Avenue Général Leclerc, 35000 Rennes</li>
                    <hr>
                    <li><i class="fa fa-phone fa-2x"></i> 02 23 23 39 00</li>
                    <hr>
                    <li><i class="fa fa-envelope fa-2x"></i> info@allodocteur.net</li>
                </ul>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <div id="sendmessage">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ Session::get('success') }} </strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    @endif
                </div>
                <div id="errormessage"></div>
                <form method="POST" action="{{route('contact')}}" role="form" id="contactForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Votre Prenom et Nom" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email"  />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="subject" placeholder="Telephone"  />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5"></textarea>
                        <div class="validation"></div>
                    </div>

                    <button type="submit" class="btn btn-theme pull-left">ENVOYER</button>
                </form>
            </div>
        </div>
    </div>
</div>