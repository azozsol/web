<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/monForum.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="grid">

        <div class="top">
            
            <div class="parent">
                
                <div class="div1">
                    @yield('top')
                </div>
                
                <div class="div2">
                    @yield('home')
                </div>
            
            </div>
        
        </div>

        <div class="container">
            @yield('container')
        </div>

        <div class="down">
            @yield('down')
        </div>
    </div>
</body>

</html>
