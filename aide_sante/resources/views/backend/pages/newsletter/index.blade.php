@extends('backend.layouts.master',['heading' => 'Newsletters','icon'=>'fa-fw fa-mail-bulk'])

@section('content')

    <div class="alert alert-info" role="definition">
        <i class="fa fa-info-circle"></i> Cette page affiche la liste des abonnés ayant souscrit aux newsletters
    </div>

    <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4 btn-group-justified">
        <a href="{{route('newsletters.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-mail-bulk text-white-50"></i> Créer une campagne</a>
    </div>

    <div class="card shadow mb-3">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des utilisateurs des abonnés </h6>
        </div>
        <div class="card-body">

            @if(count($abonnes) === 0)
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning"> Aucun abonné pour les newsletters</h6>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Liste de diffusion</th>
                            <th>Date de subscription</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Liste de diffusion</th>
                            <th>Date de subscription</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($abonnes as $index => $abonne)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$abonne['email']}}</td>
                                <td>{{$abonne['list_name']}}</td>
                                <td>{{$abonne['timestamp_signup']}}</td>
                                <td>{{$abonne['status']}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>

@endsection
