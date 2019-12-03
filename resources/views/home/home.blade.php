@extends('layouts.app')
@section('copyright')
    It is my copyright
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                @if(false)
                    {{ $my_caption}} Hello world! {!! $title !!}
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection
