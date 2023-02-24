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

  

    </style>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
              <div class="breadcrumb">
                <img height="50px" width="280px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
                    <h4>Add Course </h4>
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
<div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">Select Department<c>*</c></label>
           <select name="std_department" id="std_department"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Fiance</option>
           <option value="2">Education</option>
            <option value="3">Health</option>
           </select>
       </div>





         <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">Select Branch<c>*</c></label>
           <select name="std_branch" id="std_branch"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Computer</option>
           <option value="2">Electronics</option>
            <option value="3">Other</option>
          </select>
       </div>
                                       <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  mt-0">
                                            <label for=""> Enter Course Name <c>*</c></label>
                                            <input class="form-control" id="coursename" type="text" placeholder=" "  name="coursename" />
                                        </div>                                                                         

                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group  mt-0">
                                           <label for="duration">Duration <c>*</c></label>
                                            <input class="form-control" id="duration" type="tel" maxlength="10" placeholder="" name="duration"/>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">Language<c>*</c></label>
           <select name="language" id="language"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">English</option>
           <option value="2">Hindi </option>
            <option value="3">Marathi</option>
          </select>
       </div>

                                     
                                     
</div>

   

<div class="row  p-3">
             
        <div class="col-sm-12 col-md-12 col-lg-3  col-xl-3 form-group  mt-0">
            <label for="phone">Description <c>*</c></label>
            <textarea class="form-control" id="description" type="text" placeholder="" name="description" value="" ></textarea>
        </div>
        

       <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 fdwn fform-group ">
            <label for="phone">Course Photo <c>*</c></label>
            <input type="file" class="form-control" id="std_adharphoto"   onclick="clearImage()" onchange="preview()"  name="std_adharphoto" value="" />
             <img style="height: 100px; width: 120px; margin-left: 15px;" class="mt-2"  id="frame" src="<?php echo base_url() ?>Assets\images\photo.jpg " class="img-fluid" />
   
        </div>
          		

    <div class="col-md-12 text-right">
                                            <button class="btn btn-md btn-success btnright text-white" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check "></i> Save</button>
                                            <button class="btn btn-md btn-warning text-white" type="button" name="cancle" id="cancle"><i class="fa-sharp fa-solid fa-pen-to-square"><a href="modifycourse" style="color:white;"></i> Edit</button>

                                        </div>
 </div>
</form>

</div>
    </div>
        </div>
           </div>
           </div>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        
              $("#language").select2({ });
              $("#std_qualification").select2({ });
              $("#std_department").select2({ });
              $("#std_branch").select2({ });
              $("#std_state").select2({ });
              $("#std_degree").select2({ });
              $("#std_master").select2({ });
              $("#std_country").select2({ });
            //   $("#std_country").select2({});
              $("#std_city").select2({});
              $("#std_religion").select2({});
              $("#std_cast").select2({});
              $("#std_subcast").select2({});
              $("#std_appliedfor").select2({});
              $("#std_certification").select2({ theme:"classic" });
              $("#std_hobbies").select2({ theme:"classic"});
              $("#std_skills").select2({ theme:"classic" });
            

             
      
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
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/addcourse.js"></script>