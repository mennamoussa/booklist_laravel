<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container-fluid my-3">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">Menu</li>
                    <li class="list-group-item"><a href="#">Books</a></li>
                    <li class="list-group-item"><a href="#">Create Book</a></li>
                </ul>
            </div>

            <!-- Content area -->
            <div class="col-md-9">
                <h1>Hello</h1>
            </div>

        </div>
    </div>
</body>

</html>
