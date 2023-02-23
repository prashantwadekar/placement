<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@latest"></script>
    
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

.select2-container--default.select2-container--open.select2-container--below .select2-selection--single:hover, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple:hover
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
    margin-right: -20px;
    font-size:16px;
}
.btnedit:not(:disabled):not(.disabled) {
   
    font-size:16px;
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
    line-height: 37px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    background-color: #5eabef;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 11px;
    padding: 0 5px;
}

@media only screen and (max-width: 768px) {
.form-group{
       height: 9vh;
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
  margin: -3px 0 1.25rem;

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
  /* background: rgb(96,9,240);
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
                    <h4>Employee Registration</h4>
                    <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
                </div>
                <div style="margin-top:-10px;" class=" border-top"></div>
                <div class="row card p-3">
                    <div class="col-12">
                        <div class=" p-2">
                        <div class="bord">
                            <!-- <h3 class=" heads">Basic Information</h3> -->
                        <form role="form" id="Form" action="<?php echo site_url('Employee/update'); ?>" method="post">
<div class="row p-3">
<input class="form-control" id="id" type="text" placeholder=" "  name="id" value="<?php echo $result[0]->id; ?>" hidden> 

<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-3">
    <label for=""> Employee Name </label>
    <input class="form-control" id="fullname" type="text" placeholder=" " name="fullname" value="<?php echo $result[0]->fullname;  ?>" />
</div>

                                       
                                        
                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-3">
           <label for="">Blood Group<c></c></label>
           <select name="bld" id="bld"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Demo</option>
           <option value="2">Demo1</option>
            <option value="3">Registration</option>
           </select>
       </div>
                                        
                                        

                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group  mt-3">
                                            <label for="phone">Email <c></c></label>
                                            <input class="form-control" id="email" type="text" placeholder="" name="email" value="<?php echo $result[0]->email;  ?>" />
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group mt-3">
                                            <label for="dob"> DOB <c></c></label>
                                            <input class="form-control" id="dob" type="date"  name="dob" value="" />
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group mt-3">
                                        <label for="picker1">Gender <c></c></label>
                                        <div class="d-flex ">
                                           <label class="radio radio-primary  mt-0">    </label>
                                         <input type="radio" name="radio" value="0"><span class="pr-1  " style="color:#0161b5;">&nbsp;Male</span><span class="checkmark"></span>
                                         <label class="radio radio-primary"></label>&nbsp;
                                         <input type="radio" name="radio" value="1"><span class="pr-1" style="color:#0161b5;">&nbsp;Female</span><span class="checkmark"></span>
                                         <label class="radio radio-primary">    </label>
                                        <input type="radio" name="radio" value="1"><span class="pr-1" style="color:#0161b5;">&nbsp;Other</span><span class="checkmark"></span>
                                        </div>
                                     </div>

                                     
</div>

<div class="row gap p-3">

          <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group  mt-0">
                  <label for="">Age<c></c></label>
                    <input class="form-control" id="age" type="text" placeholder=" " name="age" value="" />
                      </div>    
          <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
        <label for="">Employee type<c></c></label>
            <select name="emptype" id="emptype"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                    <option selected disabled  value="0"></option>
                    <option value="1">BSC</option>
                    <option value="2">BCOM</option>
                    <option value="3">BCA</option>
             </select>
    </div>
                                        
                                        

        <div class="col-sm-12 col-md-3 col-lg-1 col-xl-1 form-group  mt-0">
        
          <label for="">Cast<c></c></label>
            <select name="Cast" id="Cast"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                    <option selected disabled  value="0"></option>
                    <option value="1">BSC</option>
                    <option value="2">BCOM</option>
                    <option value="3">BCA</option>
             </select>
        </div>

        <div class="col-sm-12 col-md-3 col-lg-1 col-xl-1 form-group  mt-0">
        
          <label for="">Sub-Cast<c></c></label>
            <select name="sCast" id="sCast"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                    <option selected disabled  value="0"></option>
                    <option value="1">BSC</option>
                    <option value="2">BCOM</option>
                    <option value="3">BCA</option>
             </select>
        </div>


                <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
                  <label for="">Qualification<c></c></label>
                    <select name="qualification " id="qualification"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                            <option selected disabled  value="0"></option>
                            <option value="1">BSC</option>
                            <option value="2">BCOM</option>
                            <option value="3">BCA</option>
                    </select>
                </div>

         <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
        <label for="">Department<c></c></label>
            <select name="department" id="department"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                    <option selected disabled  value="0"></option>
                    <option value="1">BSC</option>
                    <option value="2">BCOM</option>
                    <option value="3">BCA</option>
             </select>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
                  <label for="">Branch<c></c></label>
                    <select name="branch" id="brancha"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                            <option selected disabled value="0"></option>
                            <option value="1">BSC</option>
                            <option value="2">BCOM</option>
                            <option value="3">BCA</option>
                    </select>
                </div>
                         


         <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group  mt-0 mb-2">
            <label for="phone">Pincode <c></c></label>
            <input class="form-control" id="pincode" type="text" maxlength="6" placeholder="" name="pincode" value="<?php echo $result[0]->pincode;  ?>" />
        </div>

      

       

      
</div>

<div class="row gap p-3">
    
       

      

        <div class="col-sm-12 col-md-6 col-lg-2  col-xl-2 form-group  mt-1">
            <label for="job">Adhar number <c></c></label>
            <input class="form-control" id="adharnumber" type="text" placeholder="" name="adharnumber" value="" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-2 form-group  mt-0">
            <label for="phone">Mobile No. <c></c></label>
            <input class="form-control" id="phone" type="tel" maxlength="10" placeholder="" name="phone" value="<?php echo $result[0]->phone;  ?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2  form-group  mt-1">
           <label for="">Select Country <c></c></label>
           <select name="country" id="country" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option data-country="1">Algeria</option>
           <option data-country="2">Andorra</option>
           <option data-country="3">Angola </option>
           <option data-country="4">Anguilla</option>
           <option data-country="5">Antigua &amp; Barbuda</option>
           <option data-country="6">Argentina</option>
           <option data-country="7">Armenia</option>
    
           </select>
       </div>
      
       <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">State<c></c></label>
           <select name="state" id="state" class="js-states form-control">
           <option selected disabled  value="0"></option>
           <option data-state="1" >Maharashtra</option>
           <option data-state="2">Gujrat</option>
           <option data-state="3">Goa</option>
           <option data-state="4">Delhi</option>
           <option data-state="5">demo</option>
           <option data-state="6">demo</option>
           <option data-state="7">demo</option>
    
           </select>
       </div>

       <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">City<c></c></label>
           <select name="city" id="city"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Demo</option>
           <option value="2">Demo1</option>
            <option value="3">Registration</option>
           </select>
       </div>
</div>


<div class="row  p-3">
        
        <div class="col-sm-12 col-md-12 col-lg-3  col-xl-3 form-group  mt-0">
            <label for="phone">Address <c></c></label>
            <textarea class="form-control" id="address" type="text" placeholder="" name="address" value="" ></textarea>
        </div>

       <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 fdwn fform-group ">
            <label for="phone">Adhar Photo <c></c></label>
            <input type="file" class="form-control" id="photo"   onclick="clearImage()" onchange="preview()"  name="photo" value="" />
             <img style="height: 100px; width: 120px; margin-left: 15px;" class="mt-2"  id="frame" src="<?php echo base_url() ?>Assets\images\photo.jpg " class="img-fluid" />
   
        </div>

    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 fform-group  fdwn">
        <label for="phone">Photo <c></c></label>
        <input type="file" class="form-control" id="adharphoto"   onclick="clearImage1()" onchange="preview1()"  name="adharphoto" value="" />
           <!-- <p class="img-preview"><img id="photo-output" width="150px"></p> -->
           <img style="height: 100px; width: 120px; margin-left: 15px;" class="mt-2"  id="frame1" src="<?php echo base_url() ?>Assets\images\photo.jpg " class="img-fluid" />
    </div> 
</div> 
<div class="row p-1 mt-5">
<div class="col-sm-12 col-md-12 col-lg-12 text-right">
                                            <button class="btn btn-md btn-success btnright text-white" type="button" name="btn_save"  id="btn_save"><i class="nav-icon fa-regular fa-circle-check "></i> Update</button>
                                            <button class="btn btn-md btn-danger btnedit text-white" type="button" name="cancle" id="cancle"><a href="../edit" style="color:white;"><i class="fa-sharp fa-solid fa-pen-to-square"></i> Cancel</button>

                                        </div>
 </div>
</form>

</div>
    </div>
        </div>
           </div>


<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/employeeeditform_create.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        
              $("#country").select2({ });
              $("#qualification").select2({ });
              $("#department").select2({ });
              $("#brancha").select2({ });
              $("#bld").select2({ });
              $("#emptype").select2({ });
              $("#Cast").select2({ });
              $("#sCast").select2({ });
              $("#state").select2({ });
              $("#degree").select2({ });
              $("#master").select2({ });
              $("#countrycode").select2({ theme:"classic" });
              $("#countryco").select2({});
              $("#city").select2({});
              $("#appliedfor").select2({});
              $("#cerifications").select2({ theme:"classic" });
              $("#hobbies").select2({ theme:"classic" });
              $("#skills").select2({ theme:"classic" });
            

             
      
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
                                  document.getElementById("dob").value = today;
                                 
    </script>
      <script>
                                            function preview() {
                                                frame.src = URL.createObjectURL(event.target.files[0]);                                                
                                            }
                                            function clearImage() {
                                                document.getElementById('photo').value = null;
                                                frame.src = "";
                                                
                                            }

                                            
                                        </script>            
                                        <script>
                                            function preview1() {
                                                frame1.src = URL.createObjectURL(event.target.files[0]);
                                            }
                                            function clearImage1() {
                                                document.getElementById('adharphoto').value = null;
                                                frame1.src = "";
                                                
                                            }

                                            
                                        </script>