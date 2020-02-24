@section('loginuser')

    <ul id="menubar">

        <li>
            <i class="material-icons">account_circle</i>
            <ul>
                <li>
                    <a class="dropdown-item" href=""
                       onclick="event.preventDefault();
                                                     document.getElementById('loginuser-settings-form').submit();">
                        <i class="material-icons material-icons-sub">perm_contact_calendar</i><span>settings</span>
                    </a>

                    <form id="loginuser-settings-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons material-icons-sub">exit_to_app</i><span>log out</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>

@endsection

