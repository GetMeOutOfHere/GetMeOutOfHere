<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Get Me Out of Here</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>

        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/lib/sweetalert/dist/sweetalert.css">
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="/lib/sweetalert/dist/sweetalert.min.js"></script>

    </head>
    <body>
      @includeIf('partials/_navbar')

      <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center white-text banner-title">Get A Great Excuse When You Need It Most</h1>
            <div class="row center">
              <h4 class="header col s12 white-text light banner-description">Stuck In An Awkward Social Situation?  <br> Have A Reason To Leave Texted To Your Phone</h5>
            </div>
            <div class="row center">
              <a href="{{ route('dashboard') }}" id="sign-up-button" class="btn-large waves-effect waves-light red darken-3">Get Your Excuse Ready Now!</a>
            </div>
            <br><br>

          </div>
        </div>
        <div class="parallax"><img src="awkward.jpeg" alt="Unsplashed background img 1"></div>
      </div>

      <div class="container">
        @yield('content')

      </div>


    </body>
</html>
