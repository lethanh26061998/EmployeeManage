<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Quan ly nhan vien</title>
		<meta name="keywords" content="Admin" />
		<meta name="description" content="Admin Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">

        <!-- Head Libs -->
		<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>



	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="header-left" >
                    <div class="logo" style="margin: 0px">
                        <img class="app-sidebar__user-avatar" src="{{ asset('images/rik.jpg') }}" >
					{{-- <b><h3 style="margin: 18px 15px 15px 22px ">TRANG QUẢN TRỊ</h3></b> --}}
                    </div>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">
					{{-- <form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form> --}}

					<span class="separator"></span>
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">

                            <i class="fa fa-user-circle" aria-hidden="true"></i>
							<div class="profile-info"  >
								<span class="name"><b>Quản trị viên  {{Auth::user()->name}}</b></span>
								{{-- <span class="role" style="text-align:center"><b>{{$user->name}}</b></span> --}}
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								{{-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                                </li> --}}
								<li>
									<a role="menuitem" tabindex="-1" href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
					<div class="sidebar-header" >
                        <div class="sidebar-title" style="color: white; padding: 20px">
							<b><span>Trang quản trị viên</span></b>
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
                                    <br>

									<li class="nav-active">
										<a href="{{route('admin')}}">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Trang chủ</span>
										</a>
									</li>

									{{-- <li class="nav">
										<a href="editUser/{{ Auth::user()->id }}">
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>Quản lý tài khoản</span>
										</a>
									</li> --}}
									<li class="nav-parent">
                                            <a>
                                                <i class="fa fa-users" aria-hidden="true"></i>
                                                <span>Quản lý nhân viên</span>
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                     <a href={{route('addAccount')}}>
                                                         Tạo tài khoản mới

                                                     </a>
                                                </li>
                                                <li>
                                                    <a href={{route('users')}}>
                                                         Danh sách nhân viên
                                                    </a>
                                                </li>
                                                {{-- <li>
                                                    <a href={{route('users')}}>
                                                       Reset Password
                                                    </a>
                                               </li> --}}
                                            </ul>
                                        </li>
                                    <li class="nav-parent">
                                            <a>
                                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                                <span>Quản lý phòng ban</span>
                                            </a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a href={{route('addPhongban')}}>
                                                         Thêm phòng ban
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href={{route('getPhongban')}}>
                                                         Danh sách phòng ban
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
								</ul>
							</nav>

							<hr class="separator" />

							<hr class="separator" />

						</div>

					</div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
                        <header class="page-header">
                                <h2></h2>

                                <div class="right-wrapper pull-right">
                                    <ol class="breadcrumbs">
                                        <li>
                                            <a href={{route('admin')}}>
                                                <i class="fa fa-home"></i>
                                            </a>
                                        </li>
                                        <li><span>Quản lý tài khoản</span></li>
                                        <li><span></span></li>
                                    </ol>

                                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                                </div>
                            </header>
                    <!-- start: page -->

                        <div class="row">
                                <div class="">
                                        <div style="text-align:center"
                                        @if (session()->has('Reset pw thành công'))
                                           <div class="alert alert-info">
                                           {{session()->get('Reset pw thành công')}}</div>
                                       @endif
                                   </div>
                                   <div style="text-align:center"
                                   @if (session()->has('mail_message'))
                                      <div class="alert alert-info">
                                      {{session()->get('mail_message')}}</div>
                                  @endif
                              </div>
                                        @yield('content')
                                </div>
                            </div>
    <!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Calender</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</section>


		<!-- Vendor -->
		<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

		<!-- Specific Page Vendor -->
		<script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets/javascripts/theme.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('assets/javascripts/theme.custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/javascripts/theme.init.js') }}"></script>


		<!-- Examples -->
		<script src="{{ asset('assets/javascripts/forms/examples.validation.js') }}"></script>
	</body>
</html>
