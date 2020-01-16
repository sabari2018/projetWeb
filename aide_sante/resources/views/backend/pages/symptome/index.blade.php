@extends('backend.layouts.master',['heading' => 'Symptomes','icon'=>'fa-fw fa-biohazard'])

@section('content')

    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet de voir la liste des symptomes
    </div>

    <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">
        {{--<a href="{{route('symptome.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-book-medical fa-sm text-white-50"></i> Ajouter </a>--}}

        <form class="user" method="POST" action="{{route('symptome.import')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="data" id="importer"/>
            <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-import" value="Importer">
        </form>
    </div>

    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fa fa-list-ol"></i> Liste des Symptomes </h6>
        </div>

        <div class="card-body">
            @if(count($symptomes) === 0)
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
                        @foreach($symptomes as $index => $symptome)

                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$symptome->libelle}}</td>
                                <td class="btn-group-justified">
                                    <button data-toggle="modal" data-id="{{$symptome->id}}" data-mylibelle="{{$symptome->libelle}}" data-target="#edit" class="btn btn-info btn-sm btn-circle">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <form action="{{route('symptome.destroy', $symptome)}}" method="post" class="btn-custom">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger btn-sm btn-circle"
                                                onclick="return confirm('Etes-vous sur de supprimer ce symptome ?')" >
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

    @include('backend.layouts.modal._editModalSymptome')
@endsection
