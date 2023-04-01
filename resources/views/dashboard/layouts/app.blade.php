<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>prapatan</title>
          <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/icon/iconbg.png"
        />
       
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>
    <nav class="bg-white shadow">
        @include('dashboard.layouts.includes.slidebar')
    </nav>

    <main>@yield('content')</main>

    

</body>
</html>