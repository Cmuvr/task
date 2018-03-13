@extends('layouts.app')

@section('scripts')
    @parent
    <script src="{{ asset('bootstrap-validator/js/validator.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection

@section('content')
<div>
    {{--@auth--}}
    @include('includes.create_task')
    @include('includes.create_comment')
    {{--@endauth--}}
</div>

<div>
    @include('includes.status_blocks');
</div>

@endsection