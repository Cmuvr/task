@extends('layouts.app')

@section('scripts')
    @parent
    <script src="{{ asset('bootstrap-validator/js/validator.js') }}"></script>
@endsection

@section('content')
<div>
    {{--@auth--}}
    @include('includes.create_task')
    {{--@endauth--}}
</div>

<div>
    @include('includes.status_blocks');
</div>

@endsection