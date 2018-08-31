<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/clean-blog.min.css" rel="stylesheet"> -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <meta name="csrf-token" content="{{csrf_token() }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('customer') }}">Dokano - huurders</a>
            </div>
        </nav>
    </header>
    <main>

        <div class="content">
            <div id="app">
                <router-view></router-view>
            </div>
        </div>

    </main>
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
    <script src="{{ elixir('js/app.js') }}"></script>
</body>

</html>
