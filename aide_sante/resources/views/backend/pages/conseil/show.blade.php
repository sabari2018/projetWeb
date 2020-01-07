@extends('backend.layouts.master',['heading' => 'Conseil','icon'=>'fa-fw fa-user-nurse'])

@section('content')

    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet de voir les details du conseil
    </div>
    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-info-circle"></i> Informations</h6>
        </div>
        <div class="card-body">
            <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="{{$conseil->lien}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-5">
                    <h1 class="font-weight-bolder">{{$conseil->titre}}</h1>
                    <p>{{$conseil->description}}</p>

                    <div class="d-inline-block">
                        <div class="center-block">
                            <a href="{{route('conseils')}}" class="btn btn-info btn-sm"><i class="fa fa-backward"></i></a>
                            <a href="{{route('conseils.edit', $conseil)}}" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i></a>
                            <form action="{{route('conseils.destroy', $conseil)}}" method="post" class="btn-custom">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Etes-vous sur de supprimer ce conseil ?')" >
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-4 -->
            </div>
        </div>
    </div>

@endsection