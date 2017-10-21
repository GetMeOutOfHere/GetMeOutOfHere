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
        <script type="text/javascript" src="js/app.js"></script>

    </head>
    <body>
      @includeIf('partials/_navbar')

      <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center white-text banner-title">Get A Great Excuse When You Need It Most</h1>
            <div class="row center">
              <h5 class="header col s12 white-text light banner-description">Stuck In An Awkward Social Situation?  <br> Have A Reason To Leave Texted To Your Phone</h5>
            </div>
            <div class="row center">
              <a href="http://materializecss.com/getting-started.html" id="sign-up-button" class="btn-large waves-effect waves-light red darken-3">Get Your Excuse Ready Now!</a>
            </div>
            <br><br>

          </div>
        </div>
        <div class="parallax"><img src="awkward.jpeg" alt="Unsplashed background img 1"></div>
      </div>

      <div class="container">
        <div class="section" id="how-it-work">
          <div class="row">
            <div class="col s12">
              <h1 class="header center red-text text-darken-3 how-it-work-title">How It Works
            </div>
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                <h5 class="center">Sign Up</h5>

                <p class="light">Tell us who you are, and importantly, what your phone number is.</p>
                <p class="light">Add our number to your phone. Call us "Mum" or "Hubby".</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                <h5 class="center">Set Up</h5>

                <p class="light">Tell us what to text you with, and when to text you. Get Imaginative!</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                <h5 class="center">Get Out</h5>

                <p class="light">Get your text.</p>
                <p class="light">Look startled.</p>
                <p class="light">Show them the text.</p>
                <p class="light">Get the hell out.</p>
                
              </div>
            </div>
          </div>

        </div>
      </div>


    </body>
</html>
