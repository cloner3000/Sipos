<header class="app-layout-header">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
          <span class="sr-only">Toggle drawer</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <span class="navbar-page-title">
          Dashboard
        </span>
      </div>

      <div class="collapse navbar-collapse" id="header-navbar-collapse">

        </form>

        <ul id="main-menu" class="nav navbar-nav navbar-left">


        </ul>
        <!-- .navbar-left -->

        <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">

          <li class="dropdown dropdown-profile">
            <a href="javascript:void(0)" data-toggle="dropdown">
              <span class="m-r-sm">{{ Auth::user()->name }}<span class="caret"></span></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-header">
                Sipos
              </li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </li>
        </ul>
        <!-- .navbar-right -->
      </div>
    </div>
    <!-- .container-fluid -->
  </nav>
  <!-- .navbar-default -->
</header>
