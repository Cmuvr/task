@extends('layouts.app')

@section('scripts')
    @parent
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection

@section('content')
<div>
    @auth
        <button type="button" class="btn btn-primary btn-lg js_create_task" data-toggle="modal" data-target="#modelform">
            Create task
        </button>
    
        <button type="button" class="btn btn-primary btn-lg js_get_json" data-toggle="modal" data-target="#modelform">
            Get json
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modelform" tabindex="-1" role="dialog" aria-labelledby="createModel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                </div>
            </div>
        </div>
    @endauth
</div>

<div>
    @include('includes.status_blocks');
</div>

@endsection