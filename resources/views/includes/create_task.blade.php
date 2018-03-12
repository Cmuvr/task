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
                <form>
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription">Description for task</label>
                        <textarea name="desc" class="form-control" rows="3" id="exampleInputDescription" placeholder="Description for task"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputStatus">Status</label>
                        <select class="form-control">
                            <option selected disabled>Select the status</option>
                            <option>TODO</option>
                            <option>DOING</option>
                            <option>DONE</option>
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