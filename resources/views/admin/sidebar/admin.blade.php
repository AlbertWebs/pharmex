<li class="menu-label mt-0 text-primary font-12 fw-semibold">A<span>dmin</span><br><span class="font-10 text-secondary fw-normal">Admin Module</span></li>
<li class="nav-item">
    <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarAnalytics">
        <i class="ti ti-stack menu-icon"></i>
        <span>Product Categories</span>
    </a>
    <div class="collapse " id="sidebarAnalytics">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('add-category')}}">Add Categories</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a href="{{route('add-category')}}" class="nav-link ">All Categories</a>
            </li><!--end nav-item-->

        </ul><!--end nav-->
    </div><!--end sidebarAnalytics-->
</li><!--end nav-item-->

<li class="nav-item">
    <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarCrypto">
        <i class="ti ti-stack menu-icon"></i>
        <span>Brands</span>
    </a>
    <div class="collapse " id="sidebarCrypto">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('add-brand')}}">Add Brand</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{route('add-brand')}}">All Brands</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div><!--end sidebarCrypto-->
</li><!--end nav-item-->

<li class="nav-item">
    <a class="nav-link" href="#sidebarCart" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarCart">
        <i class="ti ti-shopping-cart menu-icon"></i>
        <span>Exchanges</span>
    </a>
    <div class="collapse " id="sidebarCart">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">All Orders</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="#">Completed Orders</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div><!--end sidebarCart-->
</li><!--end nav-item-->


<li class="nav-item">
    <a class="nav-link" href="{{route('vendors')}}">
        <i class="ti ti-user menu-icon"></i>
        <span>Vendors</span>
    </a>
</li><!--end nav-item-->
