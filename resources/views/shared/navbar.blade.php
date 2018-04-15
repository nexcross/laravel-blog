<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
    <div class="container">
        <!-- Branding Image -->
        {{ link_to_route('home', config('app.name', 'Laravel'), [], ['class' => 'navbar-brand']) }}

        <!-- Collapsed Hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            @admin
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{ link_to_route('admin.dashboard', __('dashboard.dashboard'), [], ['class' => 'nav-link']) }}
                    </li>
                </ul>
            @endadmin

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    {{ Form::open(['route' => 'home', 'class' => 'd-flex', 'method' => 'GET']) }}
                    <div class="input-group mr-sm-3">
                        {{ Form::text('q', null, ['class' => 'form-control', 'placeholder' => __('posts.search')]) }}
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    {{ Form::close() }}
                </li>
            </ul>
        </div>
    </div>
</nav>

