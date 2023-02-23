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
    min-height:31px;
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
    font-size:10px;
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
                    <h4>Add Openings</h4>
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
                                            <label for=""> Label Name  </label>
                                            <input class="form-control" id="label_name" type="text" placeholder=" "  name="label_name" />
                                        </div>                                                                         

                                        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 form-group  mt-0">
        <label for="">Company Name </label>
        <select name="companyname" id="companyname"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1"> Ramdasia</option>
           <option value="2">Bhambi</option>
            <option value="3">Bazigar</option>
           </select>
         </div>
                                        
                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group mt-0">
                                            <label for="dob">Date  </label>
                                            <input class="form-control" id="std_dob" type="date"  name="std_dob"/>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group mt-0">
                                            <label for="dob1">Publish Date  </label>
                                            <input class="form-control" id="std_dob1" type="date"  name="std_dob1"/>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group mt-0">
                                            <label for="dob2">Publish End Date  </label>
                                            <input class="form-control" id="std_dob2" type="date"  name="std_dob2"/>
                                        </div>

                                         
                                     
</div>

<div class="row gap p-3">
<div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group  mt-0">
        <label for="">Type </label>
        <select name="std_type" id="std_type"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1"> Ramdasia</option>
           <option value="2">Bhambi</option>
            <option value="3">Bazigar</option>
           </select>
         </div>
                                                                     

                                        <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group  mt-0">
                                            <label for="phone">Email  </label>
                                            <input class="form-control" id="std_email" type="text" placeholder="" name="std_email"  />
                                        </div> -->
                                        
                                        

                                         


                                    <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group mt-0">
                                        <label for="picker1">Gender  </label>
                                        <div class="d-flex ">
                                           <label class="radio radio-primary  mt-0">    </label>
                                         <input type="radio" name="std_gender" value="male"><span class="pr-1  " style="color:#0161b5;">&nbsp;Male</span><span class="checkmark"></span>
                                         <label class="radio radio-primary"></label>&nbsp;
                                         <input type="radio" name="std_gender" value="female"><span class="pr-1" style="color:#0161b5;">&nbsp;Female</span><span class="checkmark"></span>
                                         <label class="radio radio-primary">    </label>
                                        <input type="radio" name="std_gender" value="other"><span class="pr-1" style="color:#0161b5;">&nbsp;Other</span><span class="checkmark"></span>
                                        </div>
                                     </div> -->

        <!-- <div class="col-sm-12 col-md-6 col-lg-1  form-group  mt-0">
        <label for="">Religion </label>
           <select name="std_religion" id="std_religion"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Hindu</option>
           <option value="2">Muslim</option>
            <option value="3">Bhanjra</option>
            <option value="Agnostic">Agnostic</option>
    <option value="Atheist">Atheist</option>
    <option value="Baha'i">Baha'i</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Cao Dai">Cao Dai</option>
    <option value="Chinese traditional religion">Chinese traditional religion</option>
    <option value="Christianity">Christianity</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Islam">Islam</option>
    <option value="Jainism">Jainism</option>
    <option value="Juche">Juche</option>
    <option value="Judaism">Judaism</option>
    <option value="Neo-Paganism">Neo-Paganism</option>
    <option value="Nonreligious">Nonreligious</option>
    <option value="Rastafarianism">Rastafarianism</option>
    <option value="Secular">Secular</option>
    <option value="Shinto">Shinto</option>
    <option value="Sikhism">Sikhism</option>
    <option value="Spiritism">Spiritism</option>
    <option value="Tenrikyo">Tenrikyo</option>
    <option value="Unitarian-Universalism">Unitarian-Universalism</option>
    <option value="Zoroastrianism">Zoroastrianism</option>
    <option value="primal-indigenous">primal-indigenous</option>
    <option value="Other">Other</option>
           </select>
        </div> -->

        <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group  mt-0">
        <label for="">Cast </label>
        <select name="std_cast" id="std_cast"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1"> Ramdasia</option>
           <option value="2">Bhambi</option>
            <option value="3">Bazigar</option>
           </select>
         </div> -->

         <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 form-group custom-dropdown  mt-0">
           <label for="">keyword </label>
           <select name="std_keyword" id="std_keyword" class="js-states form-control" multiple="multiple">
           <!-- <option selected disabled  value="0"></option> -->
           <option data-countryCode="1">Human resources</option>
           <option data-countryCode="2">First aid and CPR</option>
           <option data-countryCode="3">ECustomer service</option>
           <option data-countryCode="4">Language</option>
           <option data-countryCode="5">Management and leadership</option>
           <option data-countryCode="6">Sales and marketing</option>
           <option data-countryCode="7">Specialty Certified Medical Assistant (SCMA) certification</option>
           </select>
       </div>


        <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-1 form-group  mt-0">
        <label for="">SubCast </label>
        <select name="std_subcast" id="std_subcast"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1"> Ramdasia</option>
           <option value="2">Bhambi</option>
            <option value="3">Bazigar</option>
           </select>
         </div>

         <div class="col-sm-12 col-md-6 col-lg-2  col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">Applied For </label>
           <select name="std_appliedfor" id="std_appliedfor"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Demo</option>
           <option value="">Demo1</option>
            <option value="../Form">Registration</option>
           </select>
        </div> -->

        
    <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
        <label for="">Qualification </label>
            <select name="std_qualification" id="std_qualification"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
                    <option selected disabled  value="0"></option>
                    <option value="1">BSC</option>
                    <option value="2">BCOM</option>
                    <option value="3">BCA</option>
             </select>
    </div> -->
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">Department </label>
           <select name="std_department" id="std_department"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Demo</option>
           <option value="2">Demo1</option>
            <option value="3">Registration</option>
           </select>
       </div>


       <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group custom-dropdown  mt-0">
           <label for="">Branch </label>
           <select name="std_branch" id="std_branch"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Demo</option>
           <option value="2">Demo1</option>
            <option value="3">Registration</option>
          </select>
       </div>
       <div class="col-sm-12 col-md-6 col-lg-2 form-group  mt-0">
                                           <label for="phone">Contact Number  </label>
                                            <input class="form-control" id="std_mobileno" type="tel" maxlength="10" placeholder="" name="std_mobileno"/>
                                        </div>

                                        <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group  mt-0">
           <label for="">Email  </label>
            <input class="form-control" id="std_email" type="text" placeholder=" " name="std_email" />
        </div>
                                        </div>

<div class="row gap p-3">
         <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 form-group custom-dropdown  mt-0">
           <label for="">Branch </label>
           <select name="std_branch" id="std_branch"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">Demo</option>
           <option value="2">Demo1</option>
            <option value="3">Registration</option>
          </select>
       </div> -->
<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 form-group  mt-0">
           <label for="">Apply Link </label>
            <input class="form-control" id="std_applylink" type="text" placeholder=" " name="std_applylink" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 form-group mdwn custom-dropdown ">
           <label for="">Class </label>
           <select name="std_class" id="std_class" class="js-states form-control" multiple="multiple">
           <!-- <option selected disabled  value="0"></option> -->
           <option data-countryCode="1" >Badminton</option>
           <option data-countryCode="2">Bicycling</option>
           <option data-countryCode="3"> Axe throwing</option>
           <option data-countryCode="4">Air hockey</option>
           <option data-countryCode="5">Ballroom </option>
           <option data-countryCode="6">Cricket</option>
           <option data-countryCode="7">Cycling</option>
           </select>
       </div>

        <!-- <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group  mt-0 mb-2">
            <label for="phone">Pincode  </label>
            <input class="form-control" id="std_pincode" type="text" maxlength="6" placeholder="" name="std_pincode"  />
        </div> -->

        <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group  mt-0">
           <label for="">10th % </label>
            <input class="form-control" id="std_tenper" type="text" placeholder=" " name="std_tenper" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group  mt-0">
           <label for="">12th % </label>
            <input class="form-control" id="std_twper" type="text" placeholder=" " name="std_twper" />
        </div>
           
       

        
        <div class="col-sm-12 col-md-6 col-lg-1 form-group custom-dropdown  mt-0">
           <label for="">Degree </label>
           <select name="std_degree" id="std_degree"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">BSC</option>
           <option value="2">BCOM</option>
            <option value="3">BCA</option>
           </select>
       </div>

       <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group  mt-0">
           <label for="">Degree % </label>
            <input class="form-control" id="std_degreeper" type="text" placeholder=" " name="std_degreeper" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-1  col-xl-1 form-group custom-dropdown  mt-0">
           <label for="">Master </label>
           <select name="std_master" id="std_master"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="1">MCA</option>
           <option value="2">MBA</option>
            <option value="3" >MCOM</option>
           </select>
       </div>
       <div class="col-sm-12 col-md-6 col-lg-1 col-xl-1 form-group  mt-0">
           <label for="">Master % </label>
            <input class="form-control" id="std_masterper" type="text" placeholder=" " name="std_masterper" />
        </div>
      
</div>

<div class="row  p-3">
             
        <div class="col-sm-12 col-md-12 col-lg-4  col-xl-4 form-group  mt-0">
            <label for="phone">Description  </label>
            <textarea class="form-control" rows="4" id="std_description" type="text" placeholder="" name="std_description" value="" ></textarea>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4  col-xl-4 form-group  mt-0">
            <label for="phone">Responsiblity  </label>
            <textarea class="form-control" rows="4" id="std_responsibility" type="text" placeholder="" name="std_responsibility" value="" ></textarea>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4  col-xl-4 form-group  mt-0">
            <label for="phone">Rules & Regulations  </label>
            <textarea class="form-control" rows="4" id="std_rules" type="text" placeholder="" name="std_rules" value="" ></textarea>
        </div>
        

       <!-- <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 fdwn fform-group ">
            <label for="phone">Adhar Photo  </label>
            <input type="file" class="form-control" id="std_adharphoto"   onclick="clearImage()" onchange="preview()"  name="std_adharphoto" value="" />
             <img style="height: 100px; width: 120px; margin-left: 15px;" class="mt-2"  id="frame" src="<?php echo base_url() ?>Assets\images\photo.jpg " class="img-fluid" />
   
        </div>
          		

    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 fform-group  fdwn">
        <label for="phone">Photo  </label>
        <input type="file" class="form-control" id="std_photo"   onclick="clearImage1()" onchange="preview1()"  name="std_photo" value="" />
           <p class="img-preview"><img id="photo-output" width="150px"></p>
           <img style="height: 100px; width: 120px; margin-left: 15px;" class="mt-2"  id="frame1" src="<?php echo base_url() ?>Assets\images\photo.jpg" class="img-fluid" />
    </div>  -->
</div> 
<div class="row">
    <!-- <div class="col-lg-12 text-right ">
            <button class="btn btn1 text-white" type="button" name="btn_save" id="btn_save">Submit</button>&nbsp;
            <button class="btn btn2 text-white" type="button" name="cancle" id="cancle"><a href="Edit" style="color:white;">Edit</a></button> 
    </div>    -->
    <div class="col-md-12 text-right">
                                            <button class="btn btn-md btn-success btnright text-white" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check "></i> Save</button>
                                            <button class="btn btn-md btn-warning btnedit text-white" type="button" name="cancle" id="cancle"><a href="edit" style="color:white;"><i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit</button>

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
        
              $("#companyname").select2({ });
              $("#std_qualification").select2({ });
              $("#std_department").select2({ });
              $("#std_branch").select2({ });
              $("#std_state").select2({ });
              $("#std_degree").select2({ });
              $("#std_master").select2({ });
              $("#std_country").select2({ });
            //   $("#std_country").select2({});
              $("#std_city").select2({});
              $("#std_keyword").select2({});
              $("#std_cast").select2({});
              $("#std_subcast").select2({});
              $("#std_type").select2({});
              $("#std_keyword").select2({ theme:"classic" });
              $("#std_class").select2({ theme:"classic"});
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
                                  document.getElementById("std_dob1").value = today;
                                 
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
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/Openingform.js"></script>