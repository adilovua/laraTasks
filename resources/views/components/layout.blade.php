<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <!-- CSS only -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Coffeelike | Designed by nodethirtythree + Templated.org</title>
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href={{ URL::asset('css/style.css') }} rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div id="bg">
            <div id="outer">
                <x-header/>
                <x-sidebar/>
                <div id="main">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
        <x-footer/>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
