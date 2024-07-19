<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/argon-dashboard.min.css" integrity="sha512-xX4LTTrPRKtHKQ2OEa6N+8PRWSALWLss8pegG7sJ96j97V+Lw8WHKKLOAjYmkfemrD6dLsW0vX1p/7pE0Yc1gw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/nucleo-icons.min.css" integrity="sha512-GhQLa5q131bN6G1TOG7zviS79WU8/18DE5WLS7rHN+EOQ0G3BDJfV6+/g680Cq9ocHU+SLKvO9gFnS0NuhZXGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/argon-dashboard/2.0.4/css/nucleo-svg.min.css" integrity="sha512-3vhUeqMoZelRDM1EDZGDqNi+r/FBKb0Xigen7qjdUOqtIlyDPlzjQieCU1MrjygOpmc+VAlKG/MyLa00fesRMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Dashboard </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-light">Tableau de bord</a>
                <a href="{{ route('carousels.index') }}" class="list-group-item list-group-item-action bg-light">Carousels</a>
                <a href="{{ route('slogans.index') }}" class="list-group-item list-group-item-action bg-light">Slogans</a>
                <a href="{{ route('testimonials.index') }}" class="list-group-item list-group-item-action bg-light">Témoignages</a>
                <a href="{{ route('agencies.index') }}" class="list-group-item list-group-item-action bg-light">Agences</a>
                <a href="{{ route('permis.index') }}" class="list-group-item list-group-item-action bg-light">Permis de Conduire</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
            </nav>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqpyOtFLIvP4Ce4j6+PTbYuj5z9UAZUNoMdByp7T7FyfH8VaxE" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgpsFMbMxdh/tDLT+hc4LgTyc/5NxA4l5Q6zCu0QF94cKbbFS" crossorigin="anonymous"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
