@extends('sufee_admin.app')
@include('plugin.editformmulticard')

@section('page-head')
    <link rel="stylesheet" href="{{ asset('assets/css/page_settings_const2.css.php') }}">
@endsection

@section('content')
<div id="page-settings-const">
    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">

<?php
        $ary_env = array(
            "aaa" => array(
                "key-aa1-a" =>array("val"=>"val-aa1-a"),
                "key-aa2-a" => array("val"=>"val-aa2-a"),
                "key-aa3-a" => array("val"=>"val-aa3-a"),
            ),
            "bbb" => array(
                "key-bb1-a" => array("val"=>"val-bb1-b"),
                "key-bb2-a" => array("val"=>"val-bb2-b"),
                "key-bb3-a" => array("val"=>"val-bb3-b"),
            ),
            "ccc" => array(
                "key-cc1-a" => array("val"=>"val-cc1-c"),
            ),
        );
?>
    <?php
        $plugin_name = "forms-type-a";
        $card_cnt = 1;
        $show_first = " show";
        ?>
    @foreach($ary_env as $card_key_name => $card_ary)
        <?php
            $card_name = $plugin_name."-".$card_key_name;
        ?>
        {{-- card --}}
        <div id="{{ $card_name }}" class="card {{ $plugin_name }}-card">
            {{-- card header --}}
            <div id="{{ $card_name }}-header" class="{{ $plugin_name }}-card-header card-header" role="tab">
                <h5 class="mb-0">
                    <a class="text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#{{ $card_name }}-body" role="button" aria-expanded="false"
                       aria-controls="{{ $card_name }}-body">
                        {{ $card_key_name }}
                    </a>
                </h5>
            </div>{{-- card header --}}
            {{-- card body --}}
            <div id="{{ $card_name }}-body" class="collapse {{ $plugin_name }}-body{{ $show_first }}" role="tabpanel"
                 aria-labelledby="{{ $card_name }}-header" data-parent="#accordion">
                {{-- card rows --}}
                <ul id="{{ $card_name }}-rows" class="card-body {{ $plugin_name }}-rows">

                    <?php $card_row_cnt = 1; ?>
                    {{-- card row --}}
                    @foreach($card_ary as $card_row_key => $card_row_ary)
                        <?php $card_row_val = $card_row_ary['val'] ?>
                        <li id="{{ $card_name }}-row-{{ $card_row_cnt }}" class="row {{ $plugin_name }}-row">
                            <span class="col-md-1 form-group">
                                <i class="material-icons p-0 move-icon">
                                    reorder
                                </i>
                            </span>
                            <div class="col-md-3 form-group">
                                {{ $card_row_key }}
                            </div>
                            <div class="col-md-7 form-group">
                                {{ $card_row_val }}
                                <input type="text" placeholder="value"
                                        class="form-control" value="{{ $card_row_val }}"
                                        style="display: none;">
                            </div>
                            <span class="col-md-1 form-group">
                                <a href="" class="" data-toggle="modal">
                                    <i id="{{ $card_name }}-row-{{ $card_row_cnt }}-delete-btn"
                                       class="btn material-icons p-0 delete-item"
                                       row="{{ $card_row_cnt }}"
                                    >remove_circle</i>
                                </a>
                                <a href="" class="" data-toggle="modal">
                                    <i id="{{ $card_name }}-row-{{ $card_row_cnt }}-edit-btn"
                                       class="btn material-icons p-0 edit-item"
                                    >create</i>
                                </a>
                                <a class="" data-toggle="modal">
                                    <i id="{{ $card_name }}-row-{{ $card_row_cnt }}-cancel-btn"
                                       class="btn material-icons p-0 text-danger"
                                       style="display: none;">
                                        cancel
                                    </i>
                                </a>
                                <a class="" data-toggle="modal">
                                    <i id="{{ $card_name }}-{{ $card_row_cnt }}-save-btn"
                                       class="btn material-icons p-0 text-success"
                                       style="display: none;">
                                        check_circle
                                    </i>
                                </a>
                            </span>
                        </li>{{-- end row --}}
                        <?php $card_row_cnt++; ?>
                    @endforeach
                </ul> {{-- end card rows --}}
                {{-- add new area --}}
                <div id="{{ $card_name }}-addnew" class="row {{ $plugin_name }}-addnew" rowtype="newItem">
                    <div class="col-md-2 form-group text-right">

                    </div>
                    <span class="col-md-10 form-group">
                        <button id="{{ $card_name }}-addnew-btn" name="{{ $card_key_name }}"
                                class="btn btn-info {{ $plugin_name }}-addnew-btn"
                                data-toggle="modal">
                            <i class="material-icons {{ $plugin_name }}-addnew-icon">add_circle</i>
                            <span class="">New</span>
                        </button>
                    </span>
                </div>{{-- end add new --}}
            </div>{{-- end card body --}}
        </div>{{-- end card --}}
        <?php
            $show_first = "";
            ?>
    @endforeach

   </div><!-- /#accordion -->
</div>
@endsection{{-- content --}}


@section('page-foot')
    {{--
        <script src="{{ asset('assets/js/page_settings_const.js') }}"></script>
    --}}
    <script>
        (function($) {

            /* ################################
            行の削除
            ################################ */
            $(document).on("click", ".delete-item", function () {
                $("#"+$(this)[0]['id'].replace("-delete-btn", "")).remove();
                /*
                var targetIdObj = $("#"+$(this)[0]['id'].replace("-delete-btn", ""));
                $(targetIdObj).remove();
                */
            });

            /* ################################
            項目の移動設定
            ################################ */
            $('.{{ $plugin_name }}-rows').sortable();

            /*
            $(document).on("click", ".sort-item-group", function () {
                var targetId = "#"+$(this)[0]['id'];
            });
             */
            // sort-item-group

        })(jQuery);

    </script>

@endsection

