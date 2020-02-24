@include('default_layouts.html-head')
@include('default_layouts.header')
@include('default_layouts.side-nav')
@include('default_layouts.breadcrumbs')

@section('_html-base')

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('html-head')
</head>
<body>
<div class="outer-container">
    <header>
        @yield('header')
    </header>
    <div class="side-nav">
        @yield('side-nav')
    </div>
    <div class="main-container">
        <div id="breadcrumbs" class="main-container-header">
            @yield('breadcrumbs')
        </div>
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>

@endsection
