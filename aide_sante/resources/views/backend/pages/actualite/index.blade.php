@extends('backend.layouts.master',['heading' => 'Actualites','icon'=>'fa-fw fa-newspaper'])

@section('content')

    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet de manager les actualites
    </div>

    <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4 btn-group-justified">
        <a href="{{route('actualites.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-newspaper fa-sm text-white-50"></i> Creer </a>
    </div>

    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-newspaper"></i> Liste des actualites </h6>
        </div>

        @if(count($actualites) === 0)
            <div class="card-body">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning"> Aucun medecin present, veillez clic sur <a class="alert-link" href="{{route('actualites.create')}}">Ajouter</a> pour enregistrer des medecins</h6>
                </div>
            </div>
        @else

        <div class="row text-center" style="margin: 2%">

            @foreach($actualites as $actualite)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="/actualites_images/{{$actualite->image}}" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-info">{{$actualite->titre}}</h5>
                            <p class="card-text">{!! $actualite->description !!}</p>
                        </div>
                        <div class="card-footer d-inline-block">
                            <div class="center-block">
                                <a href="{{route('actualites.show', $actualite)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{route('actualites.edit', $actualite)}}" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i></a>
                                <form action={{route('actualites.destroy', $actualite)}} method="post" class="btn-custom">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Etes-vous sur de supprimer cette actualite ?')" >
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="horizontal-center paginate">
            {{$actualites->links()}}
        </div>
        @endif
    </div>
@endsection