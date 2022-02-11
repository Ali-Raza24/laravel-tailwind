<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@include('layouts.head')
</head>
<body>

@include('layouts.navbar')

@yield('content')

@include('layouts.footer')

@include('layouts.scripts')
</body>
</html>
