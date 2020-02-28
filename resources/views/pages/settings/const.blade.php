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
                var targetIdKey = $(this)[0]['id'].replace("edit-btn", "key");
                var targetIdVal = $(this)[0]['id'].replace("edit-btn", "val");
                var targetName = $(this)[0]['id'].substr(0, $(this)[0]['id'].indexOf('-'));
                // var obj = $("#"+targetId).parent();
                console.log("["+$("#"+targetIdKey)[0]["innerText"]+"]");
                $("#"+targetIdKey)[0].innerHTML = "" +
                    "<input type='text' placeholder='key name' class='form-control' value='"+$("#"+targetIdKey)[0]["innerText"]+"'>";
                $("#"+targetIdVal)[0].innerHTML = "" +
                    "<input type='text' placeholder='value' class='form-control' value='"+$("#"+targetIdVal)[0]["innerText"]+"'>";
                console.log("targetName:["+targetName+"]");
                console.log("targetIdKey:["+targetIdKey+"]");
                console.log($("#"+targetIdKey));
                console.log("["+$("#"+targetIdKey)[0]["innerText"]+"]");
                console.log("targetIdVal:["+targetIdVal+"]");
                console.log("["+$("#"+targetIdVal)[0]["innerText"]+"]");
                // console.log(obj);

            });


            /* 新規項目の追加 */
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
                var targetId = "#"+$(this)[0]['id'].replace("-rm-btn", "");
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
    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
        <?php $cnt = 0; ?>
        @foreach($ary_env as $key => $ary_const)
            <div class="card card-{{ $key }}">
                <div class="card-header" role="tab" id="heading{{$cnt}}">
                    <h5 class="mb-0">
                        <a class="text-body d-block p-3 m-n3" data-toggle="collapse"
                           href="#collapse{{ $cnt }}" role="button" aria-expanded="true" aria-controls="collapse{{ $cnt }}">
                            {{ $key }}
                        </a>
                    </h5>
                </div><!-- /.card-header -->
                <div id="collapse{{$cnt}}" class="collapse show" role="tabpanel"
                     aria-labelledby="heading{{$cnt}}" data-parent="#accordion">
                    <div class="card-body">
                        <div id="const-{{$key}}" class="">

                    <?php $const_cnt = 0; ?>
                            <ul id="list02" class="list-group sortable-group">
                    @foreach($ary_const as $const_key => $const_val)
                        <li id="{{$key}}-const-{{$const_cnt}}" class="list-group-item">
                        <div class="row">
                            <span class="col-md-1 form-group">
                                <i class="material-icons p-0 move-icon">
                                    reorder
                                </i>
                            </span>
                            <div id="{{$key}}-const-{{$const_cnt}}-key" class="col-md-3 form-group key-area" value="{{ $const_key }}">
                                {{ $const_key }}
                            </div>
                            <div id="{{$key}}-const-{{$const_cnt}}-val" class="col-md-6 form-group val-area" value="{{ $const_val }}">
                                {{ $const_val }}
                                {{--
                                <input type="text" placeholder="value"
                                       class="form-control" value="{{ $const_val }}">
                                --}}
                            </div>
                            <span class="col-md-2 form-group float-left">
                                <a class="" data-toggle="modal">
                                    <i id="{{$key}}-const-{{$const_cnt}}-rm-btn"
                                       class="btn material-icons delete-icon-circle p-0 delete-item btn-delete-{{$key}}">
                                        remove_circle
                                    </i>
                                </a>
                                <a class="" data-toggle="modal">
                                    <i id="{{$key}}-const-{{$const_cnt}}-edit-btn"
                                       class="btn material-icons delete-icon-circle p-0 edit-item btn-edit-{{$key}}">
                                        edit
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
                                <button id="add-item-{{$key}}" name="{{$key}}"
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
         @endforeach

        <div class="card">
            <div class="card-header" role="tab" id="heading1">
                <h5 class="mb-0">
                    <a class="text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#collapse1" role="button" aria-expanded="true" aria-controls="collapse1">
                        database
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse1" class="collapse show" role="tabpanel"
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
                       href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                        application
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse2" class="collapse" role="tabpanel"
                 aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                    mail
                </div><!-- /.card-body -->
            </div><!-- /.collapse -->
        </div><!-- /.card -->
        <div class="card">
            <div class="card-header" role="tab" id="heading3">
                <h5 class="mb-0">
                    <a class="collapsed text-body d-block p-3 m-n3" data-toggle="collapse"
                       href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                        aws
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse3" class="collapse" role="tabpanel"
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
                       href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                        pusher
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse4" class="collapse" role="tabpanel"
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
                       href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                        timezone
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse5" class="collapse" role="tabpanel"
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
                       href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">
                        theme
                    </a>
                </h5>
            </div><!-- /.card-header -->
            <div id="collapse6" class="collapse" role="tabpanel"
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
