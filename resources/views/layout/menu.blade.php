<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid mb-3">
        <a class="navbar-brand " href="{{ route('users') }} ">
            <h2 class="navbar-brand">Student Portal</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('users') }}">Home</a>
                </li>
                <li class="nav-item btn btn-primary btn-sm">
                    <a class="nav-link text-light" href="{{ route('add.student') }}">Add Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('update') }}">Update</a>
                </li>


            </ul>

        </div>
    </div>
</nav>
