<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/animations.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.css">
	<link rel="stylesheet" href="/assets/css/main.css" class="color-switcher-link">
	<script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="/assets/js/vendor/html5shiv.min.js"></script>
		<script src="/assets/js/vendor/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->

			<section class="page_topline ls s-borderbottom c-my-5">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-6 text-md- text-center">
							<ul class="top-includes">
								<li>
									<a href="/"><?=lang("App.header_indvidual_tab")?></a>
								</li>
								<li>
									<b> |									</b>
								</li>
								<li>
											<a href="/"><?=lang("App.header_corporate_tab")?></a>
								</li>
							</ul>
						</div>



						<div class="col-md-6 text-center text-md- d-none d-md-block">


							<ul class="top-includes">
							    <a href="lang/az"><img width="20" height="20" src="/assets/img/az.png"></a>
							    <a href="lang/ru"><img width="20" height="20" src="/assets/img/ru.png"></a>
							    <a href="lang/en"><img width="20" height="20" src="/assets/img/en.png"></a>
							</ul>
						</div>
					</div>
				</div>
			</section>

<section class="page_copyright ds s-py-10 copyright-bg">

			</section>
			<!--eof topline-->			<div class="header_absolute header_layout_1">
				<!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
                <header class="page_header ls justify-nav-end affix-top">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-4 col-md-5 col-4">
								<a href="/" class="logo">
									<img src="/assets/img/logo.png">
								</a>
							</div>
							<div class="col-xl-9 col-lg-8 col-md-7 col-1">
								<div class="nav-wrap">

									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
											<li class="active">
												<a href="/"><?=lang("App.main_page_button")?></a>
											</li>

											<li>
												<a href="/internet"><?=lang("App.internet_page_button")?></a>
                                            </li>

											<li>
												<a href="/tv"><?=lang("App.tv_page_button")?></a>
											</li>

                                            <li>
                                                <a href="#"><?=lang("App.services_page_button")?></a>
                                                <ul>
                                                    <li>
                                                        <a href="/security-systems">Системы безопастности</a>
                                                    </li>
                                                    <li>
                                                        <a href="/telephony">Телефония</a>
                                                    </li>
                                                    <li>
                                                        <a href="/intercom">Домофония</a>
                                                    </li>
                                                    <li>
                                                        <a href="/it-services">İT Оутсорсинг</a>
                                                    </li>
                                                    <li>
                                                        <a href="/it-services">Хостинг сайтов</a>
                                                    </li>
                                                </ul>
                                            </li>

											<li>
												<a href="/about"><?=lang("App.about_page_button")?></a>
											</li>

											<li>
												<a href="/contact"><?=lang("App.contact_page_button")?></a>
											</li>



										</ul>


									</nav>
									<!-- eof main nav -->
								</div>
							</div>
						</div>
					</div>
					<span class="toggle_menu"><span></span></span>
				</header>
								<div class="page_header_wrapper main-header-side">
				<!--	<div class="page_header_side header_slide header_side_right aaaa ls">
						<span class="toggle_menu toggle_menu_side header-slide"><span></span></span>
						<div class="scrollbar-macosx">
							<div class="side_header_inner">
								<div class="header-side-menu">
								--	 main side nav start --
									<nav class="mainmenu_side_wrapper">
										<ul class="nav menu-click">
											<li>
												<a href="/faq">
													<i class="color-main7 fa fa-question-circle"></i>
                                                    <?=lang("App.faq_page_button")?>
												</a>
											</li>
                                            <li>
                                                <a href="/terms_of_use">
                                                    <i class="color-main7 fa fa-rocket"></i>
                                                    Terms Of Use
                                                </a>
                                            </li>
										</ul>
									</nav>
									-- eof main side nav --


								</div>
							</div>
						</div>
					</div>-->
				</div>
			</div>
