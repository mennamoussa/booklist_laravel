<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">@yield('project-name')</a>
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
                    <li class="list-group-item"><a href="{{route('books')}}">Books</a></li>
                    <li class="list-group-item"><a href="{{route('create-book')}}">Create Book</a></li>
                </ul>
            </div>

            <!-- Content area -->
            <div class="col-md-9">
                @yield('content')
            </div>

        </div>
    </div>
</body>

</html>
<style>
    body {
    background-color: rgb(228, 150, 228);
    }
    /* Table Styles */

    .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    background-color: purple;
    color: #fff;
    }
    /* Sidebar Styles */
    .col-md-3 .list-group-item.active {
    background-color: purple;
    color: #fff;
}

.col-md-3 .list-group-item {
    background-color: #e9ecef;
}

.col-md-3 .list-group-item a {
    color: rgb(226, 120, 226);
}

.col-md-3 .list-group-item a:hover {
    color: rgb(151, 51, 151);
}

</style>