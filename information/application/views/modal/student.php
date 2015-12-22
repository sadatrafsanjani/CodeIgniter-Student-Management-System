<div class="example-modal">
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student Information</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url(); ?>student/add_student.html" method="post" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Roll">Student Roll</label>
                                <input type="text" name="roll" class="form-control" id="roll" placeholder="Roll">
                            </div>
                            <div class="form-group">
                                <label for="Name">Student Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="Email">Student E-Mail</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="Sex">Sex</label>
                                <select class="form-control" name="sex">
                                    <option>-Select-</option>
                                    <option value="F">Female</option>
                                    <option value="M">Male</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Semester">Student Semester</label>
                                <select class="form-control" name="semester">
                                    <option>-Select-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                    <option value="6th">6th</option>
                                    <option value="7th">7th</option>
                                    <option value="8th">8th</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Department">Student Department</label>
                                <select class="form-control" name="department">
                                    <option>-Select-</option>
                                    <option value="111">CSE</option>
                                    <option value="112">ECE</option>
                                    <option value="113">BBA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Session">Session</label>
                                <input type="text" name="session" class="form-control" id="session" placeholder="Session">
                            </div>
                            <div class="form-group">
                                <label for="Address">Student Address</label>
                                <textarea name="address" rows="3" class="form-control"></textarea>
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