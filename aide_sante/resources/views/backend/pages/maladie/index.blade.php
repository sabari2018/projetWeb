@extends('backend.layouts.master',['heading' => 'Maladies','icon'=>'fa-fw fa-notes-medical'])

@section('content')

    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet de voir la liste des maladies
    </div>
    <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">
        <a href="{{route('maladies.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-book-medical fa-sm text-white-50"></i> Ajouter </a>

        <form class="user" method="POST" action="{{route('maladie.import')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="data"/>
            <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" value="Importer">
        </form>
    </div>

    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fa fa-list-ol"></i> Liste des Maladies </h6>
        </div>

        <div class="card-body">
            @if(count($maladies) === 0)
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning"> Aucune maladie presente, veillez clic sur <a class="alert-link" href="{{route('maladies.create')}}">Ajouter</a> pour enregistrer des maladies</h6>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nom</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nom</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($maladies as $index => $malady)

                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$malady->libelle}}</td>
                                    <td class="btn-group-justified">
                                        <button data-toggle="modal" data-id="{{$malady->id}}" data-mylibelle="{{$malady->libelle}}" data-target="#edit" class="btn btn-info btn-sm btn-circle">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <form action="{{route('maladies.destroy', $malady)}}" method="post" class="btn-sm">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger btn-sm btn-circle"
                                                    onclick="return confirm('Etes-vous sur de supprimer cette maladie ?')" >
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

    <!-- Modal -->
    @include('backend.layouts.modal._editModalMalady')

@endsection
