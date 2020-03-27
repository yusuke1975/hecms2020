@extends('sufee_admin.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('jodit') }}
@endsection

@section('page-head')
    <link rel="stylesheet" href="{{ asset('vendors/jodit/jodit.css') }}">
@endsection

@section('page-foot')
    <script src="{{ asset('vendors/jodit/jodit.js') }}"></script>
    <script>
        const editor = new Jodit('#editor', {
            // toolbarButtonSize: 'large',
            // height: 100,
            // "preset": "inline",
            // toolbar: "#toolbar",
            // extraPlugins: ['emoji'],
            // extraButtons: ['emoji'],
            limitChars: 5,

            tabIndex: 0,
            language: 'ja',
            // language: 'ru',

        });

        // editor.value = '12345';

    </script>
@endsection {{-- page-foot --}}

@section('content')
    <div class="col-sm-12">
        <div id="box" class="">
            <div id="toolbar-optional-container"></div>
            <div id="editor" style="display: none;">12345</div>
        </div>
    </div>

@endsection {{-- content --}}
