<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="@get.settings.site.tagline">
	<meta name="author" content="Cartalyst LLC">
	<meta name="base_url" content="{{ url() }}">
	<meta name="admin_url" content="{{ URL::to_secure(ADMIN) }}">

	<!-- Page Title -->
	<title>
		@yield('title')
	</title>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Queue Styles -->
	{{ Theme::queue_asset('style', 'css/style.less') }}
 	{{ Theme::asset('css/font-awesome.css') }}
	<!-- Release Styles -->
	{{ Theme::release_assets('styles') }}

	<!-- Styles -->
	@yield('styles')

	<!-- Apply Style Options -->
	@widget('platform.themes::options.css')

	<link rel="shortcut icon" href="{{ Theme::asset('img/favicon.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ Theme::asset('img/apple-touch-icon-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ Theme::asset('img/apple-touch-icon-72x72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ Theme::asset('img/apple-touch-icon-114x114-precomposed.png') }}">

</head>
<body>

	<!-- main menu -->
	<div class="main-menu">
		@widget('platform.menus::menus.nav', 'main', 1, 'nav nav-pills')
	</div>

	<div id="base" class="grid">



		<header class="rows">
			<div class="brand">
				<a href="{{ URL::to_secure(ADMIN) }}">
					<img src="{{ Theme::asset('img/brand.png') }}" title="Cartalyst">
				</a>
			</div>
			<div class="about">
				<h1>@get.settings.site.title</h1>
				<p class="lead">@get.settings.site.tagline</p>
			</div>

			<div class="wrapper">
				<div class="navigation">
					@widget('platform.menus::menus.nav', 'admin', 1, 'nav nav-tabs', ADMIN)
				</div>
			</div>
		</header>

		<div id="page" class="rows expand">
			<div id="inside" class="grid wrapper">
				<div class="navigation column left-nav">
					@widget('platform.menus::menus.nav', 1, 2, 'nav nav-stacked nav-pills', ADMIN)
				</div>

				<div class="content column expand">
					<div class="container">
						@widget('platform.application::messages.all')
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		<div id="footer" class="rows">
			<div class="wrapper clearfix">
				<div class="brand">
					<a href="{{ URL::to_secure(ADMIN) }}">
						<img src="{{ Theme::asset('img/brand-footer.png') }}" title="Cartalyst">
					</a>
				</div>
				<div class="legal">
					<p class="copyright">Created, developed, and designed by <a href="http://twitter.com/#!/Cartalyst">@Cartalyst</a></p>
					<p class="licence">The BSD 3-Clause License - Copyright (c) 2011-2012, Cartalyst LLC</p>
				</div>
			</div>
		</div>
	</div>

<!-- Queue Scripts -->
{{ Theme::queue_asset('jquery', 'js/jquery-1.7.2.min.js') }}
{{ Theme::queue_asset('admin', 'js/admin.js') }}
{{ Theme::queue_asset('url', 'js/url.js') }}

<!-- Release Scripts -->
{{ Theme::release_assets('scripts') }}

<!-- Scripts -->
@yield('scripts')

</body>
</html>
