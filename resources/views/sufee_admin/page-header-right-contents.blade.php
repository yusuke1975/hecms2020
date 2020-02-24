@include('sufee_admin.login-user-area')

@section('page-header-right-contents')
    <div class="user-area dropdown float-right">

        @yield('login-user-area')
    </div>

    {{-- language select
    <div class="language-select dropdown" id="language-select">
        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
            <i class="flag-icon flag-icon-us"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="language">
            <div class="dropdown-item">
                <span class="flag-icon flag-icon-fr"></span>france
            </div>
            <div class="dropdown-item">
                <i class="flag-icon flag-icon-es"></i>espaniol
            </div>
            <div class="dropdown-item">
                <i class="flag-icon flag-icon-us"></i>english
            </div>
            <div class="dropdown-item">
                <i class="flag-icon flag-icon-it"></i>italy
            </div>
        </div>
    </div>
    end language select--}}
@endsection
