<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Learning Laravel</a>
        </div>

        <!-- Navbar Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ App\Helpers\Helper::setActive('/') }}"><a href="/">Home</a></li>
                <li class="{{ App\Helpers\Helper::setActive('about') }}"><a href="/about">About</a></li>
                <li class="{{ App\Helpers\Helper::setActive('contact') }}"><a href="/contact">Contact</a></li>
                <li class="dropdown {{ App\Helpers\Helper::setActive('users') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/users/register">Register</a></li>
                        <li><a href="/users/login">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>