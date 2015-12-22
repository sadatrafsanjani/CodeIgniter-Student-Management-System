<?php require_once("modal/course.php"); ?>
<!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <button id="add" class="btn btn-primary pull-left">Add New</button>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Course Id</th>
                    <th>Course Name</th>
                    <th>Credit</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($results as $list){ ?>
                    <tr>
                        <td><?php echo $list->course_id; ?></td>
                        <td><?php echo $list->course_name; ?></td>
                        <td><?php echo $list->course_credit; ?></td>
                        <td>
							<a href="<?php echo base_url(); ?>course/update_course/<?php echo $list->course_id; ?>">Update</a> |
							<a href="<?php echo base_url(); ?>course/delete_course/<?php echo $list->course_id; ?>">Delete</a>
						</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!-- /.box-body -->
        <div class="box-footer with-border text-center">
            <p><?php echo $links; ?></p>
        </div>
    </div><!-- /.box -->
</section><!-- /.content -->