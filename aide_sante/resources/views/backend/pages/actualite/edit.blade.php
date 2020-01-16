@extends('backend.layouts.master',['heading' => 'Actualites','icon'=>'fa-fw fa-newspaper'])

@section('content')

    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-user-plus"></i></h6>
        </div>

        <div class="row text-center">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Modifier l'actualite</h1>
                            </div>


                            <nav class="nav nav-tabs">
                                <a class="nav-item nav-link active" href="#p1" data-toggle="tab">Titre & description</a>
                                <a class="nav-item nav-link" href="#p2" data-toggle="tab">Contenu</a>
                                <a class="nav-item nav-link" href="#p3" data-toggle="tab">Source</a>
                            </nav>
                            <form class="user" method="POST" action="{{route('actualites.update',$actualite)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('patch') }}
                                <div class="tab-content tab-content-perso">

                                    <div class="tab-pane fade show active" id="p1">
                                        <div class="form-group row">
                                            <div class="col-sm-9 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="titre" id="exampleFirstName" placeholder="Titre" value="{{$actualite->titre}}" required>
                                                <p class="text-danger">{{$errors->first('titre')}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <textarea class="text" name="description" >{{$actualite->description}}</textarea>
                                                <p class="text-danger">{{$errors->first('description')}}</p>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="checkbox" class="checkbox" {{$actualite->visibilite === 1 ? 'checked':''}} name="visible"> Rendre visible sur le front office ?
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="p2">
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <textarea class="text" name="contenu" > {{$actualite->contenue}}</textarea>
                                                <p class="text-danger">{{$errors->first('contenu')}}</p>
                                            </div>

                                            <hr>
                                            <div class="form-group row tab-content-perso">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <input type="file" name="image" class="form-control-file" value="{{old('image')}}">
                                                    <p class="text-danger">{{$errors->first('image')}}</p>
                                                </div>
                                            </div>
                                            <hr>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade tab-content-perso" id="p3">

                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <textarea class="text" name="source">{{$actualite->source}}</textarea>
                                                <p class="text-danger">{{$errors->first('source')}}</p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-9 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="lien" id="exampleFirstName" placeholder="Lien vers la source" value="{{$actualite->lien}}" required>
                                                <p class="text-danger">{{$errors->first('lien')}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="center-block">
                                    <input type="submit" class="btn btn-primary btn-user" value="Valider">
                                    <input type="reset" class="btn btn-danger btn-user" onclick="window.location='{{route('actualites.index')}}'" value="Annuler">
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection