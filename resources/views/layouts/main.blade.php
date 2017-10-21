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
            <h1 class="header center white-text banner-title">Welcome! to Get Me Out of Here platform</h1>
            <div class="row center">
              <h5 class="header col s12 white-text light banner-description">Help yourself get out of an unwanted situation with a comfortable reason from us! Feel Free to try our awesome features now! :)</h5>
            </div>
            <div class="row center">
              <a href="http://materializecss.com/getting-started.html" id="sign-up-button" class="btn-large waves-effect waves-light red darken-3">Sign Up Now!</a>
            </div>
            <br><br>

          </div>
        </div>
        <div class="parallax"><img src="banner.jpg" alt="Unsplashed background img 1"></div>
      </div>

      <div class="container">
        <div class="section" id="how-it-work">
          <div class="row">
            <div class="col s12">
              <h1 class="header center red-text text-darken-3 how-it-work-title">How It Work
            </div>
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                <h5 class="center">Step 1</h5>

                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                <h5 class="center">Step 2</h5>

                <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                <h5 class="center">Step 3</h5>

                <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
              </div>
            </div>
          </div>

        </div>
      </div>


    </body>
</html>
