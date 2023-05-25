<div class="col-2 col-md-2 col-xl-2 px-sm-2 px-0">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link align-middle px-0">
                    <i class="fs-4 bi-house"></i>
                    <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.projects.index')}}" class="nav-link align-middle px-0">
                    <i class="bi bi-archive"></i>
                    <span class="ms-1 d-none d-sm-inline">Projects</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.projects.create')}}" class="nav-link align-middle px-0">
                    <i class="bi bi-plus"></i>
                    <span class="ms-1 d-none d-sm-inline">Crea nuovo progetto</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.types.index')}}" class="nav-link align-middle px-0">
                    <i class="bi bi-eye"></i>
                    <span class="ms-1 d-none d-sm-inline">Visualizza tipologie</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.types.create')}}" class="nav-link align-middle px-0">
                    <i class="bi bi-plus"></i>
                    <span class="ms-1 d-none d-sm-inline">Crea nuova tipologia</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.technologies.index')}}" class="nav-link align-middle px-0">
                    <i class="bi bi-eye"></i>
                    <span class="ms-1 d-none d-sm-inline">Visualizza tecnologie</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.technologies.create')}}" class="nav-link align-middle px-0">
                    <i class="bi bi-plus"></i>
                    <span class="ms-1 d-none d-sm-inline">Crea nuova tecnologia</span>
                </a>
            </li>
        </ul>
    </div>
</div>
