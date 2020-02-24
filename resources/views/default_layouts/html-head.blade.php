@section('html-head')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- lib -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="//code.jquery.com/jquery-1.8.3.js"></script>
    <script src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    <!-- page scripts -->
    <script src="{{ asset('js/default.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- page styles -->
    <link href="{{ asset('css/default.css.php') }}" rel="stylesheet">

@endsection
