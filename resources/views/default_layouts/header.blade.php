@include('default_layouts.logo')
@include('default_layouts.loginuser')

@section('header')

    <div id="logo">
        @yield('logo')
    </div>
    <div id="loginuser">
        @yield('loginuser')
    </div>
    <div id="username_area">
        <div id="user_name">{{ Auth::user()->user_code }}</div>
        <div id="user_mail">{{ Auth::user()->email }}</div>
    </div>

@endsection
