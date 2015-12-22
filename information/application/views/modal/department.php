<div class="example-modal">
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Department Information</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url(); ?>department/add_department.html" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Id">Department Id</label>
                                <input type="text" name="id" class="form-control" id="id" placeholder="Department Id">
                            </div>
                            <div class="form-group">
                                <label for="Name">Department Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Department Name">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div><!-- /.box-body -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->