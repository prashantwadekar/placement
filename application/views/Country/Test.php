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

  <!-- Include the Select2 library -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- Create the select element -->
<select id="my-select" class="js-example-basic-multiple">
  <option value="1">Option 1</option>
  <option value="2">Option 2</option>
  <option value="3">Option 3</option>
</select>

<!-- Initialize the Select2 dropdown -->
<script>
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2({
      templateResult: function(option) {
        var $option = $(option.element);
        var button = '<button class="my-button">Button</button>';
        return $option.text() + button;
      },
      templateSelection: function(option) {
        return option.text;
      }
    });
  });
</script>

<!-- Add an event listener for the button click -->
<script>
  $(document).ready(function() {
    $('.my-button').click(function() {
      // Create the form element
      var form = document.createElement('form');
      form.id = 'registration-form';
      
      // Add form inputs
      form.innerHTML = '<label for="name">Name:</label><br>' +
                       '<input type="text" id="name" name="name"><br>' +
                       '<label for="email">Email:</label><br>' +
                       '<input type="email" id="email" name="email"><br>' +
                       '<label for="password">Password:</label><br>' +
                       '<input type="password" id="password" name="password"><br><br>' +
                       '<input type="submit" value="Submit">';
      
      // Attach an event listener to the form's submit event
      form.addEventListener('submit', function(event) {
        // Prevent the default form submission behavior
        event.preventDefault();
        
        // Get the form data
        var name = form.elements.name.value;
        var email = form.elements.email.value;
        var password = form.elements.password.value;
        
        // Do something with the form data
        console.log('Name:', name);
        console.log('Email:', email);
        console.log('Password:', password);
      });
      
      // Append the form to the body
      document.body.appendChild(form);
   

   
                  

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
                                        
                   
                       
     