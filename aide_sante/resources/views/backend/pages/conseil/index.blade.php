@extends('backend.layouts.master',['heading' => 'Conseil','icon'=>'fa-fw fa-user-nurse'])

@section('content')
    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet creer des conseils et de les rendre accessibles sur le site
    </div>
    <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4 btn-group-justified">
        <a href="{{route('conseils.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-address-card fa-sm text-white-50"></i> Ajouter </a>
    </div>


    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-user-plus"></i></h6>
        </div>
    <div class="row text-center" style="margin: 2%">

        @foreach($conseils as $conseil)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$conseil->titre}}</h4>
                    <p class="card-text">{{ $conseil->description }}</p>
                </div>

                <div class="card-footer d-inline-block">

                    <div class="center-block">
                        <a href="{{route('conseils.show', $conseil)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="{{route('conseils.edit', $conseil)}}" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i></a>

                        <form action="{{route('conseils.destroy', $conseil)}}" method="post" class="btn-custom">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Etes-vous sur de supprimer ce conseil ?')" >
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                        {{--<input type="reset" class="btn btn-danger btn-user" onclick="window.location='{{route('conseils')}}'" value="Annuler">--}}
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>

        <div class="horizontal-center paginate">
            {{$conseils->links()}}
        </div>

    </div>

@endsection