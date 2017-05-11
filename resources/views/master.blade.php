<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Tune Assembly</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/slate/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/a4.css') }}"/>
</head>
<body>

    <h1>Tune assembly</h1>

    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/tunes">Tunes</a></li>
            <li><a href="/addtune">Add Tune</a></li>
            <li><a href="/types">Tune Types</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="get" action="search">
            <input type="text" name="searchTerm" id="searchTerm" class="form-control" placeholder="Tune Name" required>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
    </nav>

    <section class="center">
        @yield('content')
    </section>

</body>
</html>
