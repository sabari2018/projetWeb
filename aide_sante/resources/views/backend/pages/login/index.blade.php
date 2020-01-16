<!DOCTYPE html>
<html>
<head >

    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Allo Docteur - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/css/loginStyle.css')}}">

</head>
<body >

<div class="container" >

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"> Authentification </h1>
                                </div>


                                <form class="form-signin" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-label-group">
                                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="{{ old('email') }}" required autofocus>
                                        <label for="inputEmail">Adresse email</label>

                                        <p id="erreur"></p>

                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" name="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Password" required>
                                        <label for="inputPassword">Mot de passe</label>
                                        <span class="help-block">
                                             <strong>{{ $errors->first('password') }}</strong>
                                        </span>

                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customCheck1">Se souvenir de moi</label>
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                                    <hr class="my-4">

                                </form>

                                <hr>

                                    <div class="text-center">
                                        <a class="small" href="#">Mot de passe oublier ?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="#"> Creer un compte </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Allo Docteur 2019</span>
                </div>
            </div>
            <hr>
        </div>

    </div>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('vendor/js/loginJS.js')}}"></script>

<script>

    verifierChampsEmail('{{route('login.email')}}');
</script>

</body>
</html>