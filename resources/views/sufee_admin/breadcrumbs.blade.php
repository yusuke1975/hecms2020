@section('breadcrumbs')
<div class="col-sm-4">
    <div class="page-header float-left">
        <div class="page-title">
            <h1>{{$page_name}}</h1>
        </div>
    </div>
</div>
<div class="col-sm-8">
    <div class="page-header float-right">
        <div class="page-title">
            <ol class="breadcrumb text-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
{{--
                <li class="active">{{$breadcrumbs}}</li>
--}}
            </ol>
        </div>
    </div>
</div>
@endsection
