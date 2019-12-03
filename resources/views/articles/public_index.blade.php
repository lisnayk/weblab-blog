@extends('layouts.public')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @include("articles.items")
                @include('coreui-templates::common.paginate', ['records' => $articles])
            </div>
        </div>
    </div>
@endsection

