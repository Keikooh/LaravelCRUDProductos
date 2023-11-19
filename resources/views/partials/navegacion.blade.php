<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="text-primary fs-4 fw-bold ">Crud productos</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('ProductosIndex')}}">Productos</a>
                </li>
                <li class="nav-item">
                    <form action="{{route('LogoutStore')}}" method="POST">
                        @csrf
                        <button class="nav-link active" aria-current="page" href="{{route('LogoutStore')}}">Cerrar sesion</button>
                    </form>
                </li>
                <li class="nav-item">
                    <span class="nav-link active">{{auth()->user()->username}}</span>
                </li>
            </ul>
        </div>
    </div>
</nav>
