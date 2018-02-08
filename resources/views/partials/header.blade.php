
  <nav class="nav-extended blue darken-4">
    <div class="nav-wrapper">
      <div class="container">
      <a href="#!" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a>A second link</a></li>
        <li><a><i class="material-icons">person</i></a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
            </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
          </form></li>
      </ul>
    </div>
    </div>
      <div class="container">
    <div class="nav-content">
      <span class="nav-title">Title</span>
      <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal">
        <i class="material-icons">add</i>
      </a>
    </div>
    </div>
  </nav>