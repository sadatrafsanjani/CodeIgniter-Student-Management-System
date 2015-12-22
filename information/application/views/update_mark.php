<!-- Main content -->
<section class="content">
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title"><?php echo $heading; ?></h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <form action="<?php echo base_url(); ?>mark/update_mark_commit.html" method="post" role="form">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Mark</label>
                        <input type="hidden" name="id" value="<?php echo $result->mark_id; ?>"/>
                        <input type="text" name="mark" value="<?php echo $result->mark_number; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                    </div>
				</div>
            </form>
        </div>
        <div class="box-footer">

        </div><!-- /.box-header -->
    </div>
</section><!-- /.content -->

