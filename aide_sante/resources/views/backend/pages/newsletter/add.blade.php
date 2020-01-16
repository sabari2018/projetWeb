@extends('backend.layouts.master',['heading' => 'Newsletters','icon'=>'fa-fw fa-mail-bulk'])

@section('content')

    <div class="card shadow mb-3 center-block">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-mail-bulk"></i> Creation d'une compagne </h6>
        </div>

        <div class="row text-center">
            <div class="card-body">
                <div class="justify-content-center">
                    <form action="{{route('newsletters.store')}}" method="POST" class="center-block">
                        {{csrf_field()}}
                        <fieldset class="col-lg-pull-12">


                            <div class="form-group">

                                <div class="col-md-9">
                                    <input id="name" name="subject" type="text" placeholder="Titre de la newsletter" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" placeholder="Entrer votre message..." rows="5"></textarea>
                                </div>
                            </div>

                            <hr>
                            <div class="center-block">
                                <input type="submit" class="btn btn-primary btn-user" value="Valider">
                                <input type="reset" class="btn btn-danger btn-user" onclick="window.location='{{route('newsletters.index')}}'" value="Annuler">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
