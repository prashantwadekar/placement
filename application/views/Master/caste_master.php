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
    margin-right: -15px;
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
       height: 6vh;
       
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

 

.big{
    margin-top:-20px;
}

.lbs{
    color:#1273eb;
    background:#fff;
    margin-left:7px;
    font-size:15px;
}
    </style>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
              <div class="breadcrumb">
                <img height="50px" width="280px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
                    <h4>Caste Master</h4>
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

                                       <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3  form-group  ">
                                            <label for=""> Enter caste Name </label>
                                            <input class="form-control" id="label_name" type="text" placeholder=" "  name="label_name" />
                                        </div> 
                                        
                                        <div class="col-sm-12 col-md-6 col-lg-2 form-group custom-dropdown  ">
           <label for="">Select Religion </label>
           <select name="religion" id="religion"  -control="select2" -hide-search="true" class="js-states form-control nav selectpicker">
           <option selected disabled  value="0"></option>
           <option value="BSC">BSC</option>
           <option value="2">BCOM</option>
            <option value="3">BCA</option>
           </select>
       </div>

                                       
                                        </div>
    <div class="col-md-12 text-right">
                                            <button class="btn btnright btn-success text-white" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check "></i> Save</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle"><a href="<?=base_url();?>Master/cast_master"><i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit</button>

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
              $("#department").select2({ });
              $("#branch").select2({ });
              $("#std_state").select2({ });
              $("#religion").select2({ });
              $("#master").select2({ });
              $("#std_country").select2({ });
            //   $("#std_country").select2({});
              $("#std_city").select2({});
              $("#std_religion").select2({});
              $("#type").select2({});
              $("#Comp_name").select2({});
              $("#std_appliedfor").select2({});
              $("#keyword").select2({ theme:"classic" });
              $("#clas").select2({ theme:"classic"});
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
                                  document.getElementById("date").value = today;
                                  document.getElementById("pub_date").value = today;
                                 
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
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/Opening_create.js"></script>