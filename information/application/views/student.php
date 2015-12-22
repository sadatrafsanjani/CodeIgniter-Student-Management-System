<?php require_once("modal/student.php"); ?>
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
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Semester</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($results as $list){ ?>
                    <tr>
                        <td>
                            <a href="<?php echo base_url(); ?>student/view_student/<?php echo $list->student_roll; ?>">
                                <?php echo $list->student_roll; ?>
                            </a></td>
                        <td><?php echo $list->student_name; ?></td>
                        <td><?php echo $list->student_semester; ?></td>
                        <td><?php echo $list->department_name; ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>student/update_student/<?php echo $list->student_roll; ?>">Update</a> |
                            <a href="<?php echo base_url(); ?>student/delete_student/<?php echo $list->student_roll; ?>">Delete</a>
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