@section('login-user-area')

    <a href="#" class="dropdown-toggle"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="user-avatar rounded-circle icon-circle" src="{{asset('images/avatar/operator.png')}}" alt="User Avatar">
    </a>

    <div class="user-menu dropdown-menu">
        <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

        <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

        {{--<a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>--}}
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="material-icons">exit_to_app</i><span>Logout</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>

    <span class="float-right text-right mr-3">
        <div id="user_name">{{ Auth::user()->user_code }}</div>
        <div id="user_mail">{{ Auth::user()->email }}</div>
    </span>


@endsection
