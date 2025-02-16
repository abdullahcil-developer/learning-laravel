<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route("home")}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <!--<a class="nav-link {{ Route::is("home") ? "active" : ""}}"  href="{{ route("home")}}">Home</a>-->
          <a class="nav-link {{ request()->route()->getName() == "home" ? "active" : ""}}"  href="{{ route("home")}}">Home</a>
        <!--  <a class="nav-link {{ Route::currentRouteName() == "home" ? "active" : ""}}"  href="{{ route("home")}}">Home</a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::is("about") ? "active" : ""}}"  href="{{ route("about")}}">About</a>
        </li>
      </ul>
    </div>
  </nav>