@include('sufee_admin.page-header-left-contents')
@include('sufee_admin.page-header-right-contents')

@section('page-header')
    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                @yield('page-header-left-contents')
            </div>
        </div>

        <div class="col-sm-5">
            @yield('page-header-right-contents')
        </div>
    </div>
@endsection
