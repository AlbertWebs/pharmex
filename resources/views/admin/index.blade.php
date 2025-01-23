<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8" />
                <title>Pharmex - Admin & Dashboard</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">



         <!-- App css -->
         <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body id="body" class="dark-sidebar">
        <!-- leftbar-tab-menu -->
        <div class="left-sidebar">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{asset('admin/assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{asset('admin/assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <div class="sidebar-user-pro media border-end">
                <div class="position-relative mx-auto">
                    <img src="{{asset('admin/assets/images/users/user-1.jpg')}}" alt="user" class="rounded-circle thumb-md">
                    <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                </div>
                <div class="media-body ms-2 user-detail align-self-center">
                    <h5 class="font-14 m-0 fw-bold">Dr. Bevin Likuyani </h5>
                    <p class="opacity-50 mb-0">bevin@pharmex.com</p>
                </div>
            </div>
            <div class="border-end">
                <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab" aria-selected="true">M<span>ain</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Extra" role="tab" aria-selected="false">E<span>xtra</span></a>
                    </li>
                </ul>
            </div>
            <!-- Tab panes -->

            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <div class="menu-body navbar-vertical">
                    <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                        <!-- Navigation -->
                        <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>ain</span><br><span class="font-10 text-secondary fw-normal">Unique Dashboard</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAnalytics">
                                    <i class="ti ti-stack menu-icon"></i>
                                    <span>Analytics</span>
                                </a>
                                <div class="collapse " id="sidebarAnalytics">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="analytics-customers.html" class="nav-link ">Customers</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAnalytics-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCrypto">
                                    <i class="ti ti-currency-bitcoin menu-icon"></i>
                                    <span>Crypto</span>
                                </a>
                                <div class="collapse " id="sidebarCrypto">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-index.html">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-exchange.html">Exchange</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-wallet.html">Wallet</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-news.html">Crypto News</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-ico.html">ICO List</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="crypto-settings.html">Settings</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarCrypto-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProjects">
                                    <i class="ti ti-brand-asana menu-icon"></i>
                                    <span>Projects</span>
                                </a>
                                <div class="collapse " id="sidebarProjects">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-index.html">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-clients.html">Clients</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-team.html">Team</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-project.html">Project</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-task.html">Task</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-kanban-board.html">Kanban Board</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-chat.html">Chat</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-users.html">Users</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-create.html">Project Create</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarProjects-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEcommerce">
                                    <i class="ti ti-shopping-cart menu-icon"></i>
                                    <span>Ecommerce</span>
                                </a>
                                <div class="collapse " id="sidebarEcommerce">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-index.html">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-products.html">Products</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-list.html">Product List</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-detail.html">Product Detail</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-cart.html">Cart</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-checkout.html">Checkout</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEcommerce-->
                            </li><!--end nav-item-->

                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">A<span>pps</span><br><span class="font-10 text-secondary fw-normal">Morder Applications</span></li>

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmail">
                                    <i class="ti ti-mail menu-icon"></i>
                                    <span>Email</span>
                                </a>
                                <div class="collapse " id="sidebarEmail">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-email-inbox.html">Inbox</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-email-read.html">Read Email</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmail-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="apps-chat.html"><i class="ti ti-brand-hipchat menu-icon"></i><span>Chat</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="apps-contact-list.html"><i class="ti ti-headphones menu-icon"></i><span>Contact List</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="apps-calendar.html"><i class="ti ti-calendar menu-icon"></i><span>Calendar</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="apps-invoice.html"><i class="ti ti-file-invoice menu-icon"></i><span>Invoice</span></a>
                            </li><!--end nav-item-->
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">C<span>omponents</span><br><span class="font-10 text-secondary fw-normal">Bootstrap & Custom</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarElements">
                                    <i class="ti ti-planet menu-icon"></i>
                                <span>UI Elements</span>
                                </a>
                                <div class="collapse " id="sidebarElements">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-alerts.html">Alerts</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-avatar.html">Avatar</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-badges.html">Badges</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-cards.html">Cards</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-carousels.html">Carousels</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-grids.html">Grids</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-images.html">Images</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-list.html">List</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-modals.html">Modals</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-navs.html">Navs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-navbar.html">Navbar</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-paginations.html">Paginations</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-progress.html">Progress</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-typography.html">Typography</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-videos.html">Videos</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarElements-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                    <i class="ti ti-chart-bubble menu-icon"></i>
                                    <span>Advanced UI</span>
                                </a>
                                <div class="collapse " id="sidebarAdvancedUI">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-animation.html">Animation</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-clipboard.html">Clip Board</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-dragula.html">Dragula</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-files.html">File Manager</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-highlight.html">Highlight</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-rangeslider.html">Range Slider</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-ratings.html">Ratings</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-ribbons.html">Ribbons</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-sweetalerts.html">Sweet Alerts</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-toasts.html">Toasts</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAdvancedUI-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarForms">
                                    <i class="ti ti-forms menu-icon"></i>
                                    <span>Forms</span>
                                </a>
                                <div class="collapse " id="sidebarForms">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-elements.html">Basic Elements</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-validation.html">Validation</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-wizard.html">Wizard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-editors.html">Editors</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-uploads.html">File Upload</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-img-crop.html">Image Crop</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarForms-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCharts">
                                    <i class="ti ti-chart-donut menu-icon"></i>
                                <span>Charts</span>
                                </a>
                                <div class="collapse " id="sidebarCharts">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-apex.html">Apex</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-justgage.html">JustGage</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-chartjs.html">Chartjs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-toast-ui.html">Toast</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarCharts-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTables">
                                    <i class="ti ti-table menu-icon"></i>
                                    <span>Tables</span>
                                </a>
                                <div class="collapse " id="sidebarTables">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-basic.html">Basic</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-datatable.html">Datatables</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-editable.html">Editable</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarTables-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarIcons">
                                    <i class="ti ti-parachute menu-icon"></i>
                                <span>Icons</span>
                                </a>
                                <div class="collapse " id="sidebarIcons">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-materialdesign.html">Material Design</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-fontawesome.html">Font awesome</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-tabler.html">Tabler</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-feather.html">Feather</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarIcons-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarMaps">
                                    <i class="ti ti-map menu-icon"></i>
                                    <span>Maps</span>
                                </a>
                                <div class="collapse " id="sidebarMaps">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-google.html">Google Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-leaflet.html">Leaflet Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-vector.html">Vector Maps</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarMaps-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                    <i class="ti ti-target menu-icon"></i>
                                    <span>Email Templates</span>
                                </a>
                                <div class="collapse " id="sidebarEmailTemplates">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-basic.html">Basic Action Email</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-alert.html">Alert Email</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-billing.html">Billing Email</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarEmailTemplates-->
                            </li><!--end nav-item-->
                            <li class="menu-label mt-0 text-primary font-12 fw-semibold">C<span>rafted</span><br><span class="font-10 text-secondary fw-normal">Unique Extra Pages</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ti ti-file-diff menu-icon"></i>
                                    <span>Pages</span>
                                </a>
                                <div class="collapse " id="sidebarPages">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            <a class="nav-link" href="pages-profile.html">Profile</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-tour.html">Tour</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-timeline.html">Timeline</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-treeview.html">Treeview</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-starter.html">Starter Page</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-pricing.html">Pricing</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-blogs.html">Blogs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-faq.html">FAQs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-gallery.html">Gallery</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarPages-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAuthentication">
                                    <i class="ti ti-shield-lock menu-icon"></i>
                                    <span>Authentication</span>
                                </a>
                                <div class="collapse " id="sidebarAuthentication">
                                    <ul class="nav flex-column">
                                       <li class="nav-item">
                                            <a class="nav-link" href="auth-login.html">Log in</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-register.html">Register</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-404.html">Error 404</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-500.html">Error 500</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAuthentication-->
                            </li><!--end nav-item-->
                        </ul>
                        <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                            <li>
                                <div class="update-msg text-center position-relative">
                                    <button type="button" class="btn-close position-absolute end-0 me-2" aria-label="Close"></button>
                                    <img src="{{asset('admin/assets/images/speaker-light.png')}}" alt="" class="" height="110">
                                    <h5 class="mt-0">Mannat Themes</h5>
                                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                                </div>
                            </li>
                        </ul><!--end navbar-nav--->
                    </div><!--end sidebarCollapse-->
                </div>
            </div>
        </div>
        <!-- end left-sidenav-->
        <!-- end leftbar-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
        @include('admin.topbar')
        <!-- Top Bar End -->
        <!-- Top Bar End -->

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Pharmex</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Analytics</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Analytics</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-md-12 col-lg-3 order-lg-1 order-md-2 order-sm-2">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="pt-3">
                                        <h3 class="text-dark text-center font-24 fw-bold line-height-lg">Pharmex
                                        <br>Data Safety CronJobs</h3>
                                        <div class="text-center text-muted font-16 fw-bold pt-3 pb-1">Your Data is Safe We Make Daily Backups</div>

                                        <div class="text-center py-3 mb-3">
                                            <a href="#" class="btn btn-primary">Backup Now!</a>
                                        </div>
                                        <img src="{{asset('admin/assets/images/small/business.png')}}" alt="" class="img-fluid px-3 mb-2">
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg-9 order-lg-2 order-md-1 order-sm-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-users font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_1" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">24000</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Sessions</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-clock font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-auto ms-auto align-self-center">
                                                    <span class="badge badge-soft-success px-2 py-1 font-11">Active</span>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_2" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">00:18</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Avg.Sessions</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-activity font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_3" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">$2400</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Bounce Rate</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->

                                <div class="col-lg-3 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="row d-flex">
                                                <div class="col-3">
                                                    <i class="ti ti-confetti font-36 align-self-center text-dark"></i>
                                                </div><!--end col-->
                                                <div class="col-auto ms-auto align-self-center">
                                                    <span class="badge badge-soft-danger px-2 py-1 font-11">-2%</span>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <div id="dash_spark_4" class="mb-3"></div>
                                                </div><!--end col-->
                                                <div class="col-12 ms-auto align-self-center">
                                                    <h3 class="text-dark my-0 font-22 fw-bold">85000</h3>
                                                    <p class="text-muted mb-0 fw-semibold">Goal Completions</p>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div> <!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h4 class="card-title">Audience Overview</h4>
                                                </div><!--end col-->
                                                <div class="col-auto">
                                                    <div class="dropdown">
                                                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                           This Year<i class="las la-angle-down ms-1"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Today</a>
                                                            <a class="dropdown-item" href="#">Last Week</a>
                                                            <a class="dropdown-item" href="#">Last Month</a>
                                                            <a class="dropdown-item" href="#">This Year</a>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                            </div>  <!--end row-->
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div class="">
                                                <div id="ana_dash_1" class="apex-charts"></div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->


                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->

                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Pharmex <span class="text-muted d-none d-sm-inline-block float-end">MVP Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Drenla Hub</span>
                </footer>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->

        <script src="{{asset('admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/analytics-index.init.js')}}"></script>


        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
    <!--end body-->
</html>
