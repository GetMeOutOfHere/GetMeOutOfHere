<nav class="white" role="navigation" id="navbar">
  <div class="nav-wrapper container">
    <a id="logo-container" href="/" class="brand-logo">
      <img src="getmeoutofhere.png" alt="Get Me Out Of Here" class="logo">
      <span>Get Me Out Of Here</span>
    </a>
    <ul class="right hide-on-med-and-down menu-ul">
      <li><a href="{{ route('register') }}">Sign Up</a></li>
      <li><a href="{{ route('login') }}">Login</a></li>
    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a href="{{ route('register') }}">Sign Up</a></li>
      <li><a href="{{ route('login') }}">Login</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
