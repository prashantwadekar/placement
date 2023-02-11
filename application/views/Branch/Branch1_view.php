
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Branch</h1>
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="firstName1">Branch name</label>
                                            <input class="form-control" id="branchname" type="text" placeholder="Enter your first name" name="branchname" value="" />
                                        </div>
                                       
                                      
                                      
                                        
                                        
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="picker1">Department</label>
                                            <select class="form-control" name="subject">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle">Cancle</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/branch_create.js"></script>
                   
                       
               
            