@extends('sufee_admin.app')

@section('page-head')

    <link rel="stylesheet" href="{{ asset('assets/css/page_settings_database.css.php') }}">
@endsection

@section('content')

    <div id="page-settings-database">
        <div class="col-lg-3 col-md-6">
            <div class="social-box facebook">
                <i class="sosial-box-header">database</i>
                @foreach($databases as $database)
                <ul>
                    <li>
                        <span class="count">{{$database[0]}}</span>
                    </li>
                    <li>
                        <span>{{$database[1]}}</span>
                    </li>
                </ul>
                @endforeach
            </div>
            <!--/social-box-->
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="social-box facebook">
                <i class="sosial-box-header">"pgsql".tables</i>
                <ul>
                    <li>
                        <span class="count">{{count($tables)}}</span>
                    </li>
                    <li>
                        <span>tables</span>
                    </li>
                </ul>
            </div>
            <!--/social-box-->
        </div>
    </div>
@endsection{{-- content --}}
