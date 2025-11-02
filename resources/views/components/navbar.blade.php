@if (Auth::check())
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            </a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <p class="mb-0 d-none d-sm-block navbar-profile-name">
                    Hai, {{ Auth::user()->nama }}
                </p>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>
        </div>
    </nav>
@else
<nav class="navbar p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex align-items-center justify-content-start px-3">
    <button class="navbar-toggler navbar-toggler align-self-center me-2" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>

    
  </div>
</nav>
@endif
