

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <a class="navbar-brand" href="controller/accueilController.php"><img src="assets/mar.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=patientsList">Patients'List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Add a new patient</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=appointmentsList">Appointments'List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Add a new appointments</a>
            </li>
        </ul>
    </div>
    <form method="GET" class="form-inline my-2 my-lg-0 pb-3 pr-3 d-flex justify-content-end">
        <input class="form-control mr-sm-2" type="search" name="searchbarre" placeholder="Search" aria-label="Search" value="">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>