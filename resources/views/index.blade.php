@extends('layouts.app')

@section('content')
    {{--@auth--}}
        @include('includes.create_task')
    {{--@endauth--}}
<div>
    <div class="col-md-4">
        <h1 style="text-align: center">TODO</h1>
        <div class="panel-group" id="accordion_todo">
            <div class="panel panel-default">
                <!-- Заголовок 1 панели -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Bootstrap 3 - Введение</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <!-- Содержимое 1 панели -->
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <h1 style="text-align: center">DOING</h1>
        <div  class="panel-group" id="accordion_doing">
            <div class="panel panel-default">
                <!-- Заголовок 1 панели -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1. Bootstrap 3 - Введение</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <!-- Содержимое 1 панели -->
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <h1 style="text-align: center">DONE</h1>
        <div class="panel-group" id="accordion_done">
            <div class="panel panel-default">
                <!-- Заголовок 1 панели -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1. Bootstrap 3 - Введение</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <!-- Содержимое 1 панели -->
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection