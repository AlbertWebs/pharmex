<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Pharmex - Admin & Dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">
      <!-- App css -->
      <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
         (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/5d9b3223db28311764d7a9e8/1ilbnp44e';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
         })();
      </script>
      <!--End of Tawk.to Script-->
   </head>
   <body id="body" class="dark-sidebar">
      <!-- leftbar-tab-menu -->

      <div class="page-wrapper text-center" style="margin:0 auto">

         <!-- Page Content-->
         <div class="page-content-tab">
            <div class="container-fluid">

               {{-- Dashboard Metrix --}}

                    <!-- Log In page -->
                    <div class="container-md">
                        <div class="row vh-100s d-flex justify-content-center">
                            <div class="col-12 align-self-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5 mx-auto">
                                            {{--  --}}
                                            <div class="bg_color_1">
                                                <div class="container margin_80_55" style="min-height:550px;">

                                                    {!!html_entity_decode($iframe)!!}

                                                </div>
                                                <!--/container-->
                                            </div>
                                            <!--/bg_color_1-->
                                            {{--  --}}
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->


            </div>

            <footer class="footer text-center text-sm-start">
               &copy; <script>
                  document.write(new Date().getFullYear())
               </script> Pharmex <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
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
