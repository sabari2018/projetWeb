@extends('backend.layouts.master',['heading' => 'Abonnes', 'icon'=>'fa-fw fa-users'])

@section('content')
    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet de voir la liste des abonnes au site
    </div>

    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des Medecins de la plateforme </h6>
        </div>
        <div class="card-body">
            @if(count($users) === 0)
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning"> Aucun abonne n'est inscrit </h6>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th >Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $index => $user)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$user->nom}}</td>
                                <td>{{$user->prenom}}</td>
                                <td>{{$user->email}}</td>
                                <td class="btn-group-justified">
                                    <a href="#" class="btn btn-info btn-sm btn-circle">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="#" class="btn btn-facebook btn-sm btn-circle">
                                        <i class="fa fa-edit "></i>
                                    </a>

                                    <form action="#" method="post" class="btn-custom">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger btn-sm btn-circle"
                                                onclick="return confirm('Etes-vous sur de supprimer cet abonne ?')" >
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