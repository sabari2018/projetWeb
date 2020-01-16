@extends('backend.layouts.master',['heading' => 'Questionnaires','icon'=>'fa-fw fa-question-circle'])

@section('content')
    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page permet de voir la liste des questionnaires de santé
    </div>

    <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">

        <form class="user" method="POST" action="{{route('questionnaires.import')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="data" id="importer"/>
            <input type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-import" value="Importer">
        </form>
    </div>

    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fa fa-list-ol"></i> Liste des Questionnaires </h6>
        </div>

        <div class="card-body">
            @if(count($questionnaires) === 0)
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
                        @foreach($questionnaires as $index => $questionnaire)

                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$questionnaire->libelle}}</td>
                                <td class="btn-group-justified">
                                    <button data-toggle="modal" data-id="{{$questionnaire->id}}" data-mylibelle="{{$questionnaire->libelle}}" data-target="#edit" class="btn btn-info btn-sm btn-circle">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <form action="{{route('questionnaires.destroy', $questionnaire)}}" method="post" class="btn-custom">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger btn-sm btn-circle"
                                                onclick="return confirm('Etes-vous sur de supprimer ce questionnaire ?')" >
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
    @include('backend.layouts.modal._editModalQuestionnaire')
@endsection
