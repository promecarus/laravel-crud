<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>{{ 'LaraCRUD' . (isset($title) ? " | ${title}" : '') }}</title>
	@yield('style')
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background: lightgray">
	@yield('content')
	@yield('script')
</body>

</html>
