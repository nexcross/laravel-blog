<nav class="navbar navbar-dark bg-dark position-absolute footer-container">
    <div class="container justify-content-center">
        <ul class="navbar-nav text-center">
            <li class="nav-item text-white m-3">
                <a href="https://github.com/nexcross" target="_blank" class="btn text-secondary"><i class="fa fa-github" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/GNecross" target="_blank" class="btn text-secondary"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/aqhmal_" target="_blank" class="btn text-secondary"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="mailto:hello@aqhmal.com" class="btn text-secondary"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item text-white m-3">
                &copy; {{ date('Y') }} - <a href="{{ Request::url() }}" class="text-secondary">aqhmal.com</a>
            </li>
        </ul>
    </div>
</nav>
