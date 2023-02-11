
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Employee Registration Form</h1>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action=""  id="Form" method="POST" >
                                    <div class="row">                   
                                        <div class="col-sm-1 col-md-1 col-lg-1 mt-3">
                                            <label for="EmployeeID" class="form-label">ID</label>
                                            <input type="text" class="form-control " id="emp_id" name="emp_id" placeholder="ID"  >
                                        </div>
                                          <div class="col-sm-2 col-md-4 col-lg-4 mt-3">
                                            <label for="Employee Name" class="form-label">Employee Name</label>
                                            <input type="text" class="form-control" id="emp_name" name="emp_name" placeholder="Name" required>
                                        </div>
                                        
                                          <div class="col-sm-1 col-md-5 col-lg-5 mt-3">
                                            <label for="inputAddress" class="form-label">Employee Address</label>
                                            <input type="text" class="form-control" id="emp_address" name="emp_address" placeholder="Address"  required>
                                          </div>

                                          <div class="col-sm-1 col-md-2 col-lg-2 mt-3">
                                            <label for="inputprimarynumber"  class="form-label">PrimaryNumber</label>
                                            <input type="tel" class="form-control" id="emp_primaryno" name="emp_primaryno" placeholder="PrimaryNumber" pattern="[7-9]{1}[0-9]{9}" maxlength="10" inputmode="numeric" required >
                                  
                                          </div>
                                    </div>

                                    <div class="row">
                                          <div class="col-sm-1 col-md-3 col-lg-2 mt-5">
                                              <label for="inputsecondarynumber" class="form-label">SecondaryNumber</label>
                                              <input type="tel" class="form-control" id="emp_secondarynumber" name="emp_secondarynumber" placeholder="SecondaryNumber" pattern="[7-9]{1}[0-9]{9}" maxlength="10" inputmode="numeric" required >
                                          </div>

                                          <div class="col-sm-1 col-md-3 col-lg-3 mt-5">
                                              <label for="inputemail" class="form-label">Email</label>
                                              <input type="email" class="form-control" id="emp_email" name="emp_email" placeholder="Email"  required>
                                          </div>
                                  
                                          <div class="col-sm-1 col-md-4 col-lg-2 mt-5">
                                                  <h6>Gender </h6>
                                                  <div class="form-check form-check-inline mb-0 me-4 mt-2">
                                                    <input class="form-check-input" type="radio" name="emp_gender" value="female"
                                                      />
                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                  </div>
                                                  <div class="form-check form-check-inline mb-0 me-4">
                                                    <input class="form-check-input" type="radio" name="emp_gender" value="male" required  />
                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                  </div>
                                                  
                                          </div>

                                          <div class="col-sm-1 col-md-2 col-lg-2 mt-5">
                                            <label class="form-label" for="formpassword">Password</label>
                                              <input type="password" id="emp_password" name="emp_password" autocomplete="on" class="form-control" placeholder="Password" minlength="5"  maxlength="8" required />
                                              <p class="error-message"></p>
                                               <p class="password-rules"></p>
                                              <label class="form-label" for="form3Example8"></label>
                                          </div>

                                          <div class="col-sm-1 col-md-2 col-lg-2 mt-5">
                                            <label class="form-label" for="formphoto">Upload Photo</label>
                                              <input type="file" class="form-control-sm" id="emp_photo" name="emp_photo" accept=".jpg,.png,.jpeg/" placeholder="Photo"  onchange="loadFile(event)">
                                              <p style="margin-top:12px"><img id="output" width="150px"></p>
                                              <label class="form-label" for="form3Example8"></label>
                                          </div>
                                        </div>                    						

                                    <div class="row">
                                          <div class="col-sm-1 col-md-3 col-lg-2 mt-3">
                                            <label class="form-label" for="formdropdown">Designation</label>
                                              <select class="select" style="height:35px;" id="emp_designation"  name="emp_designation"    class="form-select" required>
                                                  <option value="Designation" hidden selected>Designation</option>
                                                  <option value="Jr.Developer">Jr.Developer</option>
                                                  <option value="Sr.Developer">Sr.Developer</option>
                                                  <option value="Full Stack Devloper">Full Stack Devloper</option>
                                              </select>                                             
                                          </div>
                                         

                                          <div class="col-sm-1 col-md-2 col-lg-2 mt-3">
                                            <label class="form-label" for="form3Example9">Joining Date</label>
                                              <input type="date" id="emp_joiningdate" name="emp_joiningdate" class="form-control"  placeholder="Joining Date" required />
                                          </div>

                                          <div class="col-sm-1 col-md-2 col-lg-2 mt-3">
                                            <label class="form-label" for="form3Example9">DOB</label>
                                              <input type="date" id="emp_dob" name="emp_dob" class="form-control"  placeholder="DOB" required />
                                            </div>
                                  
                                            <div class="col-sm-1 col-md-3 col-lg-3 mt-3">
                                                <label class="form-label" for="form3Example9">Adhar Card</label>
                                              <input type="text"  id="emp_adharcard" name="emp_adharcard"  class="form-control" class="form-control"  placeholder="Adhar Card"  inputmode="numeric" maxlength="12" required />
                                              <label class="form-label" for="form3Example90"></label>
                                            </div>
                                  
                                            <div class="col-sm-1 col-md-2 col-lg-2 mt-3">
                                                <label class="form-label" for="form3Example9">Pan Card</label>
                                              <input type="text" id="emp_pancard" name="emp_pancard" class="form-control"  placeholder="Pan Card" maxlength="10"  required/>
                                              
                                              <label class="form-label" for="form3Example99"></label>
                                            </div>

                                    <div class="row">
                                          <div class="col-sm-1 col-md-12 col-lg-12 text-right">
                                          <button class="btn btn-primary mt-3" type="button" name="btn_save" id="btn_save">Submit</button>
                                          </div>
                                    </div>

                                    <!--div class="row">
                                        <div class="col-sm-1 col-md-12 col-lg-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle">Cancle</button>

                                        </div>
                                    <div-->
                                    
                                </form>
                                
                            </div>
                            
                                <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/form_create.js"></script>
                               <script> 
                                //For adhar card                           
                                  function addDash(element) 
                                  {
                                    let ele = document.getElementById(element.id);
                                    ele = ele.value.split('-').join('');
                                    let finalVal = ele.match(/.{1,4}/g).join('-');
                                    document.getElementById(element.id).value = finalVal;
                                  }
                                  //For photo preview
                                  var loadFile=function(event)
                                  {
                                    var image=document.getElementById('output');
                                    image.src=URL.createObjectURL(event.target.files[0]);
                                  };
                                  //for current date
                                  var date = new Date();
                                  var day = date.getDate();
                                  var month = date.getMonth() + 1;
                                  var year = date.getFullYear();
                                  if (month < 10) month = "0" + month;
                                  if (day < 10) day = "0" + day;
                                  var today = year + "-" + month + "-" + day;       
                                  document.getElementById("emp_joiningdate").value = today;
                                  document.getElementById("emp_dob").value = today;

</script>

                         
    
                                </script>
                                
                            </div>
                        </div>
                    </div>
</div>

             
                  
