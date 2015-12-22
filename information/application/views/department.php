<?php require_once("modal/department.php"); ?>
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
                    <th>Department Id</th>
                    <th>Department Name</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($results as $list){ ?>
                    <tr>
                        <td><?php echo $list->department_id; ?></td>
                        <td><?php echo $list->department_name; ?></td>
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