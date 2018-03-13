<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createTask">
    Create task
</button>

<!-- Modal -->
<div class="modal fade" id="createTask" tabindex="-1" role="dialog" aria-labelledby="createTaskModel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="createTaskModel">Add task</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{asset('addtask')}}" data-toggle="validator" role="form">
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <div class="help-block">Minimum of 6 characters</div>
                        <input name="name"
                               type="text"
                               class="form-control"
                               id="exampleInputName"
                               placeholder="Name"
                               maxlength="60"
                               minlength="6"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription">Description for task</label>
                        <div class="help-block">Minimum of 20 characters</div>
                        <textarea name="desc"
                                  class="form-control"
                                  rows="3"
                                  id="exampleInputDescription"
                                  maxlength="255"
                                  minlength="2"
                                  placeholder="Description for task"
                                  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputStatus">Status</label>
                        <select name="status_id" class="form-control" required>
                            <option selected disabled>Select the status</option>
                                @foreach($statuses as $status)
                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>