    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">

                    @if(Auth::User()->type == "1" || Auth::User()->type == "admin")

                        @include('admin.sidebar.admin')
                        @include('admin.sidebar.merchant')
                        @include('admin.sidebar.landing')
                        @include('admin.sidebar.reports')
                        @include('admin.sidebar.payments')
                        @include('admin.sidebar.settings')
                    @else
                        {{-- @include('admin.sidebar.admin') --}}
                        @include('admin.sidebar.merchant')
                        {{-- @include('admin.sidebar.landing') --}}
                        @include('admin.sidebar.mysettings')
                    @endif

                </ul>
                <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                    <li>
                        <div class="update-msg text-center position-relative">
                            <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                            <img src="{{asset('admin/assets/images/speaker-light.png')}}" alt="" class="" height="110">
                            <h5 class="mt-0">Pharmex Concept</h5>
                            <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                            <a href="{{url('/')}}" class="btn btn-outline-warning btn-sm">Check MVP</a>
                        </div>
                    </li>
                </ul><!--end navbar-nav--->
            </div><!--end sidebarCollapse-->
        </div>
    </div>
