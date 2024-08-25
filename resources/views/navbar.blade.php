<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style='background-color:#202124;'>
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="{{ url('/') }}">
HotelCA
    </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/galery') }}">Galary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/reserv') }}">Reservation</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">

      <!-- login --><a href="{{ url('/login') }}">
      <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2" id='loginbtn'>
          Login
        </button></a>

      <!-- Avatar style="display:none;" 
    document.getElementById( 'loginbtn' ).style.display = 'none';

    (function(){
    //Bunch of code...
})();
    -->
      <div class="dropdown" id='loginavatar'>
        <a
          data-mdb-dropdown-init
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          aria-expanded="false"
        >
          <img
            src="{{ asset('styles/img/2.webp') }}"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="{{ url('/update') }}">Update my profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->