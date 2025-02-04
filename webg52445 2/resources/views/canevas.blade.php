<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content={{ csrf_token() }}>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/programs.js') }}"></script>
    <title>@yield('title')</title>
</head>
<head>
	<title>@yield('title')</title>
</head>
<body>
    <h1>Programme Étudiant</h1>
    @yield('students')
	@yield('content')
</body>
</html>
