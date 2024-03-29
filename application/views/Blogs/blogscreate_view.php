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
    height: 100px; width: 200px; 
    margin-left: 50px;
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
                    <h4>Create Blogs </h4>
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
                        <form id="Form" action=""  method="POST" enctype="multipart/form-data">
<div class="row p-3">
<div class=" col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group  mt-0">
        <label for="">Blog Type<c></c></label>
        <select name="blog_type" id="blog_type"  data-control="select2" value=""  data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <?php foreach ($blog_types as $blog_type): ?>
        <option value="<?php echo $blog_type->id; ?>"><?php echo $blog_type->name; ?></option>
    <?php endforeach; ?>
           </select>
         </div>

                                    <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap mt-0">
                                            <label for=""> Blog Lable <c></c></label>
                                            <input class="form-control" id="blog_label" type="text" placeholder=" "  value="" name="blog_label" />
                                     </div>                                                                         

                                    <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
                                            <label for=""> Blog Link <c></c></label>
                                            <input class="form-control" id="blog_link" type="text" placeholder=" " name="blog_link"  />
                                    </div>    
                                                                 
</div>

<div class="row p-3">

                                        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
                                            <label for="">Video Link<c></c></label>
                                            <input class="form-control" id="video_link" type="text" placeholder=" " value=""  name="video_link"  />
                                        </div> 
                                        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap  mt-0">
                                           <label for="phone">Authorised Person <c></c></label>
                                            <input class="form-control" id="auth_person" type="tel" maxlength="10" placeholder="" name="auth_person" value="" />
                                        </div>

                                        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap   mt-0">
        <label for="">Department<c></c></label>
           <select name="blog_dep" id="blog_dep" value=""   data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <?php foreach ($blog_department as $blog_department): ?>
        <option value="<?php echo $blog_department->id; ?>"><?php echo $blog_department->department; ?></option>
    <?php endforeach; ?>
           </select>
        </div>

                                     
        <div class="d-none d-lg-block d-xl-block col-lg-3  photo">
            <label>&emsp;Photo&emsp;&emsp;</label>
            <input type="file" class="custom-file" id="std_photo" name="std_photo" onclick="clearImage()" onchange="preview()">
           <img class="photoimage"   id="frame" src="<?php echo base_url() ?>Assets\images\photo.jpg" class="img-fluid" />
        </div>
                                    
</div>
        
<div class="row p-3">

                                    

       
                                        <div class="col-xs-4 col-sm-4 col-md-12 col-lg-9 form-group   custom-dropdown">
           <label for="">Keyword<c></c></label>
           <select name="blog_keyword[]" id="blog_keyword" value=""  class="js-states form-control" multiple="multiple">
           <!-- <option selected disabled  value="0"></option> -->
           <?php foreach ($keyword_types as $keyword_types): ?>
        <option value="<?php echo $keyword_types->id; ?>"><?php echo $keyword_types->keyword; ?></option>
    <?php endforeach; ?>
           </select>
       </div> 
                                        </div>
<br />
<div class="col-xs-4 col-sm-4 col-md-12 col-lg-3 form-group gap mt-0" id="searchBox">
    <label for="editor">Blog Description</label>
    <textarea class="form-control" id="editor" name="editor" rows="15"></textarea>
</div>


<!-- <div class="desc">
                                        <label for="Description">Blog Description</label></div>
                                        <div class="row p-3">
                                          

                                        <div id="editor" name="editor">
                                        <input id="desc"   name="desc" value=""  />
                                        </div>
                                        </div> -->




<div class="row">
    <!-- <div class="col-lg-12 text-right ">
            <button class="btn btn1 text-white" type="button" name="btn_save" id="btn_save">Submit</button>&nbsp;
            <button class="btn btn2 text-white" type="button" name="cancle" id="cancle"><a href="Edit" style="color:white;">Edit</a></button> 
    </div>    -->
                                        <div class="col-sm-12 col-md-12 col-lg-12 text-right">
                                            <button class="btn btn-md btn-success btnright text-white" type="button" name="btn_save"  id="btn_save"><i class="nav-icon fa-regular fa-circle-check "></i> Save</button>
                                            <button class="btn btn-md btn-warning btnedit text-white" type="button" name="cancle" id="cancle"><a href="publish" style="color:white;"><i class="fa-sharp fa-solid fa-pen-to-square"></i> Publish</button>

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
        
              $("#blog_type").select2({ });
              $("#department").select2({ });
              $("#std_department").select2({ });
              $("#std_branch").select2({ });
              $("#std_state").select2({ });
              $("#std_degree").select2({ });
              $("#std_master").select2({ });
              $("#blog_dep").select2({ });
            //   $("#std_country").select2({});
              $("#std_city").select2({});
              $("#std_religion").select2({});
              $("#std_cast").select2({tags: true});
              $("#std_subcast").select2({ tags: true});
              $("#std_appliedfor").select2({});
              $("#std_certification").select2({ theme:"classic" });
              $("#std_hobbies").select2({ theme:"classic"});
              $("#blog_keyword").select2({ theme:"classic" });
            
              

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

<script>
                                            function preview() {
                                                frame.src = URL.createObjectURL(event.target.files[0]);                                                
                                            }
                                            function clearImage() {
                                                document.getElementById('std_photo').value = null;
                                                frame.src = "";
                                                
                                            }

                                          

                                            </script>
                                                                              
                                        
<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/blogs_create.js"></script>