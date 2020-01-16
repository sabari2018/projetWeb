@extends('backend.layouts.master',['heading' => 'Actualites','icon'=>'fa-fw fa-newspaper'])

@section('content')

    <div class="card card-body shadow" id="actu_card">
        <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <img class="col-lg-12" src="/actualites_images/{{$actualite->image}}" alt="Actualite" height="350" width="350">
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-5">
                    <h1 class="font-weight-light">{{$actualite->titre}}</h1>
                    <p>{!! $actualite->description !!}</p>
                </div>
        </div>
        <div class="row align-items-center my-5">
            <p class="text-info text-body" id="actu_content">
                {{$actualite->contenue}}
            </p>
        </div>
        <div class="d-inline-block">
            <div class="center-block">
                <a href="{{route('actualites.index')}}" class="btn btn-info btn-sm"><i class="fa fa-backward"></i></a>
                <a href="" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i></a>
                <form action="" method="post" class="btn-custom">
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

@endsection
