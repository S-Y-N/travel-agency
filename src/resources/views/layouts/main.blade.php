<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel agency Planeta Tour</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @stack('style')
</head>
<body>
<header>
    <div class="container">
        <nav class="nav">
            <a href="#" class="logo"><span>Planet Tour</span></a>
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="#" class="menu-link"><span>Review</span></a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link"><span>Tips</span></a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link"><span>Alerts</span></a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link"><span>Blog</span></a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link"><span>Log in</span></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
@yield('content')
<footer class="footer">
    <div class="container">
        <nav class="footer__menu">
            <div class="footer__copy">
                <p class="footer__copy-text">© 2022 Treloo LLC - All right reserved.</p>
            </div>
            <ul class="footer__menu-list">
                <li class="footer__menu-item"><a href="#" class="footer__menu-link">Review</a></li>
                <li class="footer__menu-item"><a href="#" class="footer__menu-link">Tips</a></li>
                <li class="footer__menu-item"><a href="#" class="footer__menu-link">Alerts</a></li>
                <li class="footer__menu-item"><a href="#" class="footer__menu-link">Blog</a></li>
            </ul>
        </nav>
    </div>
</footer>

</body>
</html>
