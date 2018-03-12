@foreach($statuses as $status)
    <div class="col-md-4">
        <h1 style="text-align: center">{{$status->name}}</h1>
        <div class="panel-group" id="accordion_{{$status->id}}">
            <div class="panel panel-default">
                <!-- Заголовок 1 панели -->
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$status->id}}">1. Bootstrap 3 - Введение</a>
                    </h4>
                </div>
                <div id="collapse_{{$status->id}}" class="panel-collapse collapse in">
                    <!-- Содержимое 1 панели -->
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


