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
                <a class="navbar-brand" href="#">Dokano - huurders</a>
            </div>
        </nav>
    </header>
    <main>
        <!-- <div class="container">
            <p class="pTekst">Kies je dag, vervolgens je uur en kies dan de boot die voor jou gepast is en bij je gezelschap past!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <!-- <form action="" id="contactForm">
                <fieldset class="control-group">
                    <legend>Stap 1</legend>
                    <label for="" class="col-12 col-md-9 mb-2 mb-md-0">Kies je dag
                        <input class="form-control form-control-lg buttonDag" type="date" id="datePicker">
                    </label>

                </fieldset>
                <hr>
                <fieldset class="control-group">
                    <legend>Stap 2</legend>

                    <label for="" class="col-12 col-md-9 mb-2 mb-md-0">
                        Kies je uur
                        <div class="buttons">
                            <button class="form-control form-control-lg btn-outline-secondary buttonUur">9u-12u</button>
                            <button class="form-control form-control-lg buttonUur">10u-12u</button>
                            <button class="form-control form-control-lg buttonUur">13u-15u</button>
                            <button class="form-control form-control-lg buttonUur">14u-16u</button>
                        </div>
                    </label>

                </fieldset>
            </form>
            <hr>
            <div class="table-responsive">
                <legend>Stap 3</legend>
                <p class="col-md-9 mb-2 mb-md-0">Kies je boot</p>
                <table class="table table-bordered mb-2 mb-md-0">
                    <thead>
                        <th>Naam Boot</th>
                        <th>Aantal personen</th>
                        <th>Max aantal kinderen</th>
                        <th>Prijs in €</th>
                        <th>Kies deze boot</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>boot 1</td>
                            <td>5</td>
                            <td>1</td>
                            <td>10</td>
                            <td>
                                <button class="btn btn btn-outline-primary bootKnop">Kies</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group flexButton">
                <button type="reset" class="btn btn-secondary" id="sendMessageButton">Reset</button>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">
                    <a href="persoon.html">Volgende</a>
                </button>

        </div> -->

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
