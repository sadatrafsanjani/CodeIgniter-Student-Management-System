<!-- Main content -->
<section class="content">
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Update Course Information</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <form action="<?php echo base_url(); ?>course/update_course_commit.html" method="post" role="form">
                <div class="form-group">
                    <label>Course Id</label>
                    <input type="hidden" name="id" value="<?php echo $result->course_id; ?>"/>
                    <input type="text" value="<?php echo $result->course_id; ?>" disabled class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="name" value="<?php echo $result->course_name; ?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Credit</label>
                    <input type="text" name="credit" value="<?php echo $result->course_credit; ?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                </div>
            </form>
        </div>
    </div>
</section><!-- /.content -->

