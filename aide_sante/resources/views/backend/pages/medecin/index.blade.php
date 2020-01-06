@extends('backend.layouts.master',['heading' => 'Medecins', 'icon'=>'fa-fw fa-user-nurse'])

@section('content')
    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet d'ajouter les medecins sur la plateforme et d'editer les informations
    </div>
    <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4 btn-group-justified">
        <a href="{{route('medecins.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-address-card fa-sm text-white-50"></i> Ajouter </a>

        <form class="user" method="POST" action="{{route('medecin.import')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="data"/>
            <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" value="Importer">
        </form>
    </div>

    {{--  Liste des medecins  --}}

    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des Medecins de la plateforme </h6>
        </div>
        <div class="card-body">
            @if(count($medecins) === 0)
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning"> Aucun medecin present, veillez clic sur <a class="alert-link" href="{{route('medecins.create')}}">Ajouter</a> pour enregistrer des medecins</h6>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Specialite</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Specialite</th>
                            <th >Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($medecins as $medecin)
                            <tr>
                                <td>{{$medecin->nom}}</td>
                                <td>{{$medecin->prenom}}</td>
                                <td>{{$medecin->email}}</td>
                                <td>{{$medecin->specialite}}</td>
                                <td class="btn-group-justified">
                                    <a href="{{route('medecins.show', $medecin)}}" class="btn btn-info btn-sm btn-circle">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{route('medecins.edit', [$medecin->id])}}" class="btn btn-facebook btn-sm btn-circle">
                                        <i class="fa fa-edit "></i>
                                    </a>

                                    <form action="{{route('medecins.destroy', $medecin)}}" method="post" class="btn-sm">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger btn-sm btn-circle"
                                                onclick="return confirm('Etes-vous sur de supprimer cet medecin ?')" >
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>
@endsection
