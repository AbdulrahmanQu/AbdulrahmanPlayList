  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="/">Abdulrahman Playlist</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" :class="{{Request::is('home') ? 'active' : ''}}">
            <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
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
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>