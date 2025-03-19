<li class="menu-label mt-0 text-primary font-12 fw-semibold">A<span>dmin</span><br><span class="font-10 text-secondary fw-normal">Admin Module</span></li>
<li class="nav-item">
    <a class="nav-link" href="{{url('/')}}/admin-panel" >
        <i class="ti ti-home menu-icon"></i>
        <span>Dashboard</span>
    </a>
</li><!--end nav-item-->

{{-- <li class="nav-item">
    <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarAnalytics">
        <i class="ti ti-stack menu-icon"></i>
        <span>Categories</span>
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
</li><!--end nav-item--> --}}


{{-- <li class="nav-item">
    <a class="nav-link" href="#sidebarAnalyticss" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarAnalyticss">
        <i class="ti ti-stack menu-icon"></i>
        <span>Properties</span>
    </a>
    <div class="collapse " id="sidebarAnalyticss">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('strength')}}">Strength</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a href="{{route('dosage')}}" class="nav-link ">Dosage</a>
            </li><!--end nav-item-->

        </ul><!--end nav-->
    </div><!--end sidebarAnalytics-->
</li><!--end nav-item--> --}}



<li class="nav-item">
    <a class="nav-link" href="#sidebarCart" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarCart">
        <i class="ti ti-shopping-cart menu-icon"></i>
        <?php $PendingOrders = \App\Models\orders::where('status','pending')->count(); ?>
        <span>Medicine Requests  @if($PendingOrders =="0") @else <small class="text-danger">({{$PendingOrders}})</small> @endif </span>
    </a>
    <div class="collapse " id="sidebarCart">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{route('all-orders')}}">Process Requests</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div><!--end sidebarCart-->
</li><!--end nav-item-->


<li class="nav-item">
    <a class="nav-link" href="{{route('vendors')}}">
        <i class="ti ti-user menu-icon"></i>
        <span>Pharmacies</span>
    </a>
</li><!--end nav-item-->
<?php $PendingListing = \App\Models\Product::where('status','0')->count(); ?>
<li class="nav-item">
    <a class="nav-link" href="{{route('all-products')}}">
        <i class="ti ti-check menu-icon"></i>
        <span>Approve Listing @if($PendingListing =="0") @else <small class="text-danger">({{$PendingListing}})</small> @endif</span>
    </a>
</li><!--end nav-item-->

<li class="nav-item">
    <a class="nav-link" href="{{route('add-admin')}}">
        <i class="ti ti-user menu-icon"></i>
        <span>Add Admins</span>
    </a>
</li><!--end nav-item-->


