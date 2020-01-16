@extends('front.master')

@section('content')
    <div id="our-team">
        <div class="container">
            <div class="text-center">
                <h3>{{$conseil->titre}}</h3>
                {{--<p>{{$conseil->description}}</p>--}}
            </div>
        </div>

        <div class="team">
            <div class="container">
                <div class="row align-items-center my-5">
                    <div class="col-lg-8">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="560" height="315" src="{{$conseil->lien}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <h4>Description</h4>
                        </div>
                        <p>{{$conseil->description}}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection