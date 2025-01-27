 <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>erchants</span><br><span class="font-10 text-secondary fw-normal">Merchant Module</span></li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarEmail">
                            <i class="ti ti-database menu-icon"></i>
                            <span>Products</span>
                        </a>
                        <div class="collapse " id="sidebarEmail">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('addProduct')}}">Add Products</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('products')}}">All Products</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarEmail-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('vendors')}}">
                            <i class="ti ti-user menu-icon"></i>
                            <span>Vendors</span>
                        </a>
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrders">
                            <i class="ti ti-shopping-cart menu-icon"></i>
                            <span>Orders</span>
                        </a>
                        <div class="collapse " id="sidebarOrders">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('orders')}}">All Orders</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarEmail-->
                    </li><!--end nav-item-->

