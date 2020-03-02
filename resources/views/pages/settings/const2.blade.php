@extends('sufee_admin.app')

@section('page-head')
{{--
    <link rel="stylesheet" href="{{ asset('assets/css/page_settings_const.css') }}">
--}}
@endsection

@section('page-foot')
{{--
    <script src="{{ asset('assets/js/page_settings_const.js') }}"></script>
--}}
    <script>
        (function($) {

            /* 項目の移動設定 */
            $('.sortable-group').sortable();

            /*
            $(document).on("click", ".sort-item-group", function () {
                var targetId = "#"+$(this)[0]['id'];
            });
             */
            // sort-item-group

        })(jQuery);

    </script>

@endsection

@section('content')
<div id="page-settings-const">
    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">

<?php
        $ary_env = array(
            "aaa" => array(
                "key-aa1-a" =>array("val-aa1-a"),
                "key-aa2-a" => array("val-aa2-a"),
                "key-aa3-a" => array("val-aa3-a"),
            ),
            "bbb" => array(
                "key-bb1-a" => array("val-bb1-b"),
                "key-bb2-a" => array("val-bb2-b"),
                "key-bb3-a" => array("val-bb3-b"),
            ),
        );
?>
    <?php $const_cnt = 1; ?>
    @foreach($ary_env as $const_name => $const_ary)
        <?php
//        $collapse_head = " collapsed";
//        $collapse_show = " show";
        $collapse_head = "";
        $collapse_show = "";
        ?>
        <div id="const-{{$const_name}}" class="card">
            <div id="const-{{$const_name}}-header" class="card-header" role="tab">
                <h5 class="mb-0">
                    <a class="text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#const-bd-{{ $const_name }}" role="button" aria-expanded="false" aria-controls="collapse-{{ $const_name }}">
                        {{ $const_name }}
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="const-{{ $const_name }}-body" class="collapse-{{ $const_name }} card-body collapse" role="tabpanel"
                 aria-labelledby="const-{{$const_name}}-header" data-parent="#accordion">
                    <div id="const-{{ $const_name }}-collapse">

                <?php $row_cnt = 1; ?>
                @foreach($const_ary as $const_key => $const_val)
                        <div id="const-{{$const_name}}-row-{{ $row_cnt  }}" class="row">
                            <span class="col-md-1 form-group">
                            </span>
                                <div class="col-md-2 form-group text-right">
                                    {{ $const_key  }}
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" placeholder="value" class="form-control">
                                </div>
                            <span class="col-md-1 form-group">
                                <a href="" class="" data-toggle="modal">
                                    <i id="database-const-1-rm-btn" class="btn material-icons delete-icon-circle p-0 delete-item">remove_circle</i>
                                </a>
                            </span>
                        </div>
                        <?php
                        $collapse_head = "";
                        $collapse_show = "";
                        $row_cnt++;
                            ?>
                @endforeach
                    </div>
                    <div class="row" rowtype="newItem">
                        <div class="col-md-2 form-group text-right">

                        </div>
                        <span class="col-md-10 form-group">
                            <button id="add-items" name="database"
                                    class="btn btn-info float-left add-icon-circle add-item"
                                    data-toggle="modal">
                                <i class="material-icons add-icon-circle">add_circle</i>
                                <span class="">New</span>
                            </button>
                    </span>
                    </div>
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <?php $const_cnt++; ?>
    @endforeach

        <div class="card">
            <div class="card-header" role="tab" id="heading1">
                <h5 class="mb-0">
                    <a class="text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                        database
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse2" class="collapse show" role="tabpanel"
                 aria-labelledby="heading1" data-parent="#accordion">
                <div class="card-body">
                    <div id="const-database">
                        <div id="database-const-1" class="row">
                            <span class="col-md-1 form-group">
                            </span>
                            <div class="col-md-2 form-group text-right">
                                const-1
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" placeholder="value" class="form-control">
                            </div>
                            <span class="col-md-1 form-group">
                                <a href="" class="" data-toggle="modal">
                                    <i id="database-const-1-rm-btn" class="btn material-icons delete-icon-circle p-0 delete-item">remove_circle</i>
                                </a>
                            </span>
                        </div>
                        <div class="row">
                            <span class="col-md-1 form-group">
                            </span>
                            <div class="col-md-2 form-group text-right">
                                const-2
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" placeholder="value" class="form-control">
                            </div>
                            <span class="col-md-1 form-group">
                                <a href="" class="" data-toggle="modal">
                                    <i class="btn material-icons delete-icon-circle p-0 delete-item">remove_circle</i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="row" rowtype="newItem">
                        <div class="col-md-2 form-group text-right">

                        </div>
                        <span class="col-md-10 form-group">
                                <button id="add-items" name="database"
                                        class="btn btn-info float-left add-icon-circle add-item"
                                        data-toggle="modal">
                                    <i class="material-icons add-icon-circle">add_circle</i>
                                    <span class="">New</span>
                                </button>
                        </span>
                    </div>
                </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
    {{--
    --}}
{{--
        <div class="card">
            <div class="card-header" role="tab" id="heading2">
                <h5 class="mb-0">
                    <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                        application
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse3" class="collapse" role="tabpanel"
                 aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                    <div id="const-application">
                        <div id="application-const-1" class="row">
                            <span class="col-md-1 form-group">
                            </span>
                            <div class="col-md-2 form-group text-right">
                                const-1
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" placeholder="value" class="form-control">
                            </div>
                            <span class="col-md-1 form-group">
                                <a href="" class="" data-toggle="modal">
                                    <i id="application-const-1-rm-btn" class="btn material-icons delete-icon-circle p-0 delete-item">remove_circle</i>
                                </a>
                            </span>
                        </div>
                        <div class="row" rowtype="newItem">
                            <div class="col-md-2 form-group text-right">

                            </div>
                            <span class="col-md-10 form-group">
                                <button id="add-items" name="database"
                                        class="btn btn-info float-left add-icon-circle add-item"
                                        data-toggle="modal">
                                    <i class="material-icons add-icon-circle">add_circle</i>
                                    <span class="">New</span>
                                    </button>
                            </span>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <h5 class="mb-0">
                    <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                        aws
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse4" class="collapse" role="tabpanel"
                 aria-labelledby="heading3" data-parent="#accordion">
                <div class="card-body">
                    アイテム3のコンテンツ
                </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="heading4">
                <h5 class="mb-0">
                    <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                        pusher
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse5" class="collapse" role="tabpanel"
                 aria-labelledby="heading4" data-parent="#accordion">
                <div class="card-body">
                    アイテム3のコンテンツ
                </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="heading5">
                <h5 class="mb-0">
                    <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">
                        timezone
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse6" class="collapse" role="tabpanel"
                 aria-labelledby="heading5" data-parent="#accordion">
                <div class="card-body">
                    アイテム3のコンテンツ
                </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="heading6">
                <h5 class="mb-0">
                    <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#collapse7" role="button" aria-expanded="false" aria-controls="collapse7">
                        theme
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse7" class="collapse" role="tabpanel"
                 aria-labelledby="heading6" data-parent="#accordion">
                <div class="card-body">
                    アイテム3のコンテンツ
                </div><!-- /.card-body -->
                <div class="card-body">
                    アイテム3のコンテンツ2
                </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
end cards--}}
    </div><!-- /#accordion -->
</div>
@endsection{{-- content --}}
