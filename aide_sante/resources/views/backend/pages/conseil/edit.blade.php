@extends('backend.layouts.master',['heading' => 'Conseil','icon'=>'fa-fw fa-user-nurse'])

@section('content')
    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-user-edit"></i></h6>
        </div>
        <div class="row text-center">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Editer les informations</h1>
                            </div>
                            <form class="user" method="POST" action="{{route('conseils.update', $conseil)}}">
                                {{ csrf_field() }}
                                {{method_field('patch')}}

                                <div class="form-group row">
                                    <div class="col-sm-9 mb-3 mb-sm-0">
                                        <label for="titre"> Titre </label>
                                        <input type="text" class="form-control form-control-user" name="titre" id="exampleFirstName" placeholder="Titre" value="{{$conseil->titre}}" required>
                                        <p class="text-danger">{{$errors->first('titre')}}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="description"> Description</label>
                                        <textarea class="text" name="description"> {{$conseil->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="description"> lien</label>
                                        <input type="text" class="form-control form-control-user" name="lien" placeholder="Lien" value="{{$conseil->lien}}">
                                    </div>
                                </div>

                                <hr>
                                <div class="center-block">
                                    <input type="submit" class="btn btn-primary btn-user" value="Valider">
                                    <input type="reset" class="btn btn-danger btn-user" onclick="window.location='{{route('conseils')}}'" value="Annuler">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
