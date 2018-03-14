<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="createModel">Add task</h4>
</div>
<div class="modal-body">
    <form method="post" action="{{$task == null ? asset('addtask'): asset('updatetask')}}" data-toggle="validator" role="form">
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input name="name"
                   type="text"
                   class="form-control"
                   id="exampleInputName"
                   placeholder="Name"
                   maxlength="60"
                   minlength="6"
                   required
                   value="{{$task!=null ?$task->name:''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Description for task</label>
            <textarea name="desc"
                      class="form-control"
                      rows="3"
                      id="exampleInputDescription"
                      maxlength="255"
                      minlength="2"
                      placeholder="Description for task"
                      required>{{$task!=null ? $task->desc:''}}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputStatus">Status</label>
            <select name="status_id" class="form-control" required>
                <option selected {{$task == null? 'disabled': 'value='.$status_id}}>{{$task != null ? $status_name: 'select status please'}}</option>
                @foreach($statuses as $status)
                    @if($status->name != $status_name)
                        <option value="{{$status->id}}">{{$status->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        @if($task != null)
            <input name="id" type="text" value="{{$task->id}}" hidden>
        @endif
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>