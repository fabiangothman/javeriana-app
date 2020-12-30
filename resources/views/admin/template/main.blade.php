<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>
	<header>
		@include('admin.template.partials.nav')
	</header>

	<section>
		@include('flash::message')
		@include('admin.template.partials.errors')
		@yield('content', 'No hay contenido')
	</section>

	<footer>
		@include('admin.template.partials.footer')
	</footer>

	<script type="text/javascript" src="{{ asset('plugins/jquery/js/jquery-2.2.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>