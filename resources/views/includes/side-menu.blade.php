<aside class="app-layout-drawer">

  <!-- Drawer scroll area -->
  <div class="app-layout-drawer-scroll">
    <!-- Drawer logo -->
    <div id="logo" class="drawer-header">
      <a href="index.html"><img class="img-responsive" src="{{ asset('img/logo/logo-backend.png') }}" title="AppUI" alt="AppUI" /></a>
    </div>

    <!-- Drawer navigation -->
    <nav class="drawer-main">
      <ul class="nav nav-drawer">

        <li class="nav-item nav-drawer-header">Apps</li>

        <li class="nav-item active">
          <a href="/home"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
        </li>

        <li class="nav-item">
          <a href="/catatan"><i class="ion-android-document"></i>Catatan</a>
        </li>

        <li class="nav-item nav-item-has-subnav">
          <a href="javascript:void(0)"><i class="ion-android-add-circle"></i>Register Bayi</a>
          <ul class="nav nav-subnav">

            <li>
              <a href="/register-bayi">0 - 11 Bulan</a>
            </li>

            <li>
              <a href="base_ui_cards.html">12 - 23 Bulan</a>
            </li>

            <li>
              <a href="base_ui_cards_api.html">24 - 35 Bulan</a>
            </li>

            <li>
              <a href="base_ui_cards_api.html">36 - 47 Bulan</a>
            </li>

            <li>
              <a href="base_ui_cards_api.html">48 - 59 Bulan</a>
            </li>

          </ul>
        </li>

        <li class="nav-item">
          <a href="/register-wuspus"><i class="ion-android-add-circle"></i>Register Wuspus</a>
        </li>

        <li class="nav-item">
          <a href="javascript:void(0)"><i class="ion-android-add-circle"></i>Register Ibu Hamil</a>
        </li>
                
        <li class="nav-item nav-item-has-subnav">
          <a href="javascript:void(0)"><i class="ion-android-document"></i>Pengisian Data Posyandu</a>
          <ul class="nav nav-subnav">
            <li>
              <a href="/Pengunjung-balita-0-12bulan">Pengunjung Balita 0 - 12 Bulan</a>
            </li>

            <li>
              <a href="/Pengunjung-balita-1-5tahun">Pengunjung Balita 1 - 5 Tahun</a>
            </li>

            <li>
              <a href="/Pengunjung-ibu">Pengunjung Ibu</a>
            </li>

            <li>
              <a href="/Absensi-kader-pkk">Absensi Kader PKK</a>
            </li>
            <li>
              <a href="/Absensi-kader-posy">Absensi Kader Possy</a>
            </li>
            <li>
              <a href="/Absensi-plkb">Absensi PLKB</a>
            </li>
            <li>
              <a href="/Absensi-medisparamedis">Absensi Medis/Paramedis</a>
            </li>

            <li>
              <a href="/jumlahbayi-lahir">Bayi yang Lahir</a>
            </li><li>
              <a href="/jumlahbayi-meninggal">Bayi yang Meninggal</a>
            </li>

          </ul>
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
        </li>

      </ul>
    </nav>
    <!-- End drawer navigation -->

    <div class="drawer-footer">
      <!-- Footer Drawe -->
    </div>
  </div>
</aside>
