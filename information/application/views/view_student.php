<!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Student Details</h3>
        </div>
        <div class="box-body">
            <div class="col-xs-6">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Roll</td>
                            <td>#<?php echo $result->student_roll; ?></td>
                        </tr>
                        <tr>
                            <td>Student Name</td>
                            <td><?php echo $result->student_name; ?></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><?php echo $result->student_email; ?></td>
                        </tr>
                        <tr>
                            <td>Sex</td>
                            <td>
                                <?php
                                if($result->student_sex == "F"){
                                    echo "Female";
                                }else{
                                    echo "Male";
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td><?php echo $result->student_semester; ?></td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td><?php echo $result->student_department; ?></td>
                        </tr>
                        <tr>
                            <td>Session</td>
                            <td><?php echo $result->student_session; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?php echo $result->student_address; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->