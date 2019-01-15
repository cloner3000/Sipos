<aside class="app-layout-drawer">

  <!-- Drawer scroll area -->
  <div class="app-layout-drawer-scroll">
    <!-- Drawer logo -->
    <div id="logo" class="drawer-header">
      <a href="#"><img class="img-responsive" src="{{ asset('img/logo/logo-backend.png') }}" title="AppUI" alt="AppUI" /></a>
    </div>

    <!-- Drawer navigation -->
    <nav class="drawer-main">
      <ul class="nav nav-drawer">

        <li class="nav-item nav-drawer-header">Apps</li>

        <li class="nav-item active">
          <a href="{{ route('pages.home') }}"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
        </li>

        <li class="nav-item">
          <a href="{{ route('pages.catatan') }}"><i class="ion-android-document"></i>Catatan</a>
        </li>

        <li class="nav-item nav-item-has-subnav">
          <a href="javascript:void(0)"><i class="ion-android-add-circle"></i>Register Bayi</a>
          <ul class="nav nav-subnav">

            <li>
              <a href="{{ route('pages.register.011') }}">0 - 11 Bulan</a>
            </li>

            <li>
              <a href="{{ route('pages.register.1223') }}">12 - 23 Bulan</a>
            </li>

            <li>
              <a href="{{ route('pages.register.2435') }}">24 - 35 Bulan</a>
            </li>

            <li>
              <a href="{{ route('pages.register.3647') }}">36 - 47 Bulan</a>
            </li>

            <li>
              <a href="{{ route('pages.register.4859') }}">48 - 59 Bulan</a>
            </li>

          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('pages.wuspus') }}"><i class="ion-android-add-circle"></i>Register Wuspus</a>
        </li>

        <li class="nav-item">
          <a href="{{ route('pages.ibu-hamil') }}"><i class="ion-android-add-circle"></i>Register Ibu Hamil</a>
        </li>

        <li class="nav-item">
          <a href="{{ route('pages.pasangan') }}"><i class="ion-android-add-circle"></i>Daftar Pasangan</a>
        </li>

        <li class="nav-item">
          <a href="{{ route('pages.anak') }}"><i class="ion-android-add-circle"></i>Daftar Anak</a>
        </li>

        <li class="nav-item">
          <a href="{{ route('pages.posyandu') }}"><i class="ion-android-add-circle"></i>Daftar Posyandu</a>
        </li>

        <li class="nav-item">
          <a href="{{ route('pages.desa') }}"><i class="ion-android-add-circle"></i>Daftar Desa</a>
        </li>

        {{-- <li class="nav-item">
          <a href="frontend_home.html"><i class="ion-android-document"></i>Pengisian Data Posyandu</a>
        </li>

        <li class="nav-item nav-item-has-subnav">
          <a href="javascript:void(0)"><i class="ion-android-document"></i>Pendataan</a>
          <ul class="nav nav-subnav">

            <li>
              <a href="base_pages_blank.html">Umum</a>
            </li>

            <li>
              <a href="base_pages_inbox.html">Balita</a>
            </li>

          </ul>
        </li>

        <li class="nav-item">
          <a href="frontend_home.html"><i class="ion-briefcase"></i>Perencanaan Kerja</a>
        </li>

        <li class="nav-item nav-item-has-subnav">
          <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> JS plugins</a>
          <ul class="nav nav-subnav">

            <li>
              <a href="base_js_maps.html">Maps</a>
            </li>

            <li>
              <a href="base_js_sliders.html">Sliders</a>
            </li>

            <li>
              <a href="base_js_charts_flot.html">Charts - Flot</a>
            </li>

            <li>
              <a href="base_js_charts_chartjs.html">Charts - Chart.js</a>
            </li>

            <li>
              <a href="base_js_charts_sparkline.html">Charts - Sparkline</a>
            </li>

            <li>
              <a href="base_js_draggable.html">Draggable</a>
            </li>

            <li>
              <a href="base_js_syntax_highlight.html">Syntax highlight</a>
            </li>

          </ul>
        </li> --}}

      </ul>
    </nav>
    <!-- End drawer navigation -->

    <div class="drawer-footer">
      <!-- Footer Drawe -->
    </div>
  </div>
</aside>
