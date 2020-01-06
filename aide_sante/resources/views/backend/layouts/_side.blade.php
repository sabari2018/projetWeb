<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-phone-volume"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Allo <sup><i class="fa fa-3x fa-user-md"></i></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de bord</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Utilisateurs & contact
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link " href="{{route('medecins.index')}}">
            <i class="fas fa-fw fa-user-nurse"></i>
            <span>Medecin</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('abonnes')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Abonnes</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dictionnaire
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('symptome.index')}}">
            <i class="fas fa-biohazard"></i>
            <span>Symptomes</span>
        </a>
{{--        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="#">Login</a>
                <a class="collapse-item" href="#">Register</a>
                <a class="collapse-item" href="#">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="#">404 Page</a>
                <a class="collapse-item" href="#">Blank Page</a>
            </div>
        </div>--}}
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('maladies.index')}}">
            <i class="fas fa-fw fa-notes-medical"></i>
            <span>Maladies</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('questionnaires.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Questionaire</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Mediatheque & parametres
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link " href="{{route('conseils')}}">
            <i class="fas fa-fw fa-user-nurse"></i>
            <span>Conseils</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Astuces</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="#">
            <i class="fas fa-fw fa-user-nurse"></i>
            <span>Forum</span>
        </a>
    </li>
    <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="fas fa-fw fa-user-nurse"></i>
                <span>Newsletter</span>
            </a>
    </li>
    <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fas fa-fw fa-user-nurse"></i>
                    <span>Actualites</span>
                </a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->