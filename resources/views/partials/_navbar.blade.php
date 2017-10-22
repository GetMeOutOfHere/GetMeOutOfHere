<nav class="white" role="navigation" id="navbar">
  <div class="nav-wrapper container">
    <a id="logo-container" href="/" class="brand-logo">
      <img src="getmeoutofhere.png" alt="Get Me Out Of Here" class="logo">
      <span>Get Me Out Of Here</span>
    </a>
    <ul class="right hide-on-med-and-down menu-ul">
      @if(Auth::user())
        <form class="form-logout" method="POST" action="{{ route('logout') }}">
          {{ csrf_field() }}
          <li><a href="#" type="submit" class="btn-logout">Logout</a></li>
        </form>
      @else
        <li><a href="{{ route('register') }}">Sign Up</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
      @endif
    </ul>

    <ul id="nav-mobile" class="side-nav">
      @if(Auth::user())
        <form class="form-logout" method="POST" action="{{ route('logout') }}">
          {{ csrf_field() }}
          <li><a href="#" type="submit" class="btn-logout">Logout</a></li>
        </form>
      @else
        <li><a href="{{ route('register') }}">Sign Up</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
      @endif
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
