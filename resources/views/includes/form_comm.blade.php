<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="createModel">Add Comment for the {{$task_name}}</h4>
</div>
<div class="modal-body">
    <form method="post" action="{{asset('addcomment')}}" data-toggle="validator" role="form">
        <div class="form-group">
            <label for="exampleInputDescription">Description for task</label>
            <textarea name="desc"
                      class="form-control"
                      rows="3"
                      id="exampleInputDescription"
                      maxlength="255"
                      minlength="1"
                      placeholder="Description for task"
                      required></textarea>
        </div>
        <input name="task_id" type="text" value="{{$id}}" hidden>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
