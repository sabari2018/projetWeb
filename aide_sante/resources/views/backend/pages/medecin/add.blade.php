@extends('backend.layouts.master',['heading' => 'Medecins', 'icon'=>'fa-fw fa-user-nurse'])

@section('content')
    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-user-plus"></i></h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Ajouter un medecin</h1>
                        </div>
                        <form class="user" method="POST" action="{{route('medecins.store')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nom" id="exampleFirstName" placeholder="Nom" value="{{old('nom')}}" required>
                                    <p class="text-danger">{{$errors->first('nom')}}</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="prenom" id="exampleLastName" placeholder="Prenom" value="{{old('prenom')}}" required>
                                    <p class="text-danger">{{$errors->first('prenom')}}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleFirstName" placeholder="Email" value="{{old('email')}}" required>
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="adresse" id="exampleLastName" placeholder="Adresse" value="{{old('adresse')}}" required>
                                    <p class="text-danger">{{$errors->first('adresse')}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="date form-control form-control-user" type="text" id="date" name="date_naissance" placeholder="Date de Naissance">
                                    <p class="text-danger">{{$errors->first('date_naissance')}}</p>
                                </div>

                                <div class="col-sm-6 mb-3 mb-sm-0">

                                    <div class="form-group row">
                                        <input type="text" name="specialite" id="libelle" class="form-control form-control-user" placeholder="Specialite" value="{{old('specialite')}}" required />
                                        <p class="text-danger">{{$errors->first('specialite')}}</p>
                                        <div id="specialiteList">
                                        </div>
                                    </div>
                                    {{ csrf_field() }}

                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label class="label">Importer une photo...</label>
                                <input type="file" name="select_photo" />
                                <p class="text-danger">{{$errors->first('select_photo')}}</p>

                            </div>

                            <hr>

                            <div class="btn-group-justified">
                                <input type="submit" class="btn btn-primary btn-user" value="Valider">
                                <input type="reset" class="btn btn-danger btn-user" onclick="window.location='{{route('medecins.index')}}'" value="Annuler">
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="#">Besoin d'aide ?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{route('medecins.index')}}">Retourner sur la liste de medecins</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection