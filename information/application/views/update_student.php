<!-- Main content -->
<section class="content">
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Update Student Information</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <form action="<?php echo base_url(); ?>student/update_student_commit.html" method="post" role="form">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Roll</label>
                        <input type="hidden" name="roll" value="<?php echo $result->student_roll; ?>"/>
                        <input type="text" name="roll" value="<?php echo $result->student_roll; ?>" disabled class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $result->student_name; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" value="<?php echo $result->student_email; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Sex</label>
                        <select  class="form-control" name="sex">
                            <?php if($result->student_sex == "F"){?>
                                <option value="F" selected>Female</option>
                                <option value="M">Male</option>
                            <?php }else if($result->student_sex == "M"){ ?>
                                <option value="F">Female</option>
                                <option value="M" selected>Male</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Semester</label>
                        <input type="text" name="semester" value="<?php echo $result->student_semester; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="department" value="<?php echo $result->student_department; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Session</label>
                        <input type="text" name="session" value="<?php echo $result->student_session; ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" rows="3" class="form-control"><?php echo $result->student_address; ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                    </div>
            </form>
        </div>
        <div class="box-footer">

        </div><!-- /.box-header -->
    </div>
</section><!-- /.content -->

