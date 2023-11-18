<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Portfolio</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @vite(['resources/css/app.css'])
    </head>

   	<body class="bg-gray-800">
        <header>
            <div class="logo">Ian Reeves</div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="nav-bar">
                <ul>
                    <li>
                        <a href="" class="nav-link nav-link-ltr">Home</a>
                    </li>
                    <li>
                        <a href="" class="nav-link nav-link-ltr">About</a>
                    </li>
                    <li>
                        <a href="" class="nav-link nav-link-ltr">Web Portfoio</a>
                    </li>
                    <li>
                        <a href="" class="nav-link nav-link-ltr">Graphic Portfolio</a>
                    </li>
                    <li>
                        <a href="" class="nav-link nav-link-ltr">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer class="footer">
            This is a test Footer
        </footer>
    </body>
</html>
