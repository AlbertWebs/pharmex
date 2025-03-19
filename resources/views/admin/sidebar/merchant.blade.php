 <li class="menu-label mt-0 text-primary font-12 fw-semibold">P<span>harmacy</span><br><span class="font-10 text-secondary fw-normal">Pharmacy Module</span></li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarEmail">
                            <i class="ti ti-database menu-icon"></i>
                            <span>Products</span>
                        </a>
                        <div class="collapse " id="sidebarEmail">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('addProduct')}}">Add Medicine</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('addProductUpload')}}">Upload Sheet Medicine</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('add_expired')}}">Add Expired Medicine</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('products')}}">All Medicines</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarEmail-->
                    </li><!--end nav-item-->



                    <li class="nav-item">
                        {{-- <a class="nav-link" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrders">
                            <i class="ti ti-shopping-cart menu-icon"></i>
                            <span>Orders</span>
                        </a> --}}
                        <div class="collapse " id="sidebarOrders">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a onclick="alert('Work in Progress')" class="nav-link" href="{{route('orders')}}">All Orders</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarEmail-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarOrdersListedProducts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrdersListedProducts">
                            <i class="ti ti-folder menu-icon"></i>
                            <span>Approved Medicines</span>

                        </a>
                        <div class="collapse " id="sidebarOrdersListedProducts">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('listed-products')}}">Request Medicine</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarEmail-->
                    </li><!--end nav-item-->

