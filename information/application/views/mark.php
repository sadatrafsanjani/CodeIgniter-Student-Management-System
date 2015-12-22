<?php require_once("modal/mark.php"); ?>
<!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Mark</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($results as $list){ ?>
                    <tr>
						<td>
							<a href="<?php echo base_url(); ?>mark/update_mark/<?php echo $list->mark_id; ?>">
							<?php echo $list->student_name; ?>
							</a>
						</td>
                        <td><?php echo $list->mark_number; ?></td>
                        <td>
							<a href="<?php echo base_url(); ?>mark/delete_mark/<?php echo $list->mark_id; ?>">Delete</a>
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