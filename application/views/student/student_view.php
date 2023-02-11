<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<style>
/* .lable{
background-color:white;
position:absolute;
}

.inpu{
        margin-top:-15px;
} */


c{
    color:red;
    font-size:14px;
    font-weight:500;
}

.bord{

    border:2px solid grey;
    border-radius: 10px;


}
.bords{

border:2px solid grey;
border-radius: 10px;


}
.heads{
    margin-left:22px;
    margin-top:-15px;
    background:white;
    width: 205px;
    color:#0161b5;
    font-weight:800;
    padding-left:5px;
 

}

.head{
    margin-left:22px;
   font-size:25px;
   margin-top:-25px;
    background:white;
    width: 110px;
    color:#0161b5;
    font-weight:800;
    padding-left:5px;  
}

.dt{
    margin-top:-40px;
    margin-bottom:-10px;
}
.twelve h1 {
    color:#0161b5;
    font-size: medium;
    margin: 0 auto;
}


/* Button css */

.btn-edit{
    background: #FFBF00 ;
    background-size: 100% 100%;
    background-position: right bottom;
    transition: all .4s ease-out;
    border: none;
    margin-top:20px;
}
.btn-save{
    background: linear-gradient(to right, #067e5c 50%, #1273eb 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all .4s ease-out;
    border: none;
    margin-top:20px;
    margin-left:820px;
}



</style>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->         
            <div class="main-content">
                <div class="breadcrumb ">           
                <div class="twelve"><h1>Student Registration</h1></div>
             <br>
                <div class=" border-top "></div>
                <div class="row card p-3">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class=" p-2">
                        <div class="bord"><h3 class=" heads">Basic Information</h3>
                            
                            
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row p-3">
                                        <div class="col-sm-12 col-md-4 col-lg-3 form-group mb-2">
                                            <label class="labnm"> Name <c>*</c></label>
                                            <input class="form-control" id="name" type="text" placeholder=" " name="name" value="" />
                                        </div>

                                        <div class="col-sm-12 col-md-4 col-lg-2 form-group mb-2">
                                            <label for="job">Birth Date <c>*</c></label>
                                            <input class="form-control" id="workday" type="date"  name="workday" value="" />
                                        </div>

                                        <div class="col-sm-12 col-md-4 col-lg-1 form-group mb-2">
                                            <label for="firstName1">age <c>*</c></label>
                                            <input class="form-control" id="lastName" type="text" placeholder="" name="age" value="" />
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="phone">Primary Mobile No. <c>*</c></label>
                                            <input class="form-control" id="phone" type="number" maxlength="10" placeholder="" name="phone" value="" />
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="phone">Secondary Mobile No. <c>*</c></label>
                                            <input class="form-control" id="sphone" type="number" maxlength="10" placeholder="" name="sphone" value="" />
                                        </div>

                                                                      
                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                        <label for="picker1">Gender <c>*</c></label>
                                           <div class="d-flex">
                                           <label class="radio radio-primary">    </label>
                                         <input type="radio" name="radio" value="0"><span class="pr-1">Male</span><span class="checkmark"></span>
                                      

                                      <label class="radio radio-primary">    </label>
                                    <input type="radio" name="radio" value="1"><span class="pr-1">Female</span><span class="checkmark"></span>
                                  

                                   <label class="radio radio-primary">    </label>
                                    <input type="radio" name="radio" value="1"><span class="pr-1">Other</span><span class="checkmark"></span>
                               
                                    </div>

                                 </div>

                                 <div class="col-sm-12 col-md-6 col-lg-3 form-group mb-2">
                                            <label for="phone">Email <c>*</c></label>
                                            <input class="form-control" id="email" type="text" placeholder="" name="email" value="" />
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mt-0">
                                            <label for="picker1">Designation <c>*</c></label>
                                            <select class="form-control js-states" name="department" id="department">
                                                <option value="1">Web Developer</option>
                                                <option value="2">data syntist</option>
                                                <option value="3">web designer</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label  for="picker1">Language <c>*</c></label>
                                            <select class="form-control js-states" name="language" id="language">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div>

                                       
                                        
                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="job">Adhar number <c>*</c></label>
                                            <input class="form-control" id="jobtitle" type="text" placeholder="" name="jobtitle" value="" />
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="job">Pancard number <c>*</c></label>
                                            <input class="form-control" id="jobtitle" type="text" placeholder="" name="jobtitle" value="" />
                                        </div>
                                          
                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="job">Joining Date <c>*</c></label>
                                            <input class="form-control" id="workday" type="date"  name="workday" value="" />
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="phone">Driver Licence <c>*</c></label>
                                            <input class="form-control" id="licence" type="text"  placeholder="" name="licence" value="" />
                                        </div>

                                        

                                        <div class="col-sm-12 col-md-6 col-lg-3 form-group mb-2">
                                            <label for="phone">Skill Description <c>*</c></label>
                                            <textarea class="form-control" id="skills" type="text" placeholder="" name="address" value="" ></textarea>
                                        </div>
                                        

                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="phone">Photo <c>*</c></label>
                                            <input type="file" class="form-control" id="photo"   onclick="clearImage()" onchange="preview()"  name="photo" value="" />
                                           
                                        </div> <img style="height: 100px; margin-left: 15px;" class="mt-2"  id="frame" src="<?php echo base_url() ?>Assets\images\168724.png " class="img-fluid" />
                                        


                                       
                                        </div>
                                     
                                        
                                        </div>
                                        </div>
                                
                            
                        
                    
                        <div class="p-2">
                        <div class="bords mt-2"><p class=" head">Address<p>
                            <div class="p-4 dt">
                            
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                       
                                        <div class="col-sm-12 col-md-6 col-lg-3  form-group">
                                            <label for="phone">Address <c>*</c></label>
                                            <textarea class="form-control" id="address" type="text" placeholder="" name="address" value="" ></textarea>
                                        </div>

                                        <div class=" col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="picker1">State <c>*</c></label>
                                            <select class="form-control js-states" id="state" name="state">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div>
                                     
                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="picker1">City <c>*</c></label>
                                            <select class="form-control js-states" id="city" name="city">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div>
                                       
                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group mb-2">
                                            <label for="phone">Pincode <c>*</c></label>
                                            <input class="form-control" id="pincode" type="number" maxlength="6" placeholder="" name="pincode" value="" />
                                        </div>

                                       

                                        <!-- <div class="col-md-12 text-right">
                                            <button class="btn btn-success text-white" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check "></i> Save</button>
                                            <button class="btn btn-primary text-white" type="button" name="cancle" id="cancle"><i class="fa-sharp fa-solid fa-pen-to-square"><a href="#" style="color:white;"></i> Edit</button>

                                        </div>                                     -->
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>    

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/registration_create.js"></script>

<!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
              $("#department").select2({   });
              $("#language").select2({   });
              $("#state").select2({   });
              $("#city").select2({   });
    </script>
<script>
                                            function preview() {
                                                frame.src = URL.createObjectURL(event.target.files[0]);
                                            }
                                            function clearImage() {
                                                document.getElementById('formFile').value = null;
                                                frame.src = "";
                                                
                                            }

                                            
                                        </script>
                                        </script>
                   
                       
     