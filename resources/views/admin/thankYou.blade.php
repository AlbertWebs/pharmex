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
                    <h5 class="font-14 m-0 fw-bold"> {{Auth::User()->name}}</h5>
               <p class="opacity-50 mb-0">{{Auth::User()->email}}</p>
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
            @include('admin.sidebar')
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

                {{--  --}}
                <div class="page-content bg-light">
                    <section class="content-inner-1">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10 col-md-12">
                                    <div class="error-page style-1">
                                        <div class="dz-error-media">
                                            <img src="{{asset('theme/images/confirmation.png')}}" alt="">
                                        </div>
                                        <div class="error-inner">
                                            <h1 class="dz_error">Thank You</h1>
                                            <p class="error-head">Thank You For Your Order, We will contact you soon.</p>
                                            <a href="{{url('/')}}/admin-panel" class="btn btn-secondary  text-uppercase">Go to Dashboard</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div id="feedback-main">
                                <div id="feedback-div">
                                    <form action="contact.php" method="post" class="form" id="feedback-form1" name="form1" enctype="multipart/form-data">

                                        <p class="name">
                                            <input name="name" type="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" required placeholder="Name" id="feedback-name" />
                                        </p>

                                            <p class="email">
                                                <input name="email" type="email"       class="validate[required,custom[email]] feedback-input" id="feedback-email" placeholder="Email" required />
                                            </p>

                                            <p class="text">
                                                <textarea name="comment" type="comment" class="validate[required,length[6,300]] feedback-input" id="feedback-comment" required placeholder="Feedback goes here"></textarea>
                                            </p>

                                            <div class="feedback-submit">
                                                <input type="submit" value="SEND" id="feedback-button-blue"/>
                                                <div class="feedback-ease"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            {{--  --}}
                        </div>
                    </section>

                </div>
                {{--  --}}

                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Drenla Hub</span>
                </footer>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

html{background:#2F3238; }

.feedback-button {height:40px; border:solid 3px #CCCCCC; background:#333; width:100px; line-height:32px; -webkit-transform:rotate(-90deg); font-weight:600; color:white; transform:rotate(-90deg);  -ms-transform:rotate(-90deg);  -moz-transform:rotate(-90deg); text-align:center; font-size:17px; position:fixed; right:-40px; top:45%; font-family: "Roboto", helvetica, arial, sans-serif; z-index:999; }

#feedback-main{
display:none;
	float:left;
	padding-top:0px;
}

#feedback-div {
	background-color:rgba(72,72,72,0.4);
	padding-left:35px;
	padding-right:35px;
	padding-top:35px;
	padding-bottom:50px;
	width: 450px;
	float: left;
	left: 50%;
	position: absolute;
  margin-top:30px;
	margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}

.feedback-input {
	color:#3c3c3c;
	font-family: "Roboto", helvetica, arial, sans-serif;
  font-weight:500;
	font-size: 18px;
	border-radius: 0;
	line-height: 22px;
	background-color: #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	width:100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
}

.feedback-input:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #3498db;
	color: #3498db;
	outline: none;
  padding: 13px 13px 13px 54px;
}

/* Icons ---------------------------------- */
#feedback-name{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#feedback-name:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#feedback-email{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#feedback-email:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#feedback-comment{
	background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#feedback-comment {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
}

input:hover, #feedback-comment:hover, input:focus, #feedback-comment:focus {
	background-color:white;
}

#feedback-button-blue{
	font-family: "Roboto", helvetica, arial, sans-serif;
	float:left;
	width: 100%;
	border: #fbfbfb solid 4px;
	cursor:pointer;
	background-color: #3498db;
	color:white;
	font-size:24px;
	padding-top:22px;
	padding-bottom:22px;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

#feedback-button-blue:hover{
	background-color: rgba(0,0,0,0);
	color: #0493bd;
}

.feedback-button-blue:hover {
	color: #3498db;
}

.feedback-ease {
	width: 0px;
	height: 74px;
	background-color: #fbfbfb;
	-webkit-transition: .3s ease;
	-moz-transition: .3s ease;
	-o-transition: .3s ease;
	-ms-transition: .3s ease;
	transition: .3s ease;
}

.feedback-submit:hover .feedback-ease{
  width:100%;
  background-color:white;
}

@media only screen and (max-width: 580px) {
	#feedback-div{
		left: 3%;
		margin-right: 3%;
		width: 88%;
		margin-left: 0;
		padding-left: 3%;
		padding-right: 3%;
	}
}
        </style>





  <button id="popup" class="feedback-button" onclick="toggle_visibility()">Feedback</button>

    <script>
        function toggle_visibility() {
            var e = document.getElementById('feedback-main');
            if(e.style.display == 'block')
            e.style.display = 'none';
            else
            e.style.display = 'block';
        }
    </script>

        <script src="{{asset('admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/analytics-index.init.js')}}"></script>

        <script src="{{asset('admin/assets/plugins/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/form-editor.init.js')}}"></script>

        <script src="{{asset('admin/assets/pages/file-upload.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
    <!--end body-->
</html>
