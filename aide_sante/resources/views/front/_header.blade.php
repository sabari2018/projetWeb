<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('accueil')}}">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-phone-volume"></i> Allo
                        <sup><i class="fa fa-2x fa-user-md"></i></sup>
                    </div>

                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('accueil')}}#header">Accueil</a></li>
                    <li><a href="{{route('accueil')}}#astuces">Astuces/Conseils</a></li>
                    <li><a href="{{route('accueil')}}#diagnostic">Faire un diagnostic</a></li>
                    <li><a href="{{route('accueil')}}#medecin">Nos medecin</a></li>
                    <li><a href="{{route('accueil')}}#contact">Contact</a></li>
                    @if(Auth::guest())
                        <li class="dropdown user user-menu open">
                                <a href="{{route('login')}}">
                                    <span class="hidden-xs">Login</span>
                                </a>
                            </li>
                        <li class="dropdown user user-menu open">
                                <a href="{{route('register.index')}}" >
                                    <span class="hidden-xs">S'inscrire</span>
                                </a>
                            </li>
                    @else
                        <li class="dropdown user user-menu open">
                            <a href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                <span class="hidden-xs">Deconnexion</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" id="form_deconnect_user">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>