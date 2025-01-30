<li class="menu-label mt-0 text-primary font-12 fw-semibold">S<span>ettings</span><br><span class="font-10 text-secondary fw-normal">System Settings</span></li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
    onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
        <i class="ti ti-logout menu-icon"></i>
        <span>Logout</span>
    </a>
</li><!--end nav-item-->
<li class="nav-item">
    <a class="nav-link" href="{{route('mysettings')}}">
        <i class="ti ti-ti ti-settings ti-spin menu-icon"></i>
        <span>My Settingss</span>
    </a>
</li><!--end nav-item-->
<li class="nav-item">
    <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarAuthentication">
        <i class="ti ti-shield-lock menu-icon"></i>
        <span>Security Settings</span>
    </a>
    <div class="collapse " id="sidebarAuthentication">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">2FA</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="auth-register.html">Change Password</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div><!--end sidebarAuthentication-->
</li><!--end nav-item-->


{{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

</div> --}}

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
