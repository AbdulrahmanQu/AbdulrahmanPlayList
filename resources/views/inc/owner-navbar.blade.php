  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="/">Abdulrahman Playlist</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" :class="{{Request::is('home') ? 'active' : ''}}">
            <a class="nav-link" href="/">Home<span class="sr-only"></span></a>
          </li>
          <li class="nav-item" :class="{{Request::is('Movies') ? 'active' : ''}}">
            <a class="nav-link" href="/Movies">Movies</a>
          </li>
          <li class="nav-item" :class="{{Request::is('Series') ? 'active' : ''}}">
            <a class="nav-link" href="/Series">Series</a>
          </li>
          <li class="nav-item" :class="{{Request::is('Contact') ? 'active' : ''}}">
            <a class="nav-link" href="/Contact">Contact</a>
          </li>
          <li class="nav-item" :class="{{Request::is('Userslist') ? 'active' : ''}}">
            <a class="nav-link" href="/Userslist">Users list</a>
          </li>
          <li class="nav-item" :class="{{Request::is('Authentication') ? 'active' : ''}}">
            <a class="nav-link" href="/Authentication">Authentication list</a>
          </li>
          <li class="nav-item" :class="{{Request::is('removevideos') ? 'active' : ''}}">
            <a class="nav-link" href="/removevideos">remove videos</a>
          </li>
          <li class="nav-item" :class="{{Request::is('addvideos') ? 'active' : ''}}">
            <a class="nav-link" href="/addvideos">Add Videos</a>
          </li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item">
        <ul><a href="" class="nav-link">Sign out</a></ul>
        </li>
        </ul>
      </div>
    </nav>