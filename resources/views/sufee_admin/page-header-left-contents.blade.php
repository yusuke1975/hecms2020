@section('page-header-left-contents')
    {{-- search box
    <button class="search-trigger"><i class="fa fa-search"></i></button>
    <div class="form-inline">
        <form class="search-form">
            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
        </form>
    </div>
    end search box --}}

    {{-- notification
    end notification --}}
    <div class="dropdown for-notification">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="icon-circle"><i class="fa fa-bell"></i></span>
            {{--
            <span class="count bg-danger">5</span>
            --}}
        </button>
        {{--
    <div class="dropdown-menu" aria-labelledby="notification">
        <p class="red">You have 3 Notification</p>
        <a class="dropdown-item media bg-flat-color-1" href="#">
            <i class="fa fa-check"></i>
            <p>Server #1 overloaded.</p>
        </a>
        <a class="dropdown-item media bg-flat-color-4" href="#">
            <i class="fa fa-info"></i>
            <p>Server #2 overloaded.</p>
        </a>
        <a class="dropdown-item media bg-flat-color-5" href="#">
            <i class="fa fa-warning"></i>
            <p>Server #3 overloaded.</p>
        </a>
        </div>
        --}}
    </div>

    {{-- message
    <div class="dropdown for-message">
        <button class="btn btn-secondary dropdown-toggle" type="button"
                id="message"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti-email"></i>
            <span class="count bg-primary">9</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="message">
            <p class="red">You have 4 Mails</p>
            <a class="dropdown-item media bg-flat-color-1" href="#">
                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                <span class="message media-body">
                    <span class="name float-left">Jonathan Smith</span>
                    <span class="time float-right">Just now</span>
                        <p>Hello, this is an example msg</p>
                </span>
            </a>
            <a class="dropdown-item media bg-flat-color-4" href="#">
                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                <span class="message media-body">
                    <span class="name float-left">Jack Sanders</span>
                    <span class="time float-right">5 minutes ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                </span>
            </a>
            <a class="dropdown-item media bg-flat-color-5" href="#">
                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                <span class="message media-body">
                    <span class="name float-left">Cheryl Wheeler</span>
                    <span class="time float-right">10 minutes ago</span>
                        <p>Hello, this is an example msg</p>
                </span>
            </a>
            <a class="dropdown-item media bg-flat-color-3" href="#">
                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                <span class="message media-body">
                    <span class="name float-left">Rachel Santos</span>
                    <span class="time float-right">15 minutes ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                </span>
            </a>
        </div>
    </div>
    end message --}}

@endsection

