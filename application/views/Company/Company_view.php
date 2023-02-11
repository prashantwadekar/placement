<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
<style>



.dform-group label{
    position: absolute;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #1273eb;
    background: #ffffff;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    top: -25px;
    left: 24px;
    padding: -1px 7px;
    z-index: 10;
    text-align: left;
}
.fform-group label{
    position: absolute;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #1273eb;
    background: #ffffff;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    top: -30px;
    left: 24px;
    padding: -1px 7px;
    z-index: 10;
    text-align: left;
}
.form-group label{
    position: absolute;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #1273eb;
    background: #ffffff;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 400;
    top: -25px;
    left: 7px;
    padding: -1px 7px;
    z-index: 10;
    text-align: left;
}

.select2-container--default.select2-container--open.select2-container--below .select2-selection--single, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple
{
    color: #0161b5;
    background-color: #fff;
    border-color: #0161b5;
    border: 2px solid #0161b5;
}

.select2-container--classic .select2-selection--multiple:hover{
    color: #0161b5;
    background-color: #fff;
    border-color: #0161b5;
    border: 1px solid #0161b5;
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple:hover{
    color: #0161b5;
    background-color: #fff;
    border-color: #0161b5;
    border: 2px solid #0161b5;
}

.select2-container--default.select2-container--open.select2-container--below .select2-selection--single:hover
{
    color: #0161b5;
    background-color: #fff;
    border-color: #0161b5;
    border: 1px solid #0161b5;
}

.select2-container--default .select2-selection--single:hover
{
    border: 1px solid #0161b5;
}
.select2-container--classic .select2-selection--multiple :hover
{
    border: 1px solid #0161b5;
}


c{
    color:red;
    font-size:14px;
    font-weight:500;
}

.bord{

    border:2px solid grey;
    border-radius: 10px;
    padding: 7px;
}
.bords{

border:2px solid grey;
border-radius: 10px;
}
.heads{
    margin-left:22px;
    margin-top:-15px;
    background:white;
    width: 204px;
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

/* Button css */
.btn-md{
    font-size:17px;
}

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
    margin:0 auto;
} 

.btnright:not(:disabled):not(.disabled) {
    margin-right: -12px;
}
 .text-right {
    text-align: right !important;
} 
.header{
    margin-left:22px;
   font-size:15px;
   margin-top:2px;
    width: 50px;
    color:#0161b5;
    font-weight:800;
    
}
.special {
  font-weight: bold !important;
  color: #fff !important;
  background: #bc0000 !important;
  text-transform: uppercase;
}

.select2-container--default .select2-selection--single {
    background-color: white;
    border: 1px solid #ced4da;
    border-radius: 5px;
    cursor: text;
    margin-top: -15px;
    height:32px;
    text-bottom:20px;
}

.select2-container--classic .select2-selection--multiple {
    background-color: white;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: text;
    margin-top: -15px;
    outline: 0;
    min-height:50px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -15px;
    position: absolute;
    top: 50%;
    width: 0;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    margin-top:4px;
    /* line-height: 37px; */
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    color: #1273EB;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 0px;
    margin-top: 11px;
    padding: 0 5px;
    font-size:11px;
}

@media only screen and (max-width: 768px) {
   
.form-group{
       height: 20vh;
       width: 80%;
       
       margin-top: 50%;
       z-index: 2;
   }
   .mdwn{ 
    margin-top:15px;!important
   }
   .fdwn{ 
    margin-top:35px;!important
   }
   .gap{
    margin-top:-30px;!important
   }
}
/* @media only screen and (max-width: 425px)
{
    .breadcrumb {
  background: transparent;
  justify-content: center;
  align-items: center;
  margin: 7px 0 1.25rem;

 }
} */

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #eee;
  border-radius: 0.25rem;
 }
 .breadcrumb {
  background: transparent;
  justify-content: center;
  align-items: center;
  margin: 7px 0 1.25rem;

 }
.breadcrumb img{
  margin-top: -70px;
  margin-bottom: -45px;
  
}

  .breadcrumb h4 {
    margin-left:2px;
    margin-top: -20px;
    position: absolute;
    color: var(--white);
    text-align:center;
    font-family: Frozen;
    font-weight: 600;
    font-size: 1.4rem;
    line-height: 1;
     }

     .btn1{
    background-color:#1a8ae5;
    width: 90px;
    height: 40px;
    font-size:15px;
    margin:-1px;
}

.btn1:before {
  height: 0%;
  width: 2px;
}
.btn1:hover {
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .5), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
}

.btn2{
    background-color:#b284be;
    width: 90px;
    height: 40px;
    font-size:15px;
}

.btn2 {
  background: rgb(96,9,240);
  background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%); */
  border: none;
  
}
.btn2:before {
  height: 0%;
  width: 2px;
}
.btn2:hover {
  box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
              -4px -4px 6px 0 rgba(116, 125, 136, .5), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
}

    </style>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
              <div class="breadcrumb">
                <img height="50px" width="280px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
                    <h4>Add Company</h4>
                    <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
                </div>
                <div style="margin-top:-10px;" class=" border-top"></div>
                <div class="row card p-3">
                    <div class="col-12">
                        <div class=" p-2">
                        <div class="bord"><h3></h3>
                        <form id="Form" action="" method="POST">
<div class="row p-3">

                                       <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                            <label for=""> Company Name </label>
                                            <input class="form-control" id="company_name" type="text" placeholder=" "  name="company_name" />
                                        </div>                                                                         

                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                            <label for=""> Website </label>
                                            <input class="form-control" id="company_website" type="text" placeholder=" "  name="company_website" />
                                        </div>                                                                       

                                        
                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                            <label for=""> Email </label>
                                            <input class="form-control" id="company_email" type="text" placeholder=" "  name="company_email" />
                                        </div>  
                                                  <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group  mt-0">
                                            <label for="phone">Email <c>*</c></label>
                                            <input class="form-control" id="std_email" type="text" placeholder="" name="std_email"  />
                                        </div> -->
                                        
                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                           <label for="phone">Contact No. </label>
                                            <input class="form-control" id="company_contact" type="tel" maxlength="10" placeholder="" name="company_contact"/>
                                        </div>

                                        
</div>

<div class="row gap p-3">


                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                            <label for=""> Contact Person Name </label>
                                            <input class="form-control" id="company_name" type="text" placeholder=" "  name="company_name" />
                                        </div>  

                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                           <label for="phone">Contact Person No. </label>
                                            <input class="form-control" id="contact_no" type="tel" maxlength="10" placeholder="" name="contact_no"/>
                                        </div>

        

         
        
    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 form-group custom-dropdown  mt-0">
        <label for="">Company Type</label>
            <select name="company_type" id="company_type"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                    <option selected disabled  value="0"></option>
                    <option value="1">Private Limited Company</option>
                    <option value="2">Public Limited Company</option>
                    <option value="3">Section 8 Company</option>
                    <option value="4">limited liability company (LLC)</option>
             </select>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 form-group mdwn custom-dropdown ">
           <label for="">Branch Location</label>
           <select name="branch_location" id="branch_location" class="js-states form-control" multiple="multiple">
           <!-- <option selected disabled  value="0"></option> -->
           <option data-countryCode="1" >Mumbai</option>
           <option data-countryCode="2">Delhi</option>
           <option data-countryCode="3">Hydrabad</option>
           <option data-countryCode="4">Pune</option>
           <option data-countryCode="5">Bengaluru </option>
          
           </select>
       </div>
   
       <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">Branch<c>*</c></label>
           <select name="std_branch" id="std_branch"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Demo</option>
           <option value="2">Demo1</option>
            <option value="3">Registration</option>
          </select>
       </div> -->
</div>

<div class="row gap p-3">
         <div class="col-sm-12 col-md-12 col-lg-3  col-xl-3 form-group  mt-0">
            <label for="phone">Address </label>
            <textarea class="form-control" id="company_address" type="text" placeholder="" name="company_address" value="" ></textarea>
        </div>

       
        <div class="col-sm-12 col-md-12 col-lg-1 col-xl-1 form-group  mt-0 mb-2">
            <label for="phone">Pincode </label>
            <input class="form-control" id="company_pincode" type="text" maxlength="6" placeholder="" name="company_pincode"  />
        </div>

        <!-- <div class="col-sm-12 col-md-6 col-lg-2  col-xl-2 form-group  mt-1">
            <label for="job">Adhar number <c>*</c></label>
            <input class="form-control" id="std_adharnumber" type="text" placeholder="" name="std_adharnumber" />
        </div> -->

        

        <!-- <div class="col-sm-12 col-md-6 col-lg-2 form-group  mt-0">
            <label for="phone">Mobile No. <c>*</c></label>
            <input class="form-control" id="std_mobileno" type="tel" maxlength="10" placeholder="" name="std_mobileno"/>
        </div> -->

       
         <div class="col-sm-12 col-md-12 col-lg-3  col-xl-3 form-group  mt-0">
            <label for="phone">About Us</label>
            <textarea class="form-control" id="about_us" type="text" placeholder="" name="about_us" value="" ></textarea>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 fdwn fform-group ">
            <label for="phone">Company Logo</label>
            <input type="file" class="form-control" id="company_logo"   onclick="clearImage()" onchange="preview()"  name="std_adharphoto" value="" />
             <img style="height: 100px; width: 120px; margin-left: 15px;" class="mt-2"  id="frame" src="<?php echo base_url() ?>Assets\images\photo.jpg " class="img-fluid" />
   
        </div>
      
</div>


<div class="row">
    <!-- <div class="col-lg-12 text-right ">
            <button class="btn btn1 text-white" type="button" name="btn_save" id="btn_save">Submit</button>&nbsp;
            <button class="btn btn2 text-white" type="button" name="cancle" id="cancle"><a href="Edit" style="color:white;">Edit</a></button> 
    </div>    -->
    <div class="col-md-12 text-right">
                                            <button class="btn btn-md btn-success btnright text-white" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check "></i> Save</button>
                                            <button class="btn btn-md btn-warning text-white" type="button" name="cancle" id="cancle"><i class="fa-sharp fa-solid fa-pen-to-square"><a href="edit" style="color:white;"></i> Edit</button>

                                        </div>
 </div>
</form>

</div>
    </div>
        </div>
           </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        
             
              $("#company_type").select2({ });

             
            //   $("#std_country").select2({});
             
              $("#branch_location").select2({ theme:"classic"});
             
            

             
      
                                var loadadharFile=function(event)
                                  {
                                    var image=document.getElementById('adhar-output');
                                    image.src=URL.createObjectURL(event.target.files[0]);
                                  };

                                  var loadphotoFile=function(event)
                                  {
                                    var image=document.getElementById('photo-output');
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
                                  document.getElementById("std_dob").value = today;
                                 
    </script>
      <script>
                                            function preview() {
                                                frame.src = URL.createObjectURL(event.target.files[0]);                                                
                                            }
                                            function clearImage() {
                                                document.getElementById('std_photo').value = null;
                                                frame.src = "";
                                                
                                            }

                                            
                                        </script>            
                                        <script>
                                            function preview1() {
                                                frame1.src = URL.createObjectURL(event.target.files[0]);
                                            }
                                            function clearImage1() {
                                                document.getElementById('std_adharphoto').value = null;
                                                frame1.src = "";
                                                
                                            }

                                            
                                        </script>

                                        
<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/studentregistrationform_create.js"></script>