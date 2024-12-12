<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand h1" href="{{ route("medicines.index") }}">Medicines</a>
        <a class="navbar-brand h1" href="{{ route("sales.index") }}">Sales</a>
        <a class="navbar-brand h1" href="{{ route("students.index") }}">Students</a>
        <a class="navbar-brand h1" href="{{ route("classes.index") }}">Classes</a>
        <a class="navbar-brand h1" href="{{ route("computers.index") }}">Computers</a>
        <a class="navbar-brand h1" href="{{ route("issues.index") }}">Issues</a>
        <div class="justify-end ">
            <div class="col ">
                <a class="btn btn-sm btn-success" href="#">CRUD Management</a>
            </div>
        </div>
    </div>
</nav>
