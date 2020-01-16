@extends('front.master')

@section('content')

    <div id="our-team" style="margin-left: 9%; margin-right: 9%">

        <div class="container">
            <div class="text-center">
                <h3>{{$actualite->titre}}</h3>
                {{--<p>{{$conseil->description}}</p>--}}
            </div>
        </div>
        <hr>
        <div class="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="col-lg-12" src="/actualites_images/{{$actualite->image}}" alt="" height="350" width="350">
                    </div>

                    <div class="col-lg-5">
                        <p>{{$actualite->description}}</p>
                    </div>
                </div>
                <hr class="col-lg-11">
                <div class="row col-lg-8" style="margin-left: 10%; margin-right: 10%; margin-top: 2%">
                    <p>{{$actualite->contenue}}</p>
                </div>

            </div>
            <hr>
            <div class="container row text-center">Source : {{$actualite->source}}</div>
        </div>

    </div>

@endsection