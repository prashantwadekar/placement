<script>
window.onresize = function() {
  location.reload();
}
</script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
<style>

/* .adharpic{
    height:141px;
} */

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

/ Button css /

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
    /* margin-right: -20px; */
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
    margin-top:4px;
    / line-height: 37px; /
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

@media only screen and (min-width: 321px){
    .btnright:not(:disabled):not(.disabled) {
    margin-right: -20px;
    font-size:16px;
}
}
@media only screen and (min-width: 769px){
    input[type="file"]{
    border:1px solid black;
        width: 120px;
        height: 100px;
        opacity: 0;
        position: absolute;
        top: -73px;
        left: 110px;
        z-index: 999; 
        cursor:pointer;
}

.photoimage{
    height: 100px; width: 120px; 
    margin-left: 95px;
    border:1px solid black;
    margin-top:-73px;
}
.photo label{
    margin-left:120px;
    margin-top:-40px;
    color:#3F48CC;
}
}

@media only screen and (max-width: 768px){
    input[type="file"]{
    border:1px solid black;
        width: 120px;
        height: 100px;
        opacity: 0;
        position: absolute;
        top: -3px;
        left: 17px;
        z-index: 999; 
    }

.photoimage{
    height: 100px; width: 120px; 
    margin-left:3px;
    border:1px solid black;
    margin-top:-66px;
}
.photoimage1{
    height: 100px; width: 120px; 
    margin-left:0px;
    border:1px solid black;
    margin-top:-66px;
}
.photo label{
    margin-left:30px;
    margin-top:35px;
    color:#3F48CC;
}
.adharphoto label{
    margin-left:25px;
    margin-top:35px;
    color:#3F48CC;
}
.gap{
    margin:0px 0px 27px;
}
.imgsmmd{margin-top:-10px;}
}

@media only screen and (max-width: 425px)
{
    .breadcrumb {
  background: transparent;
  justify-content: center;
  align-items: center;
  margin: 7px 0 1.25rem;

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
                    <h4>Student Registration</h4>
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
                        <form id="Form" action="<?php echo site_url('Studentregistration/update'); ?>"  method="POST">                            
<div class="row p-3">
                                            <input class="form-control" id="std_id" type="text" placeholder=" "  name="std_id" value="<?php echo $result[0]->std_id; ?>" hidden> 
                                    <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap mt-0">
                                            <label for=""> Full Name <c></c></label>
                                            <input class="form-control" id="std_fullname" type="text" placeholder=" "  name="std_fullname" value="<?php echo $result[0]->std_fullname; ?>">
                                     </div>                                                                         

                                    <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
                                            <label for=""> Father Name <c></c></label>
                                            <input class="form-control" id="std_fathername" type="text" placeholder=" " name="std_fathername"  />
                                    </div>    
                                    <div class=" col-xs-4 col-sm-4 col-md-12 col-lg-3  form-group  mt-0">
                                            <label for=""> Mother Name <c></c></label>
                                            <input class="form-control" id="std_mothername" type="text" placeholder=" " name="std_mothername"  />
                                        </div>                              
</div>

<div class="row p-3">
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
                                            <label for="dob">DOB <c></c></label>
                                            <input class="form-control" id="std_dob" type="date" value=""  name="std_dob"/>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
                                            <label for="">Age<c></c></label>
                                            <input class="form-control" id="std_age" type="text" placeholder=" " value=""  name="std_age"  />
                                        </div> 
                                        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group  mt-0">
                                        <label for="picker1">Gender <c></c></label>
                                        <div class="d-flex ">
                                           <label class="radio radio-primary  mt-0">    </label>
                                         <input type="radio" name="std_gender" value="male"><span class="pr-1  " style="color:#0161b5;">&nbsp;Male</span><span class="checkmark"></span>
                                         <label class="radio radio-primary"></label>&nbsp;
                                         <input type="radio" name="std_gender" value="female"><span class="pr-1" style="color:#0161b5;">&nbsp;Female</span><span class="checkmark"></span>
                                         <label class="radio radio-primary">    </label>
                                        <input type="radio" name="std_gender" value="other"><span class="pr-1" style="color:#0161b5;">&nbsp;Other</span><span class="checkmark"></span>
                                        </div>
                                     </div>
                                     
        <div class="d-none d-lg-block d-xl-block col-lg-3  photo">
            <label>&emsp;Photo&emsp;&emsp;</label>
            <input type="file" class="custom-file" id="std_photo"  onclick="clearImage()" onchange="preview()">
           <img class="photoimage"   id="frame" src="<?php echo base_url() ?>Assets\images\photo.jpg" class="img-fluid" />
        </div>
                                    
</div>
        
<div class="row p-3">

                                     <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
                                           <label for="phone">Mobile No. <c></c></label>
                                            <input class="form-control" id="std_mobileno" type="tel" maxlength="10" placeholder="" name="std_mobileno" value="" />
                                        </div>

                                     <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap   mt-0">
        <label for="">Religion<c></c></label>
           <select name="std_religion" id="std_religion" value=""   data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
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
        </div>

        <div class=" col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group  mt-0">
        <label for="">Cast<c></c></label>
        <select name="std_cast" id="std_cast"  data-control="select2" value=""  data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="Brahmin">Brahmin</option>
  <option value="Kshatriya">Kshatriya</option>
  <option value="Vaishya">Vaishya</option>
  <option value="Shudra">Shudra</option>
  <option value="Kayastha">Kayastha</option>
  <option value="Baniya">Baniya</option>
  <option value="Agrawal">Agrawal</option>
  <option value="Jat">Jat</option>
  <option value="Yadav">Yadav</option>
  <option value="Rajput">Rajput</option>
  <option value="Maratha">Maratha</option>
  <option value="Patel">Patel</option>
  <option value="Lohana">Lohana</option>
           </select>
         </div>
</div>
<div class="row p-3">
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
        <label for="">SubCast<c></c></label>
        <select name="std_subcast" id="std_subcast" value=""   data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <optgroup label="Brahmin">
      <option value="Saraswat">Saraswat</option>
      <option value="Gaur">Gaur</option>
      <option value="Kanyakubja">Kanyakubja</option>
      <option value="Sanadya">Sanadya</option>
      <option value="Tyagi">Tyagi</option>
  </optgroup>
  <optgroup label="Kshatriya">
      <option value="Rajput">Rajput</option>
      <option value="Jat">Jat</option>
      <option value="Maratha">Maratha</option>
  </optgroup>
  <optgroup label="Vaishya">
      <option value="Baniya">Baniya</option>
      <option value="Agrawal">Agrawal</option>
      <option value="Lohana">Lohana</option>
  </optgroup>
  <optgroup label="Shudra">
      <option value="Teli">Teli</option>
      <option value="Koli">Koli</option>
      <option value="Dhobi">Dhobi</option>
  </optgroup>
           </select>
         </div>
         
         <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap   mt-0">
                                            <label for="phone">Email <c></c></label>
                                            <input class="form-control" id="std_email" type="text" placeholder="" name="std_email"  value="<?php echo $result[0]->std_email; ?>"/>
                                        </div>
                                        
             <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group   adhar mt-0">
            <label for="job">Adhar number <c></c></label>
            <input class="form-control adhar" id="std_adharnumber" type="text" placeholder="" name="std_adharnumber" value="" maxlength="12" />
        </div>
        <div class="d-none d-lg-block d-xl-block col-lg-3 photo">
            <label>Adhar Photo</label>
            <input type="File" class="custom-file" id="std_adharphoto"  onclick="clearImage1()" onchange="preview1()">
           <img class="photoimage"  id="frame1" src="<?php echo base_url() ?>Assets\images\aphoto.jpg"  class="img-fluid" />
        </div>
</div>
<div class="row p-3">
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  custom-dropdown  mt-0">
           <label for="">Applied For<c></c></label>
           <select name="std_appliedfor" id="std_appliedfor" value=""  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker" >
           <option value=""></option>
           <option value="Artificial Intelligence" <?php echo ($result[0]->std_appliedfor == 'Artificial Intelligence') ? 'selected' : ''; ?>>Artificial Intelligence</option>
  <option value="Machine Learning" <?php echo ($result[0]->std_appliedfor == 'Machine Learning') ? 'selected' : ''; ?>>Machine Learning</option>
  <option value="Data Science" <?php echo ($result[0]->std_appliedfor == 'Data Science') ? 'selected' : ''; ?>>Data Science</option>
  <option value="Business Analytics" <?php echo ($result[0]->std_appliedfor == 'Business Analytics') ? 'selected' : ''; ?>>Business Analytics</option>
  <option value="Finance" <?php echo ($result[0]->std_appliedfor == 'Finance') ? 'selected' : ''; ?>>Finance</option>
  <option value="Marketing" <?php echo ($result[0]->std_appliedfor == 'Marketing') ? 'selected' : ''; ?>>Marketing</option>
  <option value="Operations" <?php echo ($result[0]->std_appliedfor == 'Operations') ? 'selected' : ''; ?>>Operations</option>
  <option value="Healthcare" <?php echo ($result[0]->std_appliedfor == 'Healthcare') ? 'selected' : ''; ?>>Healthcare</option>
  <option value="Environmental Science" <?php echo ($result[0]->std_appliedfor == 'Environmental Science') ? 'selected' : ''; ?>>Environmental Science</option>
  <option value="Energy" <?php echo ($result[0]->std_appliedfor == 'Energy') ? 'selected' : ''; ?>>Energy</option>
  <option value="Environmental Engineering" <?php echo ($result[0]->std_appliedfor == 'Environmental Engineering') ? 'selected' : ''; ?>>Environmental Engineering</option>
  <option value="Urban Planning" <?php echo ($result[0]->std_appliedfor == 'Urban Planning') ? 'selected' : ''; ?>>Urban Planning</option>
  <option value="Public Policy" <?php echo ($result[0]->std_appliedfor == 'Public Policy') ? 'selected' : ''; ?>>Public Policy</option>
  <option value="Human Resources" <?php echo ($result[0]->std_appliedfor == 'Human Resources') ? 'selected' : ''; ?>>Human Resources</option>
  <option value="Sports Management" <?php echo ($result[0]->std_appliedfor == 'Sports Management') ? 'selected' : ''; ?>>Sports Management</option>
  <option value="Project Management" <?php echo ($result[0]->std_appliedfor == 'Project Management') ? 'selected' : ''; ?>>Project Management</option>
    </select>
    </div>

        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  custom-dropdown  mt-0">
        <label for="">Qualification<c></c></label>
        <select name="std_qualification" id="std_qualification" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
        <option value=""></option>
  <option value="High School" <?php if ($result[0]->std_qualification == 'High School') echo 'selected'; ?>>High School</option>
  <option value="Associate's Degree" <?php if ($result[0]->std_qualification == "Associate's Degree") echo 'selected'; ?>>Associate's Degree</option>
  <option value="Bachelor's Degree" <?php if ($result[0]->std_qualification == "Bachelor's Degree") echo 'selected'; ?>>Bachelor's Degree</option>
  <option value="Master's Degree" <?php if ($result[0]->std_qualification == "Master's Degree") echo 'selected'; ?>>Master's Degree</option>
  <option value="Doctorate Degree" <?php if ($result[0]->std_qualification == "Doctorate Degree") echo 'selected'; ?>>Doctorate Degree</option>
  <option value="Certificate" <?php if ($result[0]->std_qualification == "Certificate") echo 'selected'; ?>>Certificate</option>
  <option value="Diploma" <?php if ($result[0]->std_qualification == "Diploma") echo 'selected'; ?>>Diploma</option>
  <option value="Postgraduate Diploma" <?php if ($result[0]->std_qualification == "Postgraduate Diploma") echo 'selected'; ?>>Postgraduate Diploma</option>
</select>

 </div>
 
    <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group  custom-dropdown  mt-0">
           <label for="">Department<c></c></label>
           <select name="std_department" id="std_department" value=""  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option value=""></option>
           <option value="Computer Science" <?php if ($result[0]->std_department == "Computer Science") echo 'selected'; ?>>Computer Science</option>
  <option value="Electronics" <?php if ($result[0]->std_department == "Electronics") echo 'selected'; ?>>Electronics</option>
  <option value="Mechanical" <?php if ($result[0]->std_department == "Mechanical") echo 'selected'; ?>>Mechanical</option>
  <option value="Electrical" <?php if ($result[0]->std_department == "Electrical") echo 'selected'; ?>>Electrical</option>
  <option value="Civil" <?php if ($result[0]->std_department == "Civil") echo 'selected'; ?>>Civil</option>
  <option value="Chemical" <?php if ($result[0]->std_department == "Chemical") echo 'selected'; ?>>Chemical</option>
  <option value="Industrial" <?php if ($result[0]->std_department == "Industrial") echo 'selected'; ?>>Industrial</option>
  <option value="Environmental" <?php if ($result[0]->std_department == "Environmental") echo 'selected'; ?>>Environmental</option>
  <option value="Aerospace" <?php if ($result[0]->std_department == "Aerospace") echo 'selected'; ?>>Aerospace</option>
  <option value="Materials Science" <?php if ($result[0]->std_department == "Materials Science") echo 'selected'; ?>>Materials Science</option>
  <option value="Nuclear" <?php if ($result[0]->std_department == "Nuclear") echo 'selected'; ?>>Nuclear</option>
  <option value="Petroleum" <?php if ($result[0]->std_department == "Petroleum") echo 'selected'; ?>>Petroleum</option>
  <option value="Mining" <?php if ($result[0]->std_department == "Mining") echo 'selected'; ?>>Mining</option>
  <option value="Marine" <?php if ($result[0]->std_department == "Marine") echo 'selected'; ?>>Marine</option>
  <option value="Geological" <?php if ($result[0]->std_department == "Geological") echo 'selected'; ?>>Geological</option>
  <option value="Geo-informatics" <?php if ($result[0]->std_department == "informatics") echo 'selected'; ?>>Geo-informatics</option>
  <option value="Geotechnical" <?php if ($result[0]->std_department == "Geotechnical") echo 'selected'; ?>>Geotechnical</option>
  <option value="Physics" <?php if ($result[0]->std_department == "Physics") echo 'selected'; ?>>Physics</option>
  <option value="Mathematics" <?php if ($result[0]->std_department == "Mathematics") echo 'selected'; ?>>Mathematics</option>
  <option value="Statistics" <?php if ($result[0]->std_department == "Statistics") echo 'selected'; ?>>Statistics</option>
  <option value="Biology" <?php if ($result[0]->std_department == "Biology") echo 'selected'; ?>>Biology</option>
  <option value="Chemistry" <?php if ($result[0]->std_department == "Chemistry") echo 'selected'; ?>>Chemistry</option>
  <option value="Arts" <?php if ($result[0]->std_department == "Arts") echo 'selected'; ?>>Arts</option>
  <option value="Humanities" <?php if ($result[0]->std_department == "Humanities") echo 'selected'; ?>>Humanities</option>
  <option value="Social Science" <?php if ($result[0]->std_department == "Social Science") echo 'selected'; ?>>Social Science</option>
  <option value="Psychology" <?php if ($result[0]->std_department == "Psychology") echo 'selected'; ?>>Psychology</option>
  <option value="Economics" <?php if ($result[0]->std_department == "Economics") echo 'selected'; ?>>Economics</option>
  <option value="Law" <?php if ($result[0]->std_department == "Law") echo 'selected'; ?>>Law</option>
  <option value="Education" <?php if ($result[0]->std_department == "Education") echo 'selected'; ?>>Education</option>
  <option value="Political Science" <?php if ($result[0]->std_department == "Political Science") echo 'selected'; ?>>Political Science</option>
  <option value="Sociology" <?php if ($result[0]->std_department == "Sociology") echo 'selected'; ?>>Sociology</option>
  <option value="Philosophy" <?php if ($result[0]->std_department == "Philosophy") echo 'selected'; ?>>Philosophy</option>
  <option value="Journalism" <?php if ($result[0]->std_department == "Journalism") echo 'selected'; ?>>Journalism</option>
           </select>
       </div>
</div>
<div class="row p-3">
        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  custom-dropdown  mt-0">
  <label for="">Branch<c></c></label>
  <select name="std_branch" id="std_branch" data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker" >
  <option value=""></option>
    <?php
    $selected_branch = $result[0]->std_branch;
    $branches = array("Computer Science", "Electronics", "Mechanical", "Electrical", "Civil", "Chemical", "Industrial", "Environmental", "Aerospace", "Materials Science", "Nuclear", "Petroleum", "Mining", "Marine", "Geological", "Geo-informatics", "Geotechnical");
    foreach ($branches as $branch) {
      $selected = ($branch == $selected_branch) ? 'selected' : '';
      echo "<option value='$branch' $selected>$branch</option>";
    }
    ?>
  </select>
</div>

       <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
           <label for="">Term(year)<c></c></label>
            <input class="form-control" id="std_term" type="text" placeholder=" " name="std_term" value="<?php echo $result[0]->std_term; ?>"/>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group  custom-dropdown  mt-0">
           <label for="">Degree<c></c></label>
           <select name="std_degree" id="std_degree"  value=""  data-control="select2"  data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="BASc">Bachelor Of Applied Science</option>
           <option value="BA">Bachelor Of Arts </option>
            <option value="BBA">Bachelor Of Business Administration</option>
            <option value="BS(Econ)">Bachelor Of Economics</option>
            <option value="BMS">Bachelor Of Management Studies </option>
            <option value="BSC">Bachelor Of Science</option>
            <option value="Bcom"> Bachelor Of Commerce</option>
            <option value="BCS">Bachelor Of Computer Science</option>
            <option value="BEng">Bachelor Of Engineering </option>
           </select>
       </div>
</div>
<div class="row p-3">
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
           <label for="">Degree %<c></c></label>
            <input class="form-control" id="std_degreeper" type="text" placeholder=" " name="std_degreeper" />
        </div>
        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  custom-dropdown  mt-0">
           <label for="">Master<c></c></label>
           <select name="std_master" id="std_master" value=""   data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
  <option value="Master of Science (MS)">Master of Science (MS)</option>
  <option value="Master of Engineering (MEng)">Master of Engineering (MEng)</option>
  <option value="Master of Arts (MA)">Master of Arts (MA)</option>
  <option value="Master of Public Administration (MPA)">Master of Public Administration (MPA)</option>
  <option value="Master of Education (MEd)">Master of Education (MEd)</option>
  <option value="Master of Information (MI)">Master of Information (MI)</option>
  <option value="Master of Computer Science (MCS)">Master of Computer Science (MCS)</option>
  <option value="Master of Laws (LLM)">Master of Laws (LLM)</option>
  <option value="Master of Library Science (MLS)">Master of Library Science (MLS)</option>
  <option value="Master of Public Health (MPH)">Master of Public Health (MPH)</option>
           </select>
       </div>
       
       <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group   mt-0">
           <label for="">Master %<c></c></label>
            <input class="form-control" id="std_masterper" type="text" placeholder=" " name="std_masterper" />
        </div>
</div>
<div class="row p-3">
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-1">
           <label for="">Country <c></c></label>
           <select name="std_country" id="std_country" value=""  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>      
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>  
           </select>
       </div>
       <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  custom-dropdown  mt-0">
           <label for="">State<c></c></label>
           <select name="std_state" id="std_state" value=""  class="js-states form-control">
           <option selected disabled  value="0"></option>
           <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
    
           </select>
       </div>
        
       <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group  custom-dropdown  mt-0">
           <label for="">City<c></c></label>
           <select name="std_city" id="std_city" value=""   data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
    <option value="Achalpur">Achalpur</option>
    <option value="Ahiri">Ahiri</option>
    <option value="Ahmadnagar">Ahmadnagar</option>
    <option value="Ahmadpur">Ahmadpur</option>
    <option value="Airoli">Airoli</option>
    <option value="Ajra">Ajra</option>
    <option value="Akalkot">Akalkot</option>
    <option value="Akola">Akola</option>
    <option value="Akot">Akot</option>
    <option value="Alandi">Alandi</option>
    <option value="Alibag">Alibag</option>
    <option value="Allapalli">Allapalli</option>
    <option value="Amalner">Amalner</option>
    <option value="Amarnath">Amarnath</option>
    <option value="Ambad">Ambad</option>
    <option value="Ambajogai">Ambajogai</option>
    <option value="Amravati">Amravati</option>
    <option value="Amravati Division">Amravati Division</option>
    <option value="Anjangaon">Anjangaon</option>
    <option value="Anshing">Anshing</option>
    <option value="Arangaon">Arangaon</option>
    <option value="Artist Village">Artist Village</option>
    <option value="Arvi">Arvi</option>
    <option value="Ashta">Ashta</option>
    <option value="Ashti">Ashti</option>
    <option value="Aurangabad">Aurangabad</option>
    <option value="Ausa">Ausa</option>
    <option value="Badlapur">Badlapur</option>
    <option value="Balapur">Balapur</option>
    <option value="Ballalpur">Ballalpur</option>
    <option value="Baramati">Baramati</option>
    <option value="Barsi">Barsi</option>
    <option value="Basmat">Basmat</option>
    <option value="Beed">Beed</option>
    <option value="Bhandara">Bhandara</option>
    <option value="Bhayandar">Bhayandar</option>
    <option value="Bhigvan">Bhigvan</option>
    <option value="Bhiwandi">Bhiwandi</option>
    <option value="Bhor">Bhor</option>
    <option value="Bhudgaon">Bhudgaon</option>
    <option value="Bhum">Bhum</option>
    <option value="Bhusaval">Bhusaval</option>
    <option value="Bid">Bid</option>
    <option value="Biloli">Biloli</option>
    <option value="Boisar">Boisar</option>
    <option value="Borivli">Borivli</option>
    <option value="Buldana">Buldana</option>
    <option value="Chakan">Chakan</option>
    <option value="Chalisgaon">Chalisgaon</option>
    <option value="Chanda">Chanda</option>
    <option value="Chandor">Chandor</option>
    <option value="Chandrapur">Chandrapur</option>
    <option value="Chandur">Chandur</option>
    <option value="Chandur Bazar">Chandur Bazar</option>
    <option value="Chicholi">Chicholi</option>
    <option value="Chikhli">Chikhli</option>
    <option value="Chinchani">Chinchani</option>
    <option value="Chiplun">Chiplun</option>
    <option value="Chopda">Chopda</option>
    <option value="Dabhol">Dabhol</option>
    <option value="Dahanu">Dahanu</option>
    <option value="Darwha">Darwha</option>
    <option value="Daryapur">Daryapur</option>
    <option value="Dattapur">Dattapur</option>
    <option value="Daulatabad">Daulatabad</option>
    <option value="Daund">Daund</option>
    <option value="Dehu">Dehu</option>
    <option value="Deolali">Deolali</option>
    <option value="Deoli">Deoli</option>
    <option value="Deulgaon Raja">Deulgaon Raja</option>
    <option value="Dharangaon">Dharangaon</option>
    <option value="Dharmabad">Dharmabad</option>
    <option value="Dharur">Dharur</option>
    <option value="Dhule">Dhule</option>
    <option value="Dhulia">Dhulia</option>
    <option value="Diglur">Diglur</option>
    <option value="Digras">Digras</option>
    <option value="Dombivli">Dombivli</option>
    <option value="Dondaicha">Dondaicha</option>
    <option value="Dudhani">Dudhani</option>
    <option value="Durgapur">Durgapur</option>
    <option value="Erandol">Erandol</option>
    <option value="Faizpur">Faizpur</option>
    <option value="Gadchiroli">Gadchiroli</option>
    <option value="Gadhinglaj">Gadhinglaj</option>
    <option value="Gangakher">Gangakher</option>
    <option value="Gangapur">Gangapur</option>
    <option value="Gevrai">Gevrai</option>
    <option value="Ghatanji">Ghatanji</option>
    <option value="Ghoti Budrukh">Ghoti Budrukh</option>
    <option value="Ghugus">Ghugus</option>
    <option value="Gondiya">Gondiya</option>
    <option value="Goregaon">Goregaon</option>
    <option value="Guhagar">Guhagar</option>
    <option value="Hadgaon">Hadgaon</option>
    <option value="Harnai">Harnai</option>
    <option value="Hinganghat">Hinganghat</option>
    <option value="Hingoli">Hingoli</option>
    <option value="Hirapur Hamesha">Hirapur Hamesha</option>
    <option value="Ichalkaranji">Ichalkaranji</option>
    <option value="Igatpuri">Igatpuri</option>
    <option value="Indapur">Indapur</option>
    <option value="Jaisingpur">Jaisingpur</option>
    <option value="Jalgaon">Jalgaon</option>
    <option value="Jalgaon Jamod">Jalgaon Jamod</option>
    <option value="Jalna">Jalna</option>
    <option value="Jawhar">Jawhar</option>
    <option value="Jejuri">Jejuri</option>
    <option value="Jintur">Jintur</option>
    <option value="Junnar">Junnar</option>
    <option value="Kagal">Kagal</option>
    <option value="Kalamb">Kalamb</option>
    <option value="Kalamnuri">Kalamnuri</option>
    <option value="Kalas">Kalas</option>
    <option value="Kalmeshwar">Kalmeshwar</option>
    <option value="Kalundri">Kalundri</option>
    <option value="Kalyan">Kalyan</option>
    <option value="Kamthi">Kamthi</option>
    <option value="Kandri">Kandri</option>
    <option value="Kankauli">Kankauli</option>
    <option value="Kannad">Kannad</option>
    <option value="Karad">Karad</option>
    <option value="Karanja">Karanja</option>
    <option value="Karjat">Karjat</option>
    <option value="Karmala">Karmala</option>
    <option value="Kati">Kati</option>
    <option value="Katol">Katol</option>
    <option value="Khadki">Khadki</option>
    <option value="Khamgaon">Khamgaon</option>
    <option value="Khapa">Khapa</option>
    <option value="Kharakvasla">Kharakvasla</option>
    <option value="Khed">Khed</option>
    <option value="Khetia">Khetia</option>
    <option value="Khopoli">Khopoli</option>
    <option value="Khuldabad">Khuldabad</option>
    <option value="Kinwat">Kinwat</option>
    <option value="Kodoli">Kodoli</option>
    <option value="Kolhapur">Kolhapur</option>
    <option value="Kondalwadi">Kondalwadi</option>
    <option value="Kopargaon">Kopargaon</option>
    <option value="Koradi">Koradi</option>
    <option value="Koregaon">Koregaon</option>
    <option value="Koynanagar">Koynanagar</option>
    <option value="Kudal">Kudal</option>
    <option value="Kurandvad">Kurandvad</option>
    <option value="Kurduvadi">Kurduvadi</option>
    <option value="Lanja">Lanja</option>
    <option value="Lasalgaon">Lasalgaon</option>
    <option value="Latur">Latur</option>
    <option value="Lohogaon">Lohogaon</option>
    <option value="Lonar">Lonar</option>
    <option value="Lonavla">Lonavla</option>
    <option value="Mahabaleshwar">Mahabaleshwar</option>
    <option value="Mahad">Mahad</option>
    <option value="Maindargi">Maindargi</option>
    <option value="Majalgaon">Majalgaon</option>
    <option value="Makhjan">Makhjan</option>
    <option value="Malegaon">Malegaon</option>
    <option value="Malkapur">Malkapur</option>
    <option value="Malvan">Malvan</option>
    <option value="Manchar">Manchar</option>
    <option value="Mangrul Pir">Mangrul Pir</option>
    <option value="Manmad">Manmad</option>
    <option value="Manor">Manor</option>
    <option value="Mansar">Mansar</option>
    <option value="Manwat">Manwat</option>
    <option value="Matheran">Matheran</option>
    <option value="Mehekar">Mehekar</option>
    <option value="Mhasla">Mhasla</option>
    <option value="Mhasvad">Mhasvad</option>
    <option value="Mohpa">Mohpa</option>
    <option value="Moram">Moram</option>
    <option value="Morsi">Morsi</option>
    <option value="Mowad">Mowad</option>
    <option value="Mudkhed">Mudkhed</option>
    <option value="Mukher">Mukher</option>
    <option value="Mul">Mul</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Mumbai Suburban">Mumbai Suburban</option>
    <option value="Murbad">Murbad</option>
    <option value="Murgud">Murgud</option>
    <option value="Murtajapur">Murtajapur</option>
    <option value="Murud">Murud</option>
    <option value="Nagothana">Nagothana</option>
    <option value="Nagpur">Nagpur</option>
    <option value="Nagpur Division">Nagpur Division</option>
    <option value="Naldurg">Naldurg</option>
    <option value="Nanded">Nanded</option>
    <option value="Nandgaon">Nandgaon</option>
    <option value="Nandura Buzurg">Nandura Buzurg</option>
    <option value="Nandurbar">Nandurbar</option>
    <option value="Nashik">Nashik</option>
    <option value="Nashik Division">Nashik Division</option>
    <option value="Navi Mumbai">Navi Mumbai</option>
    <option value="Neral">Neral</option>
    <option value="Nilanga">Nilanga</option>
    <option value="Nipani">Nipani</option>
    <option value="Osmanabad">Osmanabad</option>
    <option value="Ozar">Ozar</option>
    <option value="Pachora">Pachora</option>
    <option value="Paithan">Paithan</option>
    <option value="Palghar">Palghar</option>
    <option value="Panchgani">Panchgani</option>
    <option value="Pandharpur">Pandharpur</option>
    <option value="Panhala">Panhala</option>
    <option value="Panvel">Panvel</option>
    <option value="Parbhani">Parbhani</option>
    <option value="Parli Vaijnath">Parli Vaijnath</option>
    <option value="Parola">Parola</option>
    <option value="Partur">Partur</option>
    <option value="Patan">Patan</option>
    <option value="Pathardi">Pathardi</option>
    <option value="Pathri">Pathri</option>
    <option value="Patur">Patur</option>
    <option value="Pawni">Pawni</option>
    <option value="Pen">Pen</option>
    <option value="Phaltan">Phaltan</option>
    <option value="Pimpri">Pimpri</option>
    <option value="Pipri">Pipri</option>
    <option value="Powai">Powai</option>
    <option value="Pulgaon">Pulgaon</option>
    <option value="Pune">Pune</option>
    <option value="Pune Division">Pune Division</option>
    <option value="Purna">Purna</option>
    <option value="Pusad">Pusad</option>
    <option value="Rahimatpur">Rahimatpur</option>
    <option value="Rahuri">Rahuri</option>
    <option value="Raigarh">Raigarh</option>
    <option value="Rajapur">Rajapur</option>
    <option value="Rajgurunagar">Rajgurunagar</option>
    <option value="Rajur">Rajur</option>
    <option value="Rajura">Rajura</option>
    <option value="Ramtek">Ramtek</option>
    <option value="Ratnagiri">Ratnagiri</option>
    <option value="Raver">Raver</option>
    <option value="Revadanda">Revadanda</option>
    <option value="Risod">Risod</option>
    <option value="Roha">Roha</option>
    <option value="Sangamner">Sangamner</option>
    <option value="Sangli">Sangli</option>
    <option value="Sangola">Sangola</option>
    <option value="Saoner">Saoner</option>
    <option value="Sasvad">Sasvad</option>
    <option value="Satana">Satana</option>
    <option value="Satara">Satara</option>
    <option value="Satara Division">Satara Division</option>
    <option value="Savantvadi">Savantvadi</option>
    <option value="Savda">Savda</option>
    <option value="Selu">Selu</option>
    <option value="Shahada">Shahada</option>
    <option value="Shahapur">Shahapur</option>
    <option value="Shegaon">Shegaon</option>
    <option value="Shiraguppi">Shiraguppi</option>
    <option value="Shirdi">Shirdi</option>
    <option value="Shirgaon">Shirgaon</option>
    <option value="Shirpur">Shirpur</option>
    <option value="Shirwal">Shirwal</option>
    <option value="Shivaji Nagar">Shivaji Nagar</option>
    <option value="Shrigonda">Shrigonda</option>
    <option value="Sillod">Sillod</option>
    <option value="Sindhudurg">Sindhudurg</option>
    <option value="Sindi">Sindi</option>
    <option value="Sinnar">Sinnar</option>
    <option value="Sirur">Sirur</option>
    <option value="Solapur">Solapur</option>
    <option value="Sonegaon">Sonegaon</option>
    <option value="Soygaon">Soygaon</option>
    <option value="Srivardhan">Srivardhan</option>
    <option value="Surgana">Surgana</option>
    <option value="Talegaon Dabhade">Talegaon Dabhade</option>
    <option value="Taloda">Taloda</option>
    <option value="Tarapur">Tarapur</option>
    <option value="Tasgaon">Tasgaon</option>
    <option value="Telhara">Telhara</option>
    <option value="Thane">Thane</option>
    <option value="Trimbak">Trimbak</option>
    <option value="Tuljapur">Tuljapur</option>
    <option value="Tumsar">Tumsar</option>
    <option value="Udgir">Udgir</option>
    <option value="Ulhasnagar">Ulhasnagar</option>
    <option value="Umarga">Umarga</option>
    <option value="Umarkhed">Umarkhed</option>
    <option value="Umred">Umred</option>
    <option value="Uran">Uran</option>
    <option value="Vada">Vada</option>
    <option value="Vaijapur">Vaijapur</option>
    <option value="Varangaon">Varangaon</option>
    <option value="Vasind">Vasind</option>
    <option value="Vengurla">Vengurla</option>
    <option value="Virar">Virar</option>
    <option value="Vite">Vite</option>
    <option value="Wadgaon">Wadgaon</option>
    <option value="Wai">Wai</option>
    <option value="Wani">Wani</option>
    <option value="Wardha">Wardha</option>
    <option value="Warora">Warora</option>
    <option value="Warud">Warud</option>
    <option value="Washim">Washim</option>
    <option value="Yaval">Yaval</option>
    <option value="Yavatmal">Yavatmal</option>
    <option value="Yeola">Yeola</option>
           </select>
       </div>
</div>
<div class="row p-3">
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-6 form-group gap  mt-0">
            <label for="phone">Address <c></c></label>
            <textarea class="form-control" id="std_address" type="text" placeholder="" name="std_address" value="" ></textarea>
        </div>
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group  mt-0 mb-2">
            <label for="phone">Pincode <c></c></label>
            <input class="form-control" id="std_pincode" type="text" maxlength="6" placeholder="" name="std_pincode"  />
        </div>
   
</div>
<div class="row p-3">
    
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-9 form-group  custom-dropdown ">
           <label for="">Hobbies<c></c></label>
           <select name="std_hobbies" id="std_hobbies" value=""  class="js-states form-control" multiple="multiple">
           <!-- <option selected disabled  value="0"></option> -->
           <option value="reading">Reading</option>
  <option value="writing">Writing</option>
  <option value="photography">Photography</option>
  <option value="drawing">Drawing</option>
  <option value="painting">Painting</option>
  <option value="traveling">Traveling</option>
  <option value="hiking">Hiking</option>
  <option value="camping">Camping</option>
  <option value="gardening">Gardening</option>
  <option value="fishing">Fishing</option>
  <option value="hunting">Hunting</option>
  <option value="cooking">Cooking</option>
  <option value="baking">Baking</option>
  <option value="dancing">Dancing</option>
  <option value="yoga">Yoga</option>
  <option value="meditation">Meditation</option>
  <option value="fitness">Fitness</option>
  <option value="running">Running</option>
  <option value="swimming">Swimming</option>
  <option value="cycling">Cycling</option>
  <option value="skiing">Skiing</option>
  <option value="snowboarding">Snowboarding</option>
  <option value="surfing">
           </select>
       </div>
</div>
<div class="row p-3">
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-9 form-group   custom-dropdown">
           <label for="">Skills<c></c></label>
           <select name="std_skills" id="std_skills" value=""  class="js-states form-control" multiple="multiple">
           <!-- <option selected disabled  value="0"></option> -->
           <option value="programming">Programming</option>
  <option value="web development">Web development</option>
  <option value="data analysis">Data analysis</option>
  <option value="project management">Project management</option>
  <option value="digital marketing">Digital marketing</option>
  <option value="graphic design">Graphic design</option>
  <option value="writing">Writing</option>
  <option value="editing">Editing</option>
  <option value="public speaking">Public speaking</option>
  <option value="market research">Market research</option>
  <option value="sales">Sales</option>
  <option value="customer service">Customer service</option>
  <option value="accounting">Accounting</option>
  <option value="finance">Finance</option>
  <option value="human resources">Human resources</option>
  <option value="legal">Legal</option>
  <option value="teaching">Teaching</option>
  <option value="translating">Translating</option>
  <option value="interpretation">Interpretation</option>
  <option value="medical billing">Medical billing</option>
  <option value="nursing">Nursing</option>
  <option value="medicine">Medicine</option>
  <option value="IT support">IT support</option>
  <option value="network administration">Network administration</option>
  <option value="cybersecurity">Cybersecurity</option>
  <option value="cloud computing">Cloud computing</option>
           </select>
       </div> 
</div>
<div class="row p-3">
<div class="col-xs-8 col-sm-8 col-md-12 col-lg-9 form-group custom-dropdown  mt-0">
           <label for="">Cerifications<c></c></label>
           <select name="std_certification" id="std_certification" value=""  class="js-states form-control" multiple="multiple">
           <!-- <option selected disabled  value="0"></option> -->
           <option value="PMP">Project Management Professional (PMP)</option>
  <option value="CISSP">Certified Information Systems Security Professional (CISSP)</option>
  <option value="ITIL">ITIL Foundation</option>
  <option value="CISM">Certified Information Security Manager (CISM)</option>
  <option value="CEH">Certified Ethical Hacker (CEH)</option>
  <option value="MCSA">Microsoft Certified Solutions Associate (MCSA)</option>
  <option value="MCSD">Microsoft Certified Solutions Developer (MCSD)</option>
  <option value="MCSE">Microsoft Certified Solutions Expert (MCSE)</option>
  <option value="CCNA">Cisco Certified Network Associate (CCNA)</option>
  <option value="CCNP">Cisco Certified Network Professional (CCNP)</option>
  <option value="CCIE">Cisco Certified Internetwork Expert (CCIE)</option>
  <option value="AWS">Amazon Web Services (AWS) Certified</option>
  <option value="Google Cloud">Google Cloud Certified</option>
  <option value="CPA">Certified Public Accountant (CPA)</option>
           </select>
       </div>
</div>
<div class="row p-3 imgsmmd">
<div class="d-lg-none d-xl-none col-6 photo">
            <label>&emsp;Photo&emsp;&emsp;</label>
            <input type="file" class="custom-file" id="std_photo"  onclick="clearImage2()" onchange="preview2()">
           <img class="photoimage"  id="frame2" src="<?php echo base_url() ?>Assets\images\photo.jpg"   class="img-fluid" />
        </div>

<div class="d-lg-none d-xl-none col-6 photo adharphoto">
            <label>Adhar Photo</label>
            <input type="File" class="custom-file" id="std_adharphoto"   onclick="clearImage3()" onchange="preview3()">
           <img class="photoimage1"  id="frame3" src="<?php echo base_url() ?>Assets\images\aphoto.jpg"  class="img-fluid" />
        </div>
        </div>
<div class="row">
    <!-- <div class="col-lg-12 text-right ">
            <button class="btn btn1 text-white" type="button" name="btn_save" id="btn_save">Submit</button>&nbsp;
            <button class="btn btn2 text-white" type="button" name="cancle" id="cancle"><a href="Edit" style="color:white;">Edit</a></button> 
    </div>    -->
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

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    
    <script>
        
              $("#std_country").select2({ });
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
              $("#std_cast").select2({tags: true});
              $("#std_subcast").select2({ tags: true});
              $("#std_appliedfor").select2({});
              $("#std_certification").select2({ theme:"classic" });
              $("#std_hobbies").select2({ theme:"classic"});
              $("#std_skills").select2({ theme:"classic" });
            
              

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
                                            function preview2() {
                                                frame2.src = URL.createObjectURL(event.target.files[0]);                                                
                                            }
                                            function clearImage2() {
                                                document.getElementById('std_photo').value = null;
                                                frame2.src = "";
                                                
                                            }
                                            function preview3() {
                                                frame3.src = URL.createObjectURL(event.target.files[0]);                                                
                                            }
                                            function clearImage3() {
                                                document.getElementById('std_photo').value = null;
                                                frame3.src = "";
                                                
                                            } 
                                            
                                        </script>
                                        
                                                                              
                                        
<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/studenteditform_create.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
