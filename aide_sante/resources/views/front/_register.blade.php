@extends('front.master')

@section('content')

    <div id="contact">

        <div class="container">
            <div class="row" id="register_content">

                <h2 class="text-center">Inscription</h2>
                <div class="col-md-3"></div>
                <div class="col-md-6 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">

                    <form method="POST" action="{{route('register.store')}}" role="form" id="contactForm" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user">
                                    </i>
                                </div>
                                <input type="text" name="nom" class="form-control" id="name" placeholder="Votre Nom" value="{{old('nom')}}" required/>
                                <p class="text-danger">{{$errors->first('nom')}}</p>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user">
                                    </i>
                                </div>

                                <input type="text" name="prenom" class="form-control" id="name" placeholder="Votre Prenom" value="{{old('prenom')}}" required/>
                                <p class="text-danger">{{$errors->first('prenom')}}</p>
                            </div>
                        </div>

                       {{-- <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone">
                                    </i>
                                </div>
                                <input type="text" class="form-control" name="phone" id="subject" placeholder="Telephone" value="{{old('phone')}}" required/>
                                <p class="text-danger">{{$errors->first('phone')}}</p>
                            </div>
                        </div>--}}

                        <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar">
                                        </i>
                                    </div>
                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" value="{{old('date')}}" required/>
                                    <p class="text-danger">{{$errors->first('date')}}</p>
                                </div>
                        </div>

                        <div class="form-group ">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-image">
                                    </i>
                                </div>
                                <input class="form-control"  name="profil" placeholder="Photo de profil" type="file"/>
                                <p class="text-danger">{{$errors->first('profil')}}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-mail-bulk">
                                    </i>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Votre Email"  value="{{old('email')}}" required/>
                                <p class="text-danger">{{$errors->first('email')}}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-star">
                                    </i>
                                </div>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe"  required/>
                                <p class="text-danger"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-star">
                                    </i>
                                </div>
                                <input type="password" class="form-control" name="confirm" id="confirm_password" placeholder="Confirmer votre mot de passe" required/>
                                <p class="text-danger" id="confirm_msg"></p>
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input position-static" name="souscription" type="checkbox" id="blankCheckbox"> Voullez-vous recevoir nos newsletters ?
                        </div>

                        <hr>


                        <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">

                                <div class="captcha btn-refresh">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-group-sm btn-facebook btn-sm"><i class="fa fa-refresh"></i></button>
                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" style="margin-top: 1%">


                                </div>

                                @if ($errors->has('captcha'))
                                    <span class="help-block">
                                  <strong>{{ $errors->first('captcha') }}</strong>
                              </span>
                                @endif

                        </div>

                        <hr>

                        <hr>

                        <div class="row form-group btn-group-sm center-block">
                            <button type="submit" class="btn btn-facebook pull-left" style="margin-right: 2%">ENVOYER</button>
                            <button type="reset" class="btn btn-outline-danger pull-left" style="background-color: #b55a32">ANNULER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection