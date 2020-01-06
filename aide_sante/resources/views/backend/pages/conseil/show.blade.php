@extends('backend.layouts.master',['heading' => 'Conseil','icon'=>'fa-fw fa-user-nurse'])

@section('content')

    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet creer des conseils et de les rendre accessibles sur le site
    </div>
    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-info-circle"></i> Informations</h6>
        </div>
        <div class="card-body">
            <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/KIEmfPc9LCY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Business Name or Tagline</h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                    <a class="btn btn-primary" href="#">Call to Action!</a>
                </div>
                <!-- /.col-md-4 -->
            </div>
        </div>
    </div>

@endsection