@foreach($statuses as $status)
    <div class="col-md-4">
        <h1 style="text-align: center">{{$status->name}}</h1>
        <div class="panel-group" id="accordion_{{$status->id}}">

            @foreach($status->task as $task)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_{{$status->id}}" href="#collapse_{{$task->id}}">{{$task->name}}</a>
                        </h4>
                    </div>

                    <div id="collapse_{{$task->id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{$task->desc}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endforeach


