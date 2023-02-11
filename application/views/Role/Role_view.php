
<!-- <head>
       <link rel="stylesheet" href="role_create.css">
       </head> -->
       <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Role Create View</h1>
                  
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- <div class="card-title mb-3">Form Inputs</div> -->
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                        <!-- <div class="col-md-4 form-group mb-3">
                                            <label for="firstName1">Role Name</label>
                                            <input class="form-control" id="role" type="text" placeholder="Enter your role Name" name="role" value="" />
                                        </div>     -->
                                        <div class="col-md-4 mt-4 inputBox form-group mb-3">
                                          <input type="text" id="name" name="name" required onkeyup="this.setAttribute('value', this.value);" value="" />
                                            <label>Role name</label>
                                        </div>
                                       
                                      
                                        <div class="col-md-12">
                                            <!-- <button class="custom-btn btn-1" type="button" name="btn_save" id="btn_save"><span>Submit</span></button> -->
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><span>Submit</span></button>

                                            <button class="btn btn-primary" type="button" name="btn_edit" id="btn_edit"><span>Edit</span></button>

                                        </div>
                                        <!-- <div class="col-md-12">
                                            <button class="btn btn-primary" type="button" name="btn_edit" id="btn_edit">Edit</button>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/role_create.js"></script>
<script>
    $('#Form').bind('keydown', function(event) {
    if (event.ctrlKey || event.metaKey) {
    switch (String.fromCharCode(event.which).toLowerCase()) {
    case 's':
    event.preventDefault();
    // alert('ctrl-s');
    saveperform();
    break;

    }
      $(function(){
    $("#role").focus();
    });

    }
    });
</script> 
                       
               
            