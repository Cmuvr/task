@extends('layouts.app')

@section('content')
    {{--@auth--}}
        @include('includes.create_task')
    {{--@endauth--}}
<div>
    @include('includes.status_blocks');
</div>

@endsection