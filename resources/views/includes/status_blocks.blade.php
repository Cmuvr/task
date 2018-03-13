@foreach($statuses as $status)
    <div class="col-md-4">
        <h1 style="text-align: center">{{$status->name}}</h1>
        <div class="panel-group" id="accordion_{{$status->id}}">
            @foreach( $status->task as $task)
                <div class="panel panel-default" style="margin-top: 30px;">
                    <div class="panel-heading" style="background: #c8d4d6;">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_{{$status->id}}" href="#collapse_{{$task->id}}">{{$task->name}}</a>
                        </h4>
                    </div>
                    @auth
                        <div class="panel panel-default" style="background: #ecf1f3;">
                            <button data-toggle="modal" data-target="#createTask">Редактировать</button>
                            <button class="js_add_comment" data-toggle="modal" data-target="#createComment" value="{{$task->id}}">Добавить комментарий</button>
                        </div>
                    @endauth
                    <div id="collapse_{{$task->id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{$task->desc}}
                        </div>
                        @foreach($task->comment as $comment)
                            <div class="panel-body" style="background: #dde9eb;">
                                {{$comment->desc}}
                            </div>
                        @endforeach

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endforeach


