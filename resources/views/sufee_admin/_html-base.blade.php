@include('sufee_admin.html-head')
@include('sufee_admin.left-panel')
@include('sufee_admin.right-panel')

@section('_html-base')
    <!DOCTYPE html>
    <html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            @yield('html-head')
        </head>
        <body>

            {{-- left-panel --}}
            <aside id="left-panel" class="left-panel">
                @yield('left-panel')
            </aside>

            {{-- right-panel --}}
            <div id="right-panel" class="right-panel">
                @yield('right-panel')
            </div>

            {{-- java script --}}
            @yield('html-foot')

        </body>
    </html>
@endsection
