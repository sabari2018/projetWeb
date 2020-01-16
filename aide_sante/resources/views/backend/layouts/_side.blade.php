
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-phone-volume"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Allo <sup><i class="fa fa-3x fa-user-md"></i></sup></div>
    </a>


    <hr class="sidebar-divider my-0">


    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de bord</span></a>
    </li>


    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Utilisateurs & contact
    </div>


    <li class="nav-item">
        <a class="nav-link " href="{{route('medecins.index')}}">
            <i class="fas fa-fw fa-user-nurse"></i>
            <span>Medecin</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('abonnes.index')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Abonnes</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Dictionnaire
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('symptome.index')}}">
            <i class="fas fa-biohazard"></i>
            <span>Symptomes</span>
        </a>

    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('maladies.index')}}">
            <i class="fas fa-fw fa-notes-medical"></i>
            <span>Maladies</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{route('questionnaires.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Questionaire</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <div class="sidebar-heading">
        Mediatheque & parametres
    </div>


    <li class="nav-item">
        <a class="nav-link " href="{{route('conseils')}}">
            <i class="fas fa-fw fa-user-nurse"></i>
            <span>Conseils</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('actualites.index')}}">
            <i class="fas fa-newspaper"></i>
            <span>Actualites</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="#">
            <i class="fas fa-fw fa-user-nurse"></i>
            <span>Forum</span>
        </a>
    </li>
    <li class="nav-item">
            <a class="nav-link " href="{{route('newsletters.index')}}">
                <i class="fas fa-fw fa-user-nurse"></i>
                <span>Newsletter</span>
            </a>
    </li>

    <hr class="sidebar-divider">


    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>