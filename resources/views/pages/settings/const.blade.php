@extends('sufee_admin.app')

@section('page-head')
    <link rel="stylesheet" href="{{ asset('assets/css/page_settings_const.css') }}">
@endsection

@section('page-foot')
{{--
    <script src="{{ asset('assets/js/page_settings_const.js') }}"></script>
--}}
    <script>
        (function($) {

            /* 既存項目の編集 */
            $(document).on("click", ".edit-item", function () {
                var targetRowId  = $(this)[0]['id'].replace("-edit-btn", "");
                var targetIdKey = targetRowId+"-key";
                var targetIdVal = targetRowId+"-val";
                var targetName = $(this)[0]['id'].substr(0, $(this)[0]['id'].indexOf('-'));
                var constName = $(this)[0]['id'].substr(0, $(this)[0]['id'].indexOf('-callrow'));

                /* delete btn change */
                $("#"+targetIdKey)[0].innerHTML = "" +
                    "<input id='"+targetIdKey+"-key-input' type='text' placeholder='key name' class='form-control' value='"+$("#"+targetIdKey)[0]["innerText"]+"'>";
                // const-env-bd-callrow-1-edit-btn
                $("#"+targetRowId+"-delete-btn").hide();
                $("#"+targetRowId+"-cancel-btn").show();

                /* edit btn change */
                $("#"+targetIdVal)[0].innerHTML = "" +
                    "<input id='"+targetIdVal+"-key-input' type='text' placeholder='value' class='form-control' value='"+$("#"+targetIdVal)[0]["innerText"]+"'>";
                /* id chenge delete to cancel */
                $("#"+targetRowId+"-edit-btn").hide();
                $("#"+targetRowId+"-save-btn").show();

                /* ########## hide settings ########## */
                /* hide mew button */
                $("#"+constName+"-addnew-btn").hide();

                /* hide delete & edit button */
                $("."+constName+"-callrow-delete-btn").hide();
                $("."+constName+"-callrow-edit-btn").hide();

                /* sortable の一時解除 */
                $('.sortable-group').sortable({ disabled:true });

            });

            /* #################################
            項目編集中のキャンセルボタン押下
             ################################ */
            $(document).on("click", ".const-env-bd-callrow-cancel-btn", function () {
                console.log("【START】<click> [.const-env-bd-callrow-cancel-btn]");
                //             <div id="const-{ $key }" class="card card-{ $key }"> const-env-bd-callspace

                console.log($(this)[0]['id']+"-bd-callspace");
                console.log("【END】<click> [.const-env-bd-callrow-cancel-btn]");
            });

            $(document).on("click", ".card", function () {
                console.log("【START】<click> [.card]");
                // $("#"+$(this)[0]['id']+"-bd-callspace").toggle( "show" );
//                $("#"+$(this)[0]['id']+"-bd-callspace").addClass("show");
                console.log($(this)[0]['id']+"-bd-callspace");
                console.log("【END】<click> [.card]");
            });

            /* #################################
            新規項目の追加
             ################################ */
            $(document).on("click", ".add-item", function () {
                var targetName = $(this)[0]['name'];
                console.log(targetName);
//                var obj = document.getElementsByName(targetName)[0];
//                console.log(obj['id']);
                var targetId = '#const-'+targetName;
                var hiddenTargetId = '#add-item-'+targetName;
                var cntRow = $(targetId+' li').length + 1;
                var $strRow ='                        <li id="'+targetName+'-new-'+cntRow+'" class="list-group-item  add-item-area">\n' +
                    '                        <div class="row">\n' +
                    '                            <span class="col-md-1 form-group">\n' +
                    '                            <span class="badge badge-danger">New</span>\n' +
                    '                            </span>\n' +
                    '                            <div class="col-md-3 form-group text-right">\n' +
                    '                                <input type="text" placeholder="key name" class="form-control">\n' +
                    '                            </div>\n' +
                    '                            <div class="col-md-6 form-group">\n' +
                    '                                <input type="text" placeholder="value" class="form-control">\n' +
                    '                            </div>\n' +
                    '                            <span class="col-md-2 form-group">\n' +
                    '                                <a href="" class="" data-toggle="modal">\n' +
                    '                                    <i id="'+targetName+'-new-'+cntRow+'-rm-btn" \n' +
                    '                                    class="btn material-icons delete-icon-circle p-0 delete-item">\n' +
                    '                                    remove_circle</i>\n' +
                    '                                </a>\n' +
                    '                                <a href="" class="" data-toggle="modal">\n' +
                    '                                    <i id="'+targetName+'-new-'+cntRow+'-rm-btn" \n' +
                    '                                    class="btn material-icons delete-icon-circle p-0 delete-item text-success">\n' +
                    '                                    check_circle</i>\n' +
                    '                                </a>\n' +
                    '                            </span>\n' +
                    '                        </div>\n';
                '                        </li>\n';
                    $(targetId).append($strRow);

                    console.log("hide button:"+hiddenTargetId);

                    // 新規項目が表示されている間の hide 設定
                    // < Newボタン >
                    $(hiddenTargetId).hide();

                    // 新規以外の < 項目削除ボタン >
                    $(".btn-delete-"+targetName).hide();
                    $(".btn-edit-"+targetName).hide();

                    // sortable の一時解除
                    $('.sortable-group').sortable({ disabled:true });

            });

            /* 項目の削除 */
            $(document).on("click", ".delete-item", function () {
                var targetId = "#"+$(this)[0]['id'].replace("-delete-btn", "");
                var targetName = targetId.substr(0, targetId.indexOf('-')).replace("#", "");
                var showTargetId = "#add-item-"+targetName;
                console.log("remove target id:["+targetId+"]");
                if($(targetId).hasClass('add-item-area')){
                    // 追加の項目を削除した場合は Newボタン を復活
                    $(showTargetId).show();

                    // 削除/編集ボタンの復活
                    $(".btn-delete-"+targetName).show();
                    $(".btn-edit-"+targetName).show();
                    // sortable の復活
                    $('.sortable-group').sortable({ disabled:false });
                }

                $(targetId).remove();

            });

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
        <?php $cnt = 1; ?>
        <?php $body_show = " show"; ?>
        @foreach($ary_env as $key => $ary_const)
            <div id="const-{{ $key }}" class="card card-{{ $key }}">
                <div id="const-{{$key}}-header" class="card-header" role="tab">
                    <h5 class="mb-0">
                        <a class="text-body d-block p-3 m-n3 collapsed" data-toggle="collapse"
                           href="#const-{{$key}}-bd-callspace" role="button" aria-expanded="true" aria-controls="const-{{$key}}-bd-callspace">
                            {{ $key }}
                        </a>
                    </h5>
                </div><!-- /.card-header -->
                <div id="const-{{$key}}-bd-collapsed" class="collapse{{$body_show}}" role="tabpanel"
                     aria-labelledby="const-{{$key}}-header" data-parent="#accordion">
                    <div class="card-body">
                        <div id="const-{{$key}}-body" class="">

                    <?php $const_cnt = 0; ?>
                            <ul id="const-{{$key}}-bd-callspace" class="list-group sortable-group">
                    @foreach($ary_const as $const_key => $const_val)
                                <li id="const-{{$key}}-bd-callrow-{{$cnt}}" class="list-group-item">
                                    <div class="row">
                                        <span class="col-md-1 form-group">
                                            <i class="material-icons p-0 move-icon">
                                                reorder
                                            </i>
                                        </span>
                                        <div id="const-{{$key}}-bd-callrow-{{$cnt}}-key"
                                             class="col-md-3 form-group key-area" value="{{ $const_key }}">
                                            <span id="const-{{$key}}-bd-callrow-{{$cnt}}-key-label">{{ $const_key }}</span>
                                        </div>
                                        <div id="const-{{$key}}-bd-callrow-{{$cnt}}-val"
                                             class="col-md-6 form-group val-area" value="{{ $const_val }}">
                                            <span id="const-{{$key}}-bd-callrow-{{$cnt}}-val-label">{{ $const_val }}</span>
                                            {{--
                                            <input type="text" placeholder="value"
                                                   class="form-control" value="{{ $const_val }}">
                                            --}}
                                        </div>
                                        <span class="col-md-2 form-group float-left">
                                            <a class="" data-toggle="modal">
                                                <i id="const-{{$key}}-bd-callrow-{{$cnt}}-delete-btn"
                                                   class="btn material-icons p-0 delete-item const-{{$key}}-bd-callrow-delete-btn">
                                                    remove_circle
                                                </i>
                                            </a>
                                            <a class="" data-toggle="modal">
                                                <i id="const-{{$key}}-bd-callrow-{{$cnt}}-edit-btn"
                                                   class="btn material-icons p-0 edit-item const-{{$key}}-bd-callrow-edit-btn">
                                                    edit
                                                </i>
                                            </a>
                                            <a class="" data-toggle="modal">
                                                <i id="const-{{$key}}-bd-callrow-{{$cnt}}-cancel-btn"
                                                   class="btn material-icons p-0 cancel-item const-{{$key}}-bd-callrow-cancel-btn text-danger"
                                                    style="display: none;">
                                                    cancel
                                                </i>
                                            </a>
                                            <a class="" data-toggle="modal">
                                                <i id="const-{{$key}}-bd-callrow-{{$cnt}}-save-btn"
                                                   class="btn material-icons p-0 save-item const-{{$key}}-bd-callrow-save-btn text-success"
                                                   style="display: none;">
                                                    check_circle
                                                </i>
                                            </a>
                                        </span>
                                    </div>{{-- end row --}}
                                </li>
                        <?php $const_cnt = $const_cnt + 1; ?>
                    @endforeach
                            </ul>
                        </div>{{-- end const-[$key] --}}
                        <div class="row add-area" rowtype="newItem">
                            <div class="col-md-1 form-group text-right">

                            </div>
                            <span class="col-md-11 form-group mt-3">
                                <button id="const-{{$key}}-bd-addnew-btn" name="{{$key}}"
                                        class="btn btn-info float-left add-icon-circle add-item"
                                        data-toggle="modal">
                                    <i class="material-icons add-icon-circle">add_circle</i>
                                    <span class="">New</span>
                                </button>
                            </span>
                        </div>

                    </div>{{-- end card-body --}}
                </div>{{-- end collapse[$cnt ] --}}
            </div>{{-- end card --}}
            <?php $cnt = $cnt + 1; ?>
            <?php $body_show = ""; ?>
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
            <div id="collapse2" class="collapse" role="tabpanel"
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
    </div><!-- /#accordion -->
</div>
@endsection{{-- content --}}
