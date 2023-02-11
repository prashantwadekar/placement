<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
<style>



.form-group label{
    position: absolute;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #1273eb;
    background: #ffffff;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    top: -16px;
    left: 7px;
    padding: -1px 7px;
    z-index: 10;
    text-align: left;
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
.header{
    margin-left:22px;
   font-size:25px;
   margin-top:2px;
    width: 110px;
    color:#0161b5;
    font-weight:800;
    
}
.special {
  font-weight: bold !important;
  color: #fff !important;
  background: #bc0000 !important;
  text-transform: uppercase;
}


    </style>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                <!-- <img height="50px" width="300px" src="<?php echo base_url() ?>Assets\images\ribbon.png "> -->
                    <p class="header">CountryInfo</p>
                    <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
                </div>
                <div class=" border-top "></div>
                <div class="row card p-3">
                    <div class="col-md-12">
                        <div class=" p-2">
                        <div class="bord"><h3 class=" heads">Basic Information</h3>
                        <form role="form" id="Form" action="" method="post">
<div class="row p-3">

   <div class="col-sm-12 col-md-6 col-lg-2 form-group  form-group">
       <label for="">Select Country <c>*</c></label>
       <select name="country" id="country" class=" js-states form-control"  multiple="multiple" >
       <option data-countryCode="1">Algeria</option>
       <option data-countryCode="2">Andorra</option>
       <option data-countryCode="3">Angola </option>
       <option data-countryCode="4">Anguilla</option>
       <option data-countryCode="5">Antigua &amp; Barbuda</option>
       <option data-countryCode="6">Argentina</option>
       <option data-countryCode="7">Armenia</option>
     
       </select>
   </div>
   <div class="col-sm-12 col-md-6 col-lg-2 form-group custom-dropdown">
       <label for="">Country Code<c>*</c></label>
       <select name="countrycode" id="countrycode" class="js-states form-control" multiple="multiple">
       <!-- <option selected disabled  value="0"></option> -->
       <option data-countryCode="1" >Al</option>
       <option data-countryCode="2">1.An</option>
       <option data-countryCode="3">2.Ang </option>
       <option data-countryCode="4">3.Angu</option>
       <option data-countryCode="5">4.Ba</option>
       <option data-countryCode="6">5.Arg</option>
       <option data-countryCode="7">6.Arm</option>
     
       </select>
   </div>

   <div class="col-sm-12 col-md-6 col-lg-2 form-group custom-dropdown">
       <label for="">Demo<c>*</c></label>
       <select name="countrycode" id="countryco"  data-control="select2" data-hide-search="true" class="js-states form-control nav selectpicker" onchange="location = this.value;">
       <!-- <option selected disabled  value="0"></option> -->
       <option value="1">Demo</option>
       <option value="">Demo1</option>
        <option value="../Form" style="background: #5cb85c; color: #fff;" >ERegistration</option>
       </select>
   </div>


<script type="text/javascript">
  $(".nav").change(function() {
  window.location.href = $(".nav").value;
  window.location = $(".nav").val;
  alert($(".nav").val());
</script>
   
                  

                                    <div class="col-sm-12 col-md-6 col-lg-12 ">
                                        
                                        <button type="button" class="btn btn-primary  btn-save"><i class="fas fa-save"></i>&nbsp;&nbsp;Save</button>  
                                        <button type="button" class="btn btn-danger  btn-edit" ><i class="fas fa-times"></i>&nbsp;&nbsp;&nbsp;Edit</button>  
                                    </div>   
 </div>
</form>

</div>
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
        
              $("#country").select2({ theme:"classic" });
              $("#countrycode").select2({ theme:"classic" });
              $("#countryco").select2({});
             
      
                                            function preview() {
                                                frame.src = URL.createObjectURL(event.target.files[0]);
                                            }
                                            function clearImage() {
                                                document.getElementById('formFile').value = null;
                                                frame.src = "";
                                                
                                            }
  $(".nav").change(function() {
  window.location.href = $(".nav").value;
  window.location = $(".nav").val;
  //alert($(".nav").val());
});

                                        </script>
                                        
                   
                       
     